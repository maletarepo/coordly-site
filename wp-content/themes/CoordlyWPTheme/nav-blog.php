<nav
  id="nav-blog"
  class="navbar navbar-expand-xl fixed-top coordly-navbar py-4"
>
  <div class="container-fluid coordly-navbar-mx">
    <div class="d-flex align-items-center flex-nowrap">
      <a class="navbar-brand pe-3 py-0 my-2 border-end border-1" href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Coordly logo" height="55" />
      </a>
      <h5 class="mb-0" style="color: #8697a8">Blog</h5>
    </div>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Alternar navegação"
      style="border: none; box-shadow: none"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div
      class="collapse navbar-collapse justify-content-end"
      id="navbarSupportedContent"
    >
      <ul class="navbar-nav col-md-7 gap-2 py-2">
        <li class="nav-item me-4">
          <a class="nav-link coordly-nav-item" href="<?php echo home_url(); ?>/blog" style="color: #8697a8">Início</a>
        </li>
        <li class="nav-item me-4">
          <div class="dropdown">
            <a
              class="nav-link coordly-nav-item dropdown-toggle"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              style="color: #8697a8"
              >Categorias</a
            >
            <ul class="dropdown-menu">
              <?php 
                $categories = get_categories();
                foreach ($categories as $category): ?>
                  <li>
                    <a class="dropdown-item coordly-nav-item" href="<?php echo esc_url(get_category_link($category->term_id)); ?>" style="color: #8697a8">
                      <?php echo esc_html($category->name); ?>
                    </a>
                  </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </li>
        <li class="nav-item me-4">
          <a class="nav-link coordly-nav-item" href="<?php echo home_url(); ?>/blog/arquivos" style="color: #8697a8">Arquivos</a>
        </li>
        <li class="nav-item me-4">
          <a
            class="nav-link coordly-nav-item"
            href="https://help.coordly.co/"
            target="_blank"
            style="color: #8697a8"
            >FAQ</a
          >
        </li>
      </ul>
      <div class="d-flex flex-nowrap align-items-center gap-2 py-2">
        <?php echo coordly_language_switcher( 'blog' ); ?>
        <form class="d-flex flex-nowrap" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
          <input
            class="form-control me-2"
            type="search"
            name="s"
            placeholder="Pesquisar artigos..."
            aria-label="Search"
            style="
              outline: none;
              box-shadow: none;
              border-color: grey !important;
            "
            required
          />
          <button class="btn coordly-btn-primary px-2 py-2" type="submit">
            Buscar
          </button>
        </form>
      </div>
    </div>
  </div>
</nav>