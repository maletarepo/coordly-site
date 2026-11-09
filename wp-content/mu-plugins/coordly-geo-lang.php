<?php
/**
 * Plugin Name: Coordly – Geo Language Detection
 * Description: Detecta o país do visitante e redireciona (302) para o idioma correto
 *              na primeira visita. Respeita a escolha prévia via cookie `coordly_lang`.
 *              Compatível com TranslatePress Free/Pro e LiteSpeed Cache.
 * Version:     1.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* =====================================================================
 * 1. REDIRECT NA PRIMEIRA VISITA
 * ===================================================================== */
add_action( 'template_redirect', 'coordly_maybe_redirect_by_locale', 1 );

function coordly_maybe_redirect_by_locale() {
    // Ignorar admin, AJAX, REST, cron, feed e bots comuns
    if ( is_admin() || wp_doing_ajax() || wp_doing_cron() ) return;
    if ( defined( 'REST_REQUEST' ) && REST_REQUEST ) return;
    if ( is_feed() ) return;
    if ( coordly_is_bot() ) return;

    // Já existe escolha salva → não redirecionar
    if ( ! empty( $_COOKIE['coordly_lang'] ) ) return;

    // Parâmetro manual na URL → salvar e sair (TranslatePress lida com a URL)
    if ( isset( $_GET['lang'] ) || isset( $_GET['trp-edit-translation'] ) ) {
        $lang = sanitize_key( $_GET['lang'] ?? '' );
        if ( in_array( $lang, [ 'pt', 'en', 'es' ], true ) ) {
            coordly_set_lang_cookie( $lang );
        }
        return;
    }

    $uri = $_SERVER['REQUEST_URI'] ?? '/';

    // Já está em /en/ ou /es/ → registrar cookie e sair
    if ( preg_match( '#^/(en|es)(/|$)#', $uri, $m ) ) {
        coordly_set_lang_cookie( $m[1] );
        return;
    }

    // Detectar idioma alvo
    $target = coordly_detect_target_lang();

    // Se PT → só salvar cookie (está na versão correta)
    if ( $target === 'pt' ) {
        coordly_set_lang_cookie( 'pt' );
        return;
    }

    // Redirecionar para /en/ ou /es/ preservando o caminho
    coordly_set_lang_cookie( $target );

    // Montar URL de destino
    $redirect_uri = '/' . $target . $uri;

    // Evitar double-slash na raiz
    $redirect_uri = preg_replace( '#/{2,}#', '/', $redirect_uri );

    $redirect_url = home_url( $redirect_uri );

    // 302 (temporário) — seguro para geo-redirects; nunca usar 301
    wp_safe_redirect( $redirect_url, 302 );
    exit;
}

/* =====================================================================
 * 2. DETECTAR IDIOMA ALVO (cascata: Geo-IP → Accept-Language → PT)
 * ===================================================================== */
function coordly_detect_target_lang(): string {
    // --- A) Cloudflare: header CF-IPCountry (Hostinger CDN / Cloudflare proxy)
    $country = isset( $_SERVER['HTTP_CF_IPCOUNTRY'] ) ? strtoupper( trim( $_SERVER['HTTP_CF_IPCOUNTRY'] ) ) : '';

    if ( $country && $country !== 'XX' ) {
        return coordly_country_to_lang( $country );
    }

    // --- B) Fallback: Accept-Language do navegador
    $al = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';
    if ( $al ) {
        // Pega o primeiro código (ex.: "pt-BR,pt;q=0.9,en-US;q=0.8")
        preg_match( '/^([a-z]{2})/i', $al, $al_match );
        $primary = strtolower( $al_match[1] ?? 'pt' );
        if ( $primary === 'pt' ) return 'pt';
        if ( $primary === 'es' ) return 'es';
        if ( $primary === 'en' ) return 'en';
    }

    // --- C) Default
    return 'pt';
}

/* =====================================================================
 * 3. MAPA PAÍS → IDIOMA
 * ===================================================================== */
function coordly_country_to_lang( string $country ): string {
    static $pt_countries = [
        'BR', 'PT', 'AO', 'MZ', 'CV', 'GW', 'TL', 'ST', 'GQ',
    ];
    static $es_countries = [
        'ES', 'MX', 'AR', 'CO', 'CL', 'PE', 'VE', 'UY', 'PY',
        'BO', 'EC', 'CR', 'PA', 'GT', 'HN', 'SV', 'NI', 'DO',
        'CU', 'PR',
    ];

    if ( in_array( $country, $pt_countries, true ) ) return 'pt';
    if ( in_array( $country, $es_countries, true ) ) return 'es';
    return 'en'; // padrão global = inglês
}

/* =====================================================================
 * 4. HELPERS
 * ===================================================================== */
function coordly_set_lang_cookie( string $lang ): void {
    if ( headers_sent() ) return;
    // HttpOnly=false para que JS do switcher possa ler
    setcookie(
        'coordly_lang',
        $lang,
        [
            'expires'  => time() + YEAR_IN_SECONDS,
            'path'     => '/',
            'secure'   => is_ssl(),
            'httponly' => false,
            'samesite' => 'Lax',
        ]
    );
    $_COOKIE['coordly_lang'] = $lang; // disponível na mesma request
}

function coordly_is_bot(): bool {
    $ua = strtolower( $_SERVER['HTTP_USER_AGENT'] ?? '' );
    $bots = [ 'googlebot', 'bingbot', 'slurp', 'duckduckbot', 'baiduspider',
               'yandexbot', 'sogou', 'exabot', 'facebot', 'ia_archiver',
               'wget', 'curl', 'python-requests', 'scrapy' ];
    foreach ( $bots as $bot ) {
        if ( strpos( $ua, $bot ) !== false ) return true;
    }
    return false;
}

/* =====================================================================
 * 5. VARY COOKIE: informar ao LiteSpeed para não servir cache errado
 *    LiteSpeed lê o header "X-LiteSpeed-Vary" para separar versões de cache.
 * ===================================================================== */
add_action( 'send_headers', 'coordly_litespeed_vary_cookie' );

function coordly_litespeed_vary_cookie(): void {
    if ( ! headers_sent() ) {
        header( 'X-LiteSpeed-Vary: cookie=coordly_lang' );
    }
}

/* =====================================================================
 * 6. BANNER DE SUGESTÃO DE IDIOMA (alternativa ao redirect automático)
 *    Renderizado via JS client-side; detecta o cookie e o Accept-Language.
 *    Não interfere no redirect server-side acima.
 * ===================================================================== */
add_action( 'wp_footer', 'coordly_lang_suggestion_banner', 999 );

function coordly_lang_suggestion_banner(): void {
    if ( is_admin() ) return;
    // Só exibe se o usuário ainda não fez uma escolha explícita
    // (o redirect automático já terá rodado; o banner é para quem veio de /en ou /es)
    ?>
    <div id="coordly-lang-banner" style="display:none; position:fixed; bottom:24px; left:50%; transform:translateX(-50%);
         background:#fff; border:1px solid #e2e8f0; border-radius:10px; padding:14px 20px;
         box-shadow:0 4px 24px rgba(0,0,0,.12); z-index:9999; max-width:420px; width:90%;
         font-family:inherit; font-size:14px; color:#324150; align-items:center; gap:12px;">
        <span id="coordly-lang-banner-msg"></span>
        <div style="display:flex; gap:8px; margin-top:10px; flex-wrap:wrap;">
            <button id="coordly-lang-accept" onclick="coordlyLangAccept()"
                style="background:#3547c8; color:#fff; border:none; border-radius:6px;
                       padding:6px 14px; cursor:pointer; font-size:13px;">
            </button>
            <button onclick="coordlyLangDismiss()"
                style="background:#eaedf0; color:#324150; border:none; border-radius:6px;
                       padding:6px 14px; cursor:pointer; font-size:13px;">
                Continuar em Português / Keep in Portuguese / Continuar en Español
            </button>
        </div>
    </div>
    <script>
    (function() {
        var YEAR = 365 * 24 * 3600;
        var banner = document.getElementById('coordly-lang-banner');
        var msgEl  = document.getElementById('coordly-lang-banner-msg');
        var btnEl  = document.getElementById('coordly-lang-accept');

        function getCookie(n) {
            var m = document.cookie.match(new RegExp('(^| )' + n + '=([^;]+)'));
            return m ? decodeURIComponent(m[2]) : '';
        }
        function setCookie(n, v) {
            document.cookie = n + '=' + v + '; path=/; max-age=' + YEAR + '; SameSite=Lax';
        }

        // O redirect server-side já tratou a navegação. O banner só aparece se:
        // - usuario está na versão PT (sem prefixo /en ou /es)
        // - e o Accept-Language sugere outro idioma
        // - e nao tem cookie salvo ainda
        var hasLangCookie = !!getCookie('coordly_lang');
        var pathPrefixMatch = window.location.pathname.match(/^\/(en|es)(\/|$)/);
        var isDefaultLang = !pathPrefixMatch;

        if (hasLangCookie || !isDefaultLang) return; // já tratado

        var al = (navigator.language || navigator.userLanguage || 'pt').toLowerCase();
        var targetLang = null, msg = '', btnLabel = '';

        if (al.startsWith('en')) {
            targetLang = 'en';
            msg  = '🇺🇸 We noticed your browser is set to English.';
            btnLabel = 'Switch to English';
        } else if (al.startsWith('es')) {
            targetLang = 'es';
            msg  = '🇪🇸 Detectamos que tu navegador está en Español.';
            btnLabel = 'Cambiar a Español';
        }

        if (!targetLang) return; // já é PT ou desconhecido

        msgEl.textContent  = msg;
        btnEl.textContent  = btnLabel;
        banner.style.display = 'flex';
        banner.style.flexDirection = 'column';

        window.coordlyLangAccept = function() {
            setCookie('coordly_lang', targetLang);
            var prefix = '/' + targetLang;
            var newPath = prefix + window.location.pathname;
            newPath = newPath.replace(/\/{2,}/g, '/');
            window.location.href = newPath + window.location.search + window.location.hash;
        };

        window.coordlyLangDismiss = function() {
            setCookie('coordly_lang', 'pt');
            banner.style.display = 'none';
        };
    })();
    </script>
    <?php
}
