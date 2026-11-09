/* ==========================================================================
 * Coordly — Legal Document
 * Paginação do texto, índice com scrollspy e "voltar para o topo".
 * Progressive enhancement: sem JS, todas as páginas ficam visíveis.
 * ========================================================================== */
(function () {
  'use strict';

  var doc = document.querySelector('.coordly-doc');
  if (!doc) return;

  var pages = Array.prototype.slice.call(doc.querySelectorAll('.coordly-doc__page'));
  var pager = doc.querySelector('.coordly-doc__pager');
  var prevBtn = pager ? pager.querySelector('[data-pager="prev"]') : null;
  var nextBtn = pager ? pager.querySelector('[data-pager="next"]') : null;
  var status = pager ? pager.querySelector('.coordly-pager__status') : null;
  var tocItems = Array.prototype.slice.call(doc.querySelectorAll('.coordly-toc__item'));
  var total = pages.length;
  var current = 1;

  // Sem paginação real: nada a ativar (deixa o conteúdo fluido).
  if (total <= 1) {
    setActivePage(1); // garante que a única página fique visível
    initScrollSpy();
    initBackToTop();
    return;
  }

  doc.classList.add('is-paginated');

  function pageOfSection(id) {
    for (var i = 0; i < pages.length; i++) {
      if (pages[i].querySelector('#' + cssEscape(id))) return i + 1;
    }
    return 1;
  }

  function setActivePage(n) {
    current = Math.min(Math.max(n, 1), total);
    pages.forEach(function (p, i) {
      p.classList.toggle('is-active', i + 1 === current);
    });
    if (status) status.textContent = current + ' / ' + total;
    if (prevBtn) prevBtn.disabled = current === 1;
    if (nextBtn) nextBtn.disabled = current === total;
    // Marca item de TOC da página atual como "disponível"
    tocItems.forEach(function (item) {
      var onPage = parseInt(item.getAttribute('data-page'), 10) === current;
      item.classList.toggle('is-on-page', onPage);
    });
  }

  function goToPage(n, opts) {
    setActivePage(n);
    // Destaca imediatamente a 1ª seção da página atual (feedback sem esperar o scroll).
    var firstSec = pages[current - 1] && pages[current - 1].querySelector('[data-cdoc-section]');
    if (firstSec) highlightToc(firstSec.id);
    if (!opts || opts.scroll !== false) {
      scrollToEl(doc.querySelector('.coordly-doc__title') || doc, false);
    }
  }

  if (prevBtn) prevBtn.addEventListener('click', function () { goToPage(current - 1); });
  if (nextBtn) nextBtn.addEventListener('click', function () { goToPage(current + 1); });

  // Navegação por teclado (setas) quando o foco não está num campo
  document.addEventListener('keydown', function (e) {
    if (/^(INPUT|TEXTAREA|SELECT)$/.test((e.target.tagName || ''))) return;
    if (e.key === 'ArrowRight' && current < total) goToPage(current + 1);
    if (e.key === 'ArrowLeft' && current > 1) goToPage(current - 1);
  });

  // Clique no índice: troca de página se necessário e rola até a seção
  tocItems.forEach(function (item) {
    var link = item.querySelector('.coordly-toc__link');
    if (!link) return;
    link.addEventListener('click', function (e) {
      var id = (link.getAttribute('href') || '').replace(/^#/, '');
      var target = id && document.getElementById(id);
      if (!target) return;
      e.preventDefault();
      var targetPage = parseInt(item.getAttribute('data-page'), 10) || pageOfSection(id);
      if (targetPage !== current) setActivePage(targetPage);
      // aguarda o reflow da troca de página antes de rolar
      requestAnimationFrame(function () { scrollToEl(target, true); });
      history.replaceState(null, '', '#' + id);
    });
  });

  setActivePage(1);
  initScrollSpy();
  initBackToTop();
  openFromHash();

  // ---- Scrollspy: destaca a seção visível no índice ---------------------
  function initScrollSpy() {
    var headings = Array.prototype.slice.call(doc.querySelectorAll('[data-cdoc-section]'));
    if (!headings.length) return;

    if ('IntersectionObserver' in window) {
      var visible = {};
      var obs = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) {
          visible[en.target.id] = en.isIntersecting ? en.intersectionRatio : 0;
        });
        var best = null, bestRatio = 0;
        headings.forEach(function (h) {
          var r = visible[h.id] || 0;
          if (r > bestRatio) { bestRatio = r; best = h.id; }
        });
        if (best) highlightToc(best);
      }, { rootMargin: '-130px 0px -65% 0px', threshold: [0, 0.25, 0.5, 1] });
      headings.forEach(function (h) { obs.observe(h); });
    } else {
      window.addEventListener('scroll', throttle(updateActiveTocByScroll, 120));
    }
  }

  function updateActiveTocByScroll() {
    var headings = Array.prototype.slice.call(doc.querySelectorAll('[data-cdoc-section]'))
      .filter(function (h) { return h.offsetParent !== null; });
    var top = 140, best = null;
    headings.forEach(function (h) {
      if (h.getBoundingClientRect().top <= top) best = h.id;
    });
    if (best) highlightToc(best);
  }

  function highlightToc(id) {
    tocItems.forEach(function (item) {
      var link = item.querySelector('.coordly-toc__link');
      var active = link && (link.getAttribute('href') || '') === '#' + id;
      item.classList.toggle('is-active', !!active);
    });
  }

  // ---- Voltar para o topo -----------------------------------------------
  function initBackToTop() {
    var btn = doc.querySelector('.coordly-backtop');
    if (!btn) return;
    btn.addEventListener('click', function () {
      scrollToEl(doc.querySelector('.coordly-doc__title') || doc, true);
    });
  }

  // ---- Abrir na seção do hash (deep link) -------------------------------
  function openFromHash() {
    var id = (location.hash || '').replace(/^#/, '');
    if (!id) return;
    var target = document.getElementById(id);
    if (!target) return;
    var p = pageOfSection(id);
    if (p !== current) setActivePage(p);
    requestAnimationFrame(function () { scrollToEl(target, false); });
  }

  // ---- utils ------------------------------------------------------------
  function scrollToEl(el, smooth) {
    if (!el) return;
    var y = el.getBoundingClientRect().top + window.pageYOffset - 110;
    window.scrollTo({ top: y < 0 ? 0 : y, behavior: smooth ? 'smooth' : 'auto' });
  }

  function cssEscape(id) {
    return (window.CSS && CSS.escape) ? CSS.escape(id) : id.replace(/([^\w-])/g, '\\$1');
  }

  function throttle(fn, wait) {
    var last = 0, t;
    return function () {
      var now = Date.now(), ctx = this, args = arguments;
      var remaining = wait - (now - last);
      if (remaining <= 0) { last = now; fn.apply(ctx, args); }
      else { clearTimeout(t); t = setTimeout(function () { last = Date.now(); fn.apply(ctx, args); }, remaining); }
    };
  }
})();
