<footer>
    <div class="pt-5 pb-4 text-white" style="background-color: #324150">
        <div class="container-fluid p-0">
            <div class="d-flex flex-wrap justify-content-between mx-5 gap-5 p-0 px-lg-5">
                <div class="p-0 d-flex flex-column">
                    <a href="<?php echo home_url(); ?>">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.svg"
                            alt="Coordly logo"
                            loading="lazy"
                            height="90" />
                    </a>
                    <span class="text-white-50 fw-bold">build it better</span>
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/temp/strgicons.png"
                        alt="Storage logos"
                        loading="lazy"
                        height="24"
                        width="104" 
                        class="mt-2" />
                </div>
                <div class="p-0 text-nowrap d-flex flex-column">
                    <h5 class="mb-3">Contato</h5>
                    <ul class="nav flex-column gap-2">
                        <li class="nav-item">
                            <a
                                class="nav-link p-0 text-white coordly-footer-link"
                                href="mailto:romeu@leb.eng.br">romeu@coordly.co</a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link p-0 text-white coordly-footer-link"
                                href="tel:+55 (62) 9 8200-6600">+55 (62) 9 8200-6600</a>
                        </li>
                    </ul>
                    <ul class="nav gap-3 mt-2">
                        <li class="nav-item">
                            <a
                                href="https://www.linkedin.com/company/maletadoengenheiro/"
                                target="_blank">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.svg"
                                    alt="Linkedin logo"
                                    loading="lazy"
                                    height="23" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="https://www.instagram.com/coordly_nova_maleta/"
                                target="_blank">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg"
                                    alt="Instagram logo"
                                    loading="lazy"
                                    height="24" />
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="https://www.youtube.com/channel/UCpJfIjYT9gay-5NySL8zxpw"
                                target="_blank">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube.svg"
                                    alt="Youtube logo"
                                    loading="lazy"
                                    height="28" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mx-5 p-0 px-lg-5 mt-4">
                <div class="d-flex flex-wrap justify-content-between gap-5 p-0 pt-4 border-top border-1 border-secondary">
                    <div class="p-0 text-nowrap d-flex flex-column">
                        <h5 class="mb-3">Certificações</h5>
                        <ul class="nav gap-4 align-items-center">
                            <li class="nav-item">
                                <a
                                    target="_blank">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/temp/bfb.svg"
                                        alt="BFB logo"
                                        loading="lazy"
                                        height="96" />
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    target="_blank">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/temp/bsb.svg"
                                        alt="BSB logo"
                                        loading="lazy"
                                        height="96" />
                                </a>
                            </li>
                        </ul>
                    </div>
                    <?php /* Apoio Finep/MCTI/FNDCT: exigido pelo Termo de Outorga nº 2657 (FAPEG/Tecnova III),
                             Cláusula Sexta, item 2, alíneas "l" (texto) e "m" (banner com link). Não remover. */ ?>
                    <div class="p-0 d-flex flex-column apoio-finep">
                        <h5 class="mb-3"><?php echo esc_html( coordly_t( 'Apoio financeiro', 'Financial support', 'Apoyo financiero' ) ); ?></h5>
                        <a class="apoio-finep__banner" href="https://www.finep.gov.br" target="_blank" rel="noopener"
                           title="Finep - Inovação e Pesquisa">
                            <picture>
                                <source media="(max-width: 600px)"
                                        srcset="<?php echo get_template_directory_uri(); ?>/assets/img/finep/banner_finep_site_clientes234x60.png"
                                        width="234" height="60">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/finep/banner_finep_site_clientes468x60.png"
                                     width="468" height="60"
                                     alt="<?php echo esc_attr( coordly_t( 'Finep - Inovação e Pesquisa. Acesse o portal da Finep.', 'Finep - Innovation and Research. Visit the Finep website.', 'Finep - Innovación e Investigación. Visite el portal de Finep.' ) ); ?>"
                                     loading="lazy" />
                            </picture>
                        </a>
                        <p class="apoio-finep__texto mt-3 mb-0">
                            <?php echo wp_kses( coordly_t(
                                'O projeto <strong>Maleta do Engenheiro (Coordly)</strong> conta com apoio financeiro da <strong>Finep</strong> e do <strong>Ministério da Ciência, Tecnologia e Inovação</strong>, com recursos do <strong>FNDCT</strong>, por meio do Programa Tecnova III, operado pela FAPEG.',
                                'The <strong>Maleta do Engenheiro (Coordly)</strong> project receives financial support from <strong>Finep</strong> and the <strong>Brazilian Ministry of Science, Technology and Innovation (MCTI)</strong>, with resources from <strong>FNDCT</strong>, through the Tecnova III Program, operated by FAPEG.',
                                'El proyecto <strong>Maleta do Engenheiro (Coordly)</strong> cuenta con apoyo financiero de <strong>Finep</strong> y del <strong>Ministerio de Ciencia, Tecnología e Innovación de Brasil (MCTI)</strong>, con recursos del <strong>FNDCT</strong>, a través del Programa Tecnova III, operado por FAPEG.'
                            ), [ 'strong' => [] ] ); ?>
                        </p>
                    </div>
                    <div class="p-0 text-nowrap d-flex flex-column">
                        <h5 class="mb-3">Baixe nossos apps</h5>
                        <ul class="nav flex-column gap-2">
                            <li class="nav-item">
                                <a
                                    href="https://apps.apple.com/br/app/maleta-do-engenheiro/id1611061856"
                                    target="_blank">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/app-store.svg"
                                        alt="App Store logo"
                                        loading="lazy"
                                        height="57" />
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    href="https://play.google.com/store/apps/details?id=com.appmaleta&pli=1"
                                    target="_blank">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/google-play.svg"
                                        alt="Google Play logo"
                                        loading="lazy"
                                        height="51" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mx-5 text-center text-white-50 pt-4 px-0 px-lg-5">
                <div class="col p-0 pt-4 d-flex flex-wrap gap-3 justify-content-between border-top border-1 border-secondary">
                    <p class="m-0">
                        <?php echo esc_html( coordly_t( 'Todos os direitos reservados', 'All rights reserved', 'Todos los derechos reservados' ) ); ?> © <?php echo date('Y'); ?>.
                        <a class="text-white-50 coordly-footer-link" href="<?php echo home_url(); ?>">Coordly</a>
                    </p>
                    <p class="m-0">
                        <?php echo coordly_language_switcher( 'footer' ); ?>
                    </p>
                    <p class="m-0">
                        <a class="text-white-50 coordly-footer-link" href="<?php echo home_url(); ?>/terms-of-use"><?php echo esc_html( coordly_t( 'Termos de uso', 'Terms of use', 'Términos de uso' ) ); ?></a>
                        |
                        <a class="text-white-50 coordly-footer-link" href="<?php echo home_url(); ?>/privacy-policies"><?php echo esc_html( coordly_t( 'Política de privacidade', 'Privacy policy', 'Política de privacidad' ) ); ?></a>
                    </p>
                    <p class="m-0 d-flex gap-2 align-items-center">
                        <span>Design por:</span>
                        <a href="https://wcr.design/" target="_blank">
                            <svg width="32" height="17" viewBox="0 0 32 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.64432 0.833496H4.89388C5.41046 0.833506 5.91796 0.969431 6.36551 1.22765C6.81306 1.48586 7.18492 1.85729 7.44384 2.3047L11.645 9.56777C11.9667 10.1243 12.1398 10.7544 12.1476 11.3973C12.1554 12.0402 11.9976 12.6743 11.6895 13.2384L10.1938 15.9807C9.5951 17.0777 8.02565 17.0897 7.4105 16.0025L0.214891 3.28388C-0.403819 2.18948 0.385569 0.833496 1.64432 0.833496Z" fill="white"/>
                                <path d="M22.9616 16.8335H19.7169C19.2001 16.8335 18.6924 16.6976 18.2446 16.4393C17.7968 16.181 17.4247 15.8094 17.1656 15.3618L12.9631 8.10052C12.6413 7.54371 12.4681 6.91334 12.4604 6.27011C12.4526 5.62689 12.6104 4.9925 12.9187 4.42806L14.4126 1.68895C15.0117 0.590995 16.5829 0.576759 17.199 1.6676L24.3901 14.3808C25.0097 15.4761 24.219 16.8335 22.9616 16.8335Z" fill="white"/>
                                <path d="M30.3928 0.833496L27.3659 0.854405C26.7456 0.847821 26.1349 1.00824 25.5978 1.31887C25.0607 1.62951 24.6169 2.07894 24.3128 2.62012L23.0683 4.8405C22.6698 5.55015 22.5277 6.37556 22.6661 7.17776C22.8044 7.97996 23.2147 8.70994 23.8279 9.24478L24.0008 9.3956C24.353 9.70265 24.7689 9.92752 25.2186 10.0539C25.6683 10.1804 26.1404 10.2052 26.6008 10.1266C27.0612 10.048 27.4984 9.86796 27.8808 9.5995C28.2632 9.33105 28.5812 8.98089 28.8118 8.57435L31.7853 3.31813C32.396 2.23753 31.632 0.846398 30.3928 0.833496Z" fill="url(#paint0_linear_34_4593)"/>
                                <defs>
                                <linearGradient id="paint0_linear_34_4593" x1="29.3824" y1="1.62761" x2="23.8824" y2="10.1864" gradientUnits="userSpaceOnUse">
                                <stop stop-color="white"/>
                                <stop offset="1" stop-color="white" stop-opacity="0"/>
                                </linearGradient>
                                </defs>
                            </svg>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    function isExternal(url) {
        const siteHost = window.location.host;
        const linkHost = (new URL(url)).host;
        return siteHost !== linkHost;
    }

    const getCookie = (name) => {
        let match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
        return match ? decodeURIComponent(match[2]) : '';
    };

    const utms = {
        utm_source: getCookie('utm_source'),
        utm_medium: getCookie('utm_medium'),
        utm_campaign: getCookie('utm_campaign'),
        utm_term: getCookie('utm_term'),
        utm_content: getCookie('utm_content')
    };

    document.querySelectorAll('a[href^="http"]').forEach(link => {
        try {
            if (isExternal(link.href)) {
                link.addEventListener('click', function (e) {
                    const url = new URL(link.href);
                    Object.entries(utms).forEach(([key, value]) => {
                        if (value) url.searchParams.set(key, value);
                    });
                    link.setAttribute('href', url.toString());
                });
            }
        } catch (err) {
            
        }
    });
});
</script>
</body>

</html>