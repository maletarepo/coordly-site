<nav class="navbar navbar-expand-xl fixed-top coordly-navbar py-4">
    <div class="container-fluid mx-5 px-0 px-lg-5">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Coordly logo" height="65" />
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Alternar navegação"
            style="border: none; box-shadow: none">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarSupportedContent">
            <ul class="navbar-nav col-8 gap-4 py-2">
                <li class="nav-item me-4">
                    <a class="nav-link coordly-nav-item" href="<?php echo home_url(); ?>" style="color: #8697a8">
                        <h5 class="mb-0">Início</h5>
                    </a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link coordly-nav-item" href="<?php echo home_url(); ?>" style="color: #8697a8">
                        <h5 class="mb-0">Sobre</h5>
                    </a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link coordly-nav-item" href="<?php echo home_url(); ?>" style="color: #8697a8">
                        <h5 class="mb-0">Planos</h5>
                    </a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link coordly-nav-item" href="<?php echo home_url(); ?>/blog" style="color: #8697a8">
                        <h5 class="mb-0">Blog</h5>
                    </a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link coordly-nav-item" href="<?php echo home_url(); ?>" style="color: #8697a8">
                        <h5 class="mb-0">Contato</h5>
                    </a>
                </li>
                <li class="nav-item me-4">
                    <a
                        class="nav-link coordly-nav-item"
                        href="https://help.coordly.co/"
                        target="_blank"
                        style="color: #8697a8"
                    >
                        <h5 class="mb-0">FAQ</h5>
                    </a>
                </li>
            </ul>
            <div class="d-flex flex-wrap flex-lg-nowrap gap-3 py-2">
                <a
                    class="btn text-nowrap coordly-btn-secondary px-3 py-2 d-flex align-items-center gap-1"
                    href="https://app.maletadoengenheiro.com.br/">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 1.5875C5.36251 1.5875 1.59167 5.3625 1.59167 10C1.59167 12.2542 2.46667 14.3667 4.05834 15.9542C5.64167 17.5375 7.75001 18.4125 9.99584 18.4125C12.2417 18.4125 14.35 17.5375 15.9375 15.95C17.5292 14.3625 18.4083 12.25 18.4083 10C18.4083 5.3625 14.6333 1.5875 9.99584 1.5875H10ZM10 3.00416C13.8583 3.00416 16.9958 6.14166 16.9958 10C16.9958 11.4208 16.575 12.7708 15.7917 13.9208C15.2958 12.675 14.3375 11.6583 13.0542 11.025C13.6292 10.3375 13.975 9.45 13.975 8.4875C13.975 6.29583 12.1917 4.5125 10 4.5125C7.80834 4.5125 6.02918 6.29583 6.02918 8.4875C6.02918 9.45 6.37501 10.3375 6.95001 11.025C5.66668 11.6583 4.70834 12.675 4.21251 13.9208C3.43334 12.775 3.00834 11.4208 3.00834 10C3.00834 6.14166 6.14584 3.00416 10 3.00416ZM7.44584 8.4875C7.44584 7.07916 8.59168 5.93333 10 5.93333C11.4083 5.93333 12.5542 7.07916 12.5542 8.4875C12.5542 9.89583 11.4083 11.0417 10 11.0417C8.59168 11.0417 7.44584 9.89583 7.44584 8.4875ZM5.31668 15.1792C5.58334 13.7208 6.66251 12.55 8.22084 12.0333C8.75834 12.3042 9.36251 12.4625 10.0042 12.4625C10.6458 12.4625 11.25 12.3042 11.7875 12.0333C13.3417 12.55 14.4167 13.7208 14.6917 15.1792C13.4042 16.35 11.7542 16.9958 10.0042 16.9958C8.25418 16.9958 6.60418 16.35 5.32084 15.1833L5.31668 15.1792Z" fill="currentColor"/>
                    </svg>
                    Login
                </a>
                <a
                    class="btn text-nowrap coordly-btn-primary px-3 py-2"
                    href="https://lp.coordly.co/cadastro"
                    target="_blank">
                    Agende uma conversa ➜
                </a>
            </div>
        </div>
    </div>
</nav>