<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KWPWPG6J');</script>
    <!-- End Google Tag Manager -->

    <!-- UTMs -->
    <script>
    (function() {
        var utms = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'];
        var params = new URLSearchParams(window.location.search);
        var hasUTMsInURL = false;

        // Salva UTMs em cookie, se existirem na URL
        utms.forEach(function(utm) {
            var value = params.get(utm);
            if (value) {
                document.cookie = utm + '=' + encodeURIComponent(value) + '; path=/; max-age=' + (60*60*24*30);
                hasUTMsInURL = true;
            }
        });

        // Se os UTMs não estão na URL, mas existem nos cookies, atualiza a URL
        if (!hasUTMsInURL) {
            const getCookie = (name) => {
                const match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
                return match ? decodeURIComponent(match[2]) : '';
            };

            const utmValues = {};
            utms.forEach(function(utm) {
                const cookieVal = getCookie(utm);
                if (cookieVal) {
                    utmValues[utm] = cookieVal;
                }
            });

            // Se encontrou ao menos 1 UTM nos cookies, insere na URL
            if (Object.keys(utmValues).length > 0) {
                const newParams = new URLSearchParams();
                Object.entries(utmValues).forEach(([key, value]) => {
                    newParams.set(key, value);
                });

                const newURL = window.location.pathname + '?' + newParams.toString();
                window.history.replaceState({}, '', newURL);
            }
        }
    })();
    </script>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    // Meta tags dinâmicas por idioma ativo
    $coordly_locale = coordly_current_locale();
    $coordly_meta   = coordly_get_meta_tags( $coordly_locale );
    ?>
    <meta name="description" content="<?php echo esc_attr( $coordly_meta['description'] ); ?>">
    <meta name="keywords" content="<?php echo esc_attr( $coordly_meta['keywords'] ); ?>">
    <meta name="author" content="Coordly - <?php echo esc_html( $coordly_meta['author_suffix'] ); ?>">
    <meta property="og:title" content="<?php echo esc_attr( $coordly_meta['og_title'] ); ?>">
    <meta property="og:description" content="<?php echo esc_attr( $coordly_meta['og_description'] ); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="<?php echo esc_attr( $coordly_meta['og_locale'] ); ?>">
    <?php wp_head(); ?>
    <style>
        /* Regular Font */
        @font-face {
        font-family: "TTFirsNeue";
        src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/TT Firs Neue Trial 1-100/TT Firs Neue Trial Regular.ttf") format("truetype");
        font-weight: 400; /* Normal weight */
        font-style: normal;
        }

        /* Bold Font */
        @font-face {
        font-family: "TTFirsNeue";
        src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/TT Firs Neue Trial 1-100/TT Firs Neue Trial Bold.ttf") format("truetype");
        font-weight: 700; /* Bold weight */
        font-style: normal;
        }

        /* Italic Font */
        @font-face {
        font-family: "TTFirsNeue";
        src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/TT Firs Neue Trial 1-100/TT Firs Neue Trial Italic.ttf") format("truetype");
        font-weight: 400;
        font-style: italic;
        }

        /* Bold Italic Font */
        @font-face {
        font-family: "TTFirsNeue";
        src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/TT Firs Neue Trial 1-100/TT Firs Neue Trial Bold Italic.ttf") format("truetype");
        font-weight: 700;
        font-style: italic;
        }

        /* Thin Font */
        @font-face {
        font-family: "TTFirsNeue";
        src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/TT Firs Neue Trial 1-100/TT Firs Neue Trial Thin.ttf") format("truetype");
        font-weight: 100; /* Thin weight */
        font-style: normal;
        }

        /* Light Font */
        @font-face {
        font-family: "TTFirsNeue";
        src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/TT Firs Neue Trial 1-100/TT Firs Neue Trial Light.ttf") format("truetype");
        font-weight: 300; /* Light weight */
        font-style: normal;
        }

        /* Medium Font */
        @font-face {
        font-family: "TTFirsNeue";
        src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/TT Firs Neue Trial 1-100/TT Firs Neue Trial Medium.ttf") format("truetype");
        font-weight: 500; /* Medium weight */
        font-style: normal;
        }

        /* Extra Light Font */
        @font-face {
        font-family: "TTFirsNeue";
        src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/TT Firs Neue Trial 1-100/TT Firs Neue Trial ExtraLight.ttf") format("truetype");
        font-weight: 200; /* Extra Light weight */
        font-style: normal;
        }

        /* DemiBold Font */
        @font-face {
        font-family: "TTFirsNeue";
        src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/TT Firs Neue Trial 1-100/TT Firs Neue Trial DemiBold.ttf") format("truetype");
        font-weight: 600; /* DemiBold weight */
        font-style: normal;
        }

        /* ExtraBold Font */
        @font-face {
        font-family: "TTFirsNeue";
        src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/TT Firs Neue Trial 1-100/TT Firs Neue Trial ExtraBold.ttf") format("truetype");
        font-weight: 800; /* ExtraBold weight */
        font-style: normal;
        }

        body {
            font-family: 'TTFirsNeue', sans-serif;
        }

        .custom-font-size {
            font-size: clamp(28px, 3vw, 48px);
        }

        .custom-font-size-2 {
            font-size: clamp(26px, 3vw, 36px);
        }

        .coordly-text-dark {
            color: #324150 !important;
        }

        .coordly-text-blue {
            color: #3547c8 !important;
        }

        .progress-fill-1,
        .progress-fill-2,
        .progress-fill-3,
        .progress-fill-4 {
            width: 100%;
            background: #3547c8;
            transition: height 0.1s ease;
            border-radius: 6px;
        }

        .swiper-nav-cstm {
            display: flex;
            flex-direction: column;
            width: auto;
            max-width: 400px;
        }
        .swiper-nav-cstm > .nav-item-cstm {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .responsive-max-height {
            max-height: 200px;
        }

        @media (min-width: 576px) {
            .responsive-max-height {
                max-height: 300px;
            }
        }

        @media (min-width: 768px) {
            .responsive-max-height {
                max-height: 550px;
            }
        }

        .coordly-btn-tertiary {
            color: #324150;
            background-color: #EAEDF0;
            border-radius: 6px;
        }

        .coordly-btn-tertiary:hover {
            background-color: #C7C421;
        }

        .coordly-btn-quaternary {
            color: #324150;
            background-color: #EAEDF0;
            border-radius: 6px;
        }

        .coordly-btn-quaternary:hover {
            color: #ffffff;
            background-color: #3547C8;
        }

        .coordly-btn-quinary {
            color: #ffffff;
            background-color: #4D55BC;
            border-radius: 6px;
        }

        .coordly-btn-quinary:hover {
            color: #4D55BC;
            background-color: #ffffff;
        }

        .coordly-btn-senary {
            color: #4D55BC;
            background-color: #ffffff;
            border-radius: 6px;
        }

        .coordly-btn-senary:hover {
            color: #ffffff;
            background-color: #4D55BC;
        }

        #coordly-pages {
            scroll-margin-top: 80vh;
        }

    </style>
    <?php if ( is_page( 'redirect-wpp' ) ) : 
        $whatsapp_link = get_post_meta( get_the_ID(), 'redirect_url', true );
        if ( empty( $whatsapp_link ) ) {
            $whatsapp_link = home_url();
        }
    ?>
        <meta http-equiv="refresh" content="5;url=<?php echo esc_url( $whatsapp_link ); ?>">
        <script type="text/javascript">
            setTimeout(function() {
                window.location.href = "<?php echo esc_js( $whatsapp_link ); ?>";
            }, 5000);
        </script>
    <?php endif; ?>
</head>

<body <?php body_class(); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KWPWPG6J"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header>
        <?php
            if (is_front_page()) {
                include get_template_directory() . '/nav-home-2.php';
            } elseif (is_home() || is_single() || is_category() || is_date() || is_search() || is_page('arquivos')) {
                include get_template_directory() . '/nav-blog.php';
            } else {
                include get_template_directory() . '/nav-home-3.php';
            }
        ?>
    </header>