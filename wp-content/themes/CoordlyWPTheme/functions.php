<?php

/* ======================================================================
 * TRANSLATEPRESS — desativa o seletor flutuante padrão (usamos o nosso)
 * ====================================================================== */
// Filtra o HTML do floater para vazio, evitando qualquer output
add_filter( 'trp_floater_ls_html_v2', '__return_empty_string', 99 );


/* ======================================================================
 * THEME SETUP
 * ====================================================================== */
function my_custom_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'my_custom_theme_setup' );


/* ======================================================================
 * ENQUEUE ASSETS
 * ====================================================================== */
function enqueue_custom_assets() {
    // CSS
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'swiper-css',    get_template_directory_uri() . '/assets/css/swiper-bundle.min.css' );

    $style_path    = get_stylesheet_directory() . '/style.css';
    $style_version = file_exists( $style_path ) ? filemtime( $style_path ) : null;

    wp_enqueue_style( 'theme-style', get_stylesheet_uri(), [], $style_version );

    // JS
    wp_enqueue_script( 'bootstrap-js',      get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', [], null, true );
    wp_enqueue_script( 'swiper-js',         get_template_directory_uri() . '/assets/js/swiper-bundle.min.js',   [], null, true );
    wp_enqueue_script( 'lottie-player-js',  get_template_directory_uri() . '/assets/js/lottie-player.js',       [], null, true );

    $main_path    = get_template_directory() . '/assets/js/main.js';
    $main_version = file_exists( $main_path ) ? filemtime( $main_path ) : null;

    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', [], $main_version, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_assets' );


/* ======================================================================
 * i18n HELPERS
 * ====================================================================== */

/**
 * Retorna o código de idioma atual (pt | en | es) baseado na URL.
 * Compatível com TranslatePress (rotas /en/, /es/) e com o cookie coordly_lang.
 */
function coordly_current_lang(): string {
    static $cached_lang = null;
    if ( $cached_lang !== null ) return $cached_lang;

    // 1) Prefixo de URL (método mais confiável com TranslatePress)
    $uri = $_SERVER['REQUEST_URI'] ?? '/';
    if ( preg_match( '#^/(en)(/|$)#', $uri ) ) { $cached_lang = 'en'; return 'en'; }
    if ( preg_match( '#^/(es)(/|$)#', $uri ) ) { $cached_lang = 'es'; return 'es'; }

    // 2) Cookie salvo (fallback para páginas sem prefixo que vieram de redirect)
    if ( ! empty( $_COOKIE['coordly_lang'] ) ) {
        $lang = $_COOKIE['coordly_lang'];
        if ( in_array( $lang, [ 'en', 'es' ], true ) ) {
            $cached_lang = $lang;
            return $lang;
        }
    }

    $cached_lang = 'pt';
    return 'pt';
}

/**
 * Retorna o locale completo para uso em og:locale e html lang.
 */
function coordly_current_locale(): string {
    $lang = coordly_current_lang();
    if ( $lang === 'en' ) return 'en_US';
    if ( $lang === 'es' ) return 'es_ES';
    return 'pt_BR';
}

/**
 * Helper de tradução inline para o tema.
 * Uso: coordly_t( 'Texto em PT', 'Text in EN', 'Texto en ES' )
 */
function coordly_t( string $pt, string $en, string $es = '' ): string {
    $lang = coordly_current_lang();
    if ( $lang === 'en' ) return $en;
    if ( $lang === 'es' ) return ( $es !== '' ) ? $es : $en;
    return $pt;
}

/**
 * Retorna as meta tags descritivas do site para o idioma atual.
 */
function coordly_get_meta_tags( string $locale = 'pt_BR' ): array {
    $tags = [
        'pt_BR' => [
            'description'   => 'A Coordly é uma plataforma completa para gerenciar documentos de construção de forma eficiente. Colaboração e produtividade em seus projetos.',
            'keywords'      => 'Coordly, gestão de documentos, engenharia, construção, BIM, colaboração, controle de versão, fluxo de trabalho, armazenamento de documentos',
            'author_suffix' => 'Transformando a gestão de projetos de engenharia',
            'og_title'      => 'Coordly - Gestão Inteligente de Documentos para Engenharia',
            'og_description'=> 'Centralize, organize e compartilhe arquivos de construção de forma colaborativa com a Coordly. Ideal para projetos complexos e uso do modelo BIM.',
            'og_locale'     => 'pt_BR',
        ],
        'en_US' => [
            'description'   => 'Coordly is a complete platform for managing construction documents efficiently. Collaboration and productivity for your BIM projects.',
            'keywords'      => 'Coordly, document management, engineering, construction, BIM, collaboration, version control, workflow, document storage',
            'author_suffix' => 'Transforming engineering project management',
            'og_title'      => 'Coordly - Intelligent Document Management for Engineering',
            'og_description'=> 'Centralize, organize and share construction files collaboratively with Coordly. Ideal for complex projects and BIM model workflows.',
            'og_locale'     => 'en_US',
        ],
        'es_ES' => [
            'description'   => 'Coordly es una plataforma completa para gestionar documentos de construcción de forma eficiente. Colaboración y productividad en tus proyectos BIM.',
            'keywords'      => 'Coordly, gestión de documentos, ingeniería, construcción, BIM, colaboración, control de versiones, flujo de trabajo, almacenamiento de documentos',
            'author_suffix' => 'Transformando la gestión de proyectos de ingeniería',
            'og_title'      => 'Coordly - Gestión Inteligente de Documentos para Ingeniería',
            'og_description'=> 'Centraliza, organiza y comparte archivos de construcción de forma colaborativa con Coordly. Ideal para proyectos complejos y flujos de trabajo BIM.',
            'og_locale'     => 'es_ES',
        ],
    ];

    return $tags[ $locale ] ?? $tags['pt_BR'];
}


/* ======================================================================
 * LANGUAGE SWITCHER
 * Dropdown com bandeiras que usa a API do TranslatePress para gerar URLs.
 * Contexto: 'nav' (claro, fundo branco) | 'blog' (cinza) | 'footer' (escuro)
 * ====================================================================== */

/**
 * Configuração dos idiomas disponíveis.
 * Adicione 'es' aqui depois de habilitar no TranslatePress Pro.
 */
function coordly_available_languages(): array {
    return [
        'pt' => [ 'label' => 'PT', 'flag' => '🇧🇷', 'locale' => 'pt_BR', 'url_prefix' => '' ],
        'en' => [ 'label' => 'EN', 'flag' => '🇺🇸', 'locale' => 'en_US', 'url_prefix' => 'en' ],
        // Descomente após habilitar ES no TranslatePress:
        // 'es' => [ 'label' => 'ES', 'flag' => '🇪🇸', 'locale' => 'es_ES', 'url_prefix' => 'es' ],
    ];
}

/**
 * Gera a URL traduzida para um idioma.
 *
 * Constrói a URL manualmente manipulando o prefixo de idioma na URL atual.
 * O TranslatePress serve o conteúdo em /en/ (não /en_US/), então geramos
 * essas URLs diretamente sem depender da API interna do TRP, que pode
 * retornar locales em vez de slugs de URL.
 */
function coordly_get_language_url( string $target_lang ): string {
    // Usa get_option('home') em vez de home_url() para evitar que o
    // TranslatePress retorne a URL já prefixada com /en/ nas páginas traduzidas.
    $home = rtrim( get_option( 'home' ), '/' );

    // Monta a URL atual a partir do servidor (sem depender de get_permalink)
    $scheme      = ( is_ssl() ? 'https' : 'http' );
    $current_url = $scheme . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    // Remove a base para obter só o path — usa o host real (não o home_url filtrado)
    $base = $scheme . '://' . $_SERVER['HTTP_HOST'];
    $path = substr( $current_url, strlen( $base ) );
    if ( $path === '' || $path === false ) {
        $path = '/';
    }

    // Remove prefixo de idioma existente (/en/... ou /es/...)
    $path = preg_replace( '#^/(en|es)(/|$)#', '/', $path );

    // Garante barra inicial
    $path = '/' . ltrim( $path, '/' );

    if ( $target_lang === 'pt' ) {
        return $home . $path;
    }

    return $home . '/' . $target_lang . $path;
}

/**
 * Renderiza o dropdown de seleção de idioma.
 *
 * @param string $context  'nav' | 'blog' | 'footer'
 * @return string  HTML do switcher
 */
function coordly_language_switcher( string $context = 'nav' ): string {
    $current_lang = coordly_current_lang();
    $languages    = coordly_available_languages();

    // Cores por contexto
    if ( $context === 'footer' ) {
        $btn_style = 'background:transparent; color:#adb5bd; border:1px solid #495057;';
    } elseif ( $context === 'blog' ) {
        $btn_style = 'background:transparent; color:#8697a8; border:1px solid #dee2e6;';
    } else {
        $btn_style = 'background:transparent; color:inherit; border:1px solid rgba(0,0,0,.15);';
    }

    $current = $languages[ $current_lang ] ?? $languages['pt'];

    ob_start();
    ?>
    <div class="coordly-lang-switcher dropdown">
        <button
            class="btn btn-sm dropdown-toggle d-flex align-items-center gap-1 text-nowrap"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            style="<?php echo esc_attr( $btn_style ); ?> border-radius:6px; padding:5px 10px; font-size:.85rem; font-weight:500;">
            <span><?php echo $current['flag']; ?></span>
            <span><?php echo esc_html( $current['label'] ); ?></span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end" style="min-width:100px;">
            <?php foreach ( $languages as $lang_code => $lang_data ) : ?>
                <?php
                $is_active = ( $lang_code === $current_lang );
                $lang_url  = coordly_get_language_url( $lang_code );
                ?>
                <li>
                    <a
                        class="dropdown-item d-flex align-items-center gap-2<?php echo $is_active ? ' active fw-bold' : ''; ?>"
                        href="<?php echo esc_url( $lang_url ); ?>"
                        hreflang="<?php echo esc_attr( substr( $lang_data['locale'], 0, 2 ) ); ?>"
                        onclick="document.cookie='coordly_lang=<?php echo esc_js( $lang_code ); ?>;path=/;max-age=<?php echo YEAR_IN_SECONDS; ?>;SameSite=Lax';"
                        style="font-size:.9rem;">
                        <span><?php echo $lang_data['flag']; ?></span>
                        <span><?php echo esc_html( $lang_data['label'] ); ?></span>
                        <?php if ( $is_active ) : ?>
                            <span style="margin-left:auto; font-size:.7rem;">✓</span>
                        <?php endif; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php
    return ob_get_clean();
}


/* ======================================================================
 * LEGAL DOCUMENTS — Termos de uso / Política de privacidade
 * Layout de 2 colunas: conteúdo paginado + índice (scrollspy) + downloads.
 * ====================================================================== */

/**
 * Slugs dos templates que usam o layout de documento legal.
 */
function coordly_legal_templates(): array {
    return array( 'terms-of-use.php', 'privacy-policies.php' );
}

/**
 * Carrega CSS/JS do documento legal apenas nas páginas certas.
 */
function coordly_legal_enqueue_assets() {
    if ( ! is_page_template( coordly_legal_templates() ) ) {
        return;
    }

    $dir = get_template_directory();
    $uri = get_template_directory_uri();

    $css_path = $dir . '/assets/css/legal-document.css';
    wp_enqueue_style(
        'coordly-legal-doc',
        $uri . '/assets/css/legal-document.css',
        array( 'theme-style' ),
        file_exists( $css_path ) ? filemtime( $css_path ) : null
    );

    $js_path = $dir . '/assets/js/legal-document.js';
    wp_enqueue_script(
        'coordly-legal-doc',
        $uri . '/assets/js/legal-document.js',
        array(),
        file_exists( $js_path ) ? filemtime( $js_path ) : null,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'coordly_legal_enqueue_assets' );

/**
 * Sentence case com suporte a UTF-8: "1. OBJETO" -> "Objeto".
 */
function coordly_legal_sentence_case( string $str ): string {
    $str = trim( $str );
    if ( $str === '' ) {
        return $str;
    }
    if ( function_exists( 'mb_strtolower' ) ) {
        $lower = mb_strtolower( $str, 'UTF-8' );
        $first = mb_strtoupper( mb_substr( $lower, 0, 1, 'UTF-8' ), 'UTF-8' );
        return $first . mb_substr( $lower, 1, null, 'UTF-8' );
    }
    return ucfirst( strtolower( $str ) );
}

/**
 * Recupera o PDF configurado para o documento.
 *
 * Configuração via custom fields na página:
 *   - `documento_pdf`       : ID do anexo (recomendado) OU URL do arquivo.
 *   - `documento_pdf_nome`  : (opcional) nome exibido no lugar do arquivo.
 *
 * Tamanho e data são calculados automaticamente quando o arquivo é local.
 *
 * @return array|null  [ url, name, size, date ] ou null se não configurado.
 */
function coordly_legal_pdf( int $post_id ) {
    $meta = get_post_meta( $post_id, 'documento_pdf', true );
    $meta = apply_filters( 'coordly_legal_pdf_meta', $meta, $post_id );

    if ( empty( $meta ) ) {
        return null;
    }

    $url  = '';
    $path = '';

    if ( is_numeric( $meta ) ) {
        $url  = wp_get_attachment_url( (int) $meta );
        $path = get_attached_file( (int) $meta );
    } else {
        $url      = esc_url_raw( $meta );
        $uploads  = wp_get_upload_dir();
        if ( strpos( $url, $uploads['baseurl'] ) === 0 ) {
            $path = $uploads['basedir'] . substr( $url, strlen( $uploads['baseurl'] ) );
        }
    }

    if ( empty( $url ) ) {
        return null;
    }

    $name = wp_basename( (string) parse_url( $url, PHP_URL_PATH ) );
    $size = '';
    $date = '';

    if ( $path && file_exists( $path ) ) {
        $size = size_format( filesize( $path ), 1 );
        $date = date_i18n( 'd/m/Y', filemtime( $path ) );
    }

    $custom_name = get_post_meta( $post_id, 'documento_pdf_nome', true );
    if ( ! empty( $custom_name ) ) {
        $name = $custom_name;
    }

    return array(
        'url'  => $url,
        'name' => $name !== '' ? $name : 'documento.pdf',
        'size' => $size,
        'date' => $date,
    );
}

/**
 * Ícones SVG inline usados no layout.
 */
function coordly_legal_icon( string $name ): string {
    $svgs = array(
        'chevron-left'  => '<polyline points="15 18 9 12 15 6"></polyline>',
        'chevron-right' => '<polyline points="9 18 15 12 9 6"></polyline>',
        'arrow-up'      => '<line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline>',
        'download'      => '<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line>',
        'file'          => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline>',
    );
    $inner = $svgs[ $name ] ?? '';
    return '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $inner . '</svg>';
}

/**
 * Faz o parse do conteúdo (the_content) em título, intro e seções numeradas.
 *
 * @return array{title:string,subtitle_intro:string,sections:array}
 */
function coordly_legal_parse_content( string $raw ): array {
    $out = array( 'title' => '', 'intro' => '', 'sections' => array() );

    $raw = trim( $raw );
    if ( $raw === '' ) {
        return $out;
    }

    // Constantes padrão do ext-libxml (fallback defensivo).
    $flags = ( defined( 'LIBXML_HTMLNOIMPLIED' ) ? LIBXML_HTMLNOIMPLIED : 8192 )
           | ( defined( 'LIBXML_HTMLNODEFAULTDTD' ) ? LIBXML_HTMLNODEFAULTDTD : 4 );

    $dom = new DOMDocument();
    libxml_use_internal_errors( true );
    $dom->loadHTML(
        '<?xml encoding="utf-8" ?><div id="cdoc-root">' . $raw . '</div>',
        $flags
    );
    libxml_clear_errors();

    $root = $dom->getElementById( 'cdoc-root' );
    if ( ! $root ) {
        return $out;
    }

    $heading_tags = array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6' );

    $is_heading = function ( $node ) use ( $heading_tags ) {
        return ( $node->nodeType === XML_ELEMENT_NODE && in_array( strtolower( $node->nodeName ), $heading_tags, true ) );
    };
    $is_section = function ( $node ) use ( $is_heading ) {
        return $is_heading( $node ) && preg_match( '/^\s*\d+\.\s/u', trim( $node->textContent ) );
    };

    $intro     = '';
    $sections  = array();
    $seen_title = false;
    $curr       = null;

    foreach ( iterator_to_array( $root->childNodes ) as $node ) {
        if ( $node->nodeType !== XML_ELEMENT_NODE && $node->nodeType !== XML_TEXT_NODE ) {
            continue; // ignora comentários / PI
        }

        if ( $is_section( $node ) ) {
            if ( $curr !== null ) {
                $sections[] = $curr;
            }
            $curr = array( 'heading' => trim( $node->textContent ), 'html' => '' );
            continue;
        }

        if ( $curr === null ) {
            // Região de introdução (antes da 1ª seção numerada)
            if ( $is_heading( $node ) ) {
                if ( ! $seen_title ) {
                    $out['title'] = trim( $node->textContent );
                    $seen_title   = true;
                    continue;
                }
                // Segundo heading (ex.: "Coordly") vira subtítulo discreto.
                $intro .= '<p class="coordly-doc__subtitle">' . esc_html( trim( $node->textContent ) ) . '</p>';
                continue;
            }
            $intro .= $dom->saveHTML( $node );
            continue;
        }

        $curr['html'] .= $dom->saveHTML( $node );
    }

    if ( $curr !== null ) {
        $sections[] = $curr;
    }

    $out['intro']    = $intro;
    $out['sections'] = $sections;
    return $out;
}

/**
 * Renderiza o documento legal completo (deve ser chamado dentro do loop).
 */
function coordly_render_legal_document() {
    $parsed   = coordly_legal_parse_content( apply_filters( 'the_content', get_the_content() ) );
    $title    = $parsed['title'] !== '' ? $parsed['title'] : get_the_title();
    $sections = $parsed['sections'];

    // Paginação desativada por padrão: o documento rola inteiro numa única
    // página (índice fixo + scrollspy fazem a navegação). Para reativar o
    // paginador, use: add_filter( 'coordly_legal_paginate', '__return_true' ).
    $paginate = (bool) apply_filters( 'coordly_legal_paginate', false );
    $per_page = max( 1, (int) apply_filters( 'coordly_legal_sections_per_page', 3 ) );
    if ( ! $paginate ) {
        $per_page = max( 1, count( $sections ) );
    }

    // Monta seções (com id/numeração destacada) e o índice.
    $toc          = array();
    $sections_out = array();
    foreach ( $sections as $i => $sec ) {
        $index = $i + 1;
        $id    = 'coordly-sec-' . $index;
        $page  = (int) floor( $i / $per_page ) + 1;

        $num   = '';
        $label = coordly_legal_sentence_case( $sec['heading'] );
        if ( preg_match( '/^\s*(\d+)\.\s*(.*)$/u', $sec['heading'], $m ) ) {
            $num   = $m[1] . '.';
            $label = coordly_legal_sentence_case( $m[2] );
        }

        $heading_html  = '<h2 id="' . esc_attr( $id ) . '" class="cdoc-section-heading" data-cdoc-section>';
        if ( $num !== '' ) {
            $heading_html .= '<span class="cdoc-sec-num">' . esc_html( $num ) . '</span> ';
        }
        $heading_html .= esc_html( $label ) . '</h2>';

        $sections_out[] = array( 'page' => $page, 'html' => $heading_html . $sec['html'] );
        $toc[]          = array( 'id' => $id, 'num' => $num, 'label' => $label, 'page' => $page );
    }

    // Agrupa por página (a intro vai na página 1).
    $total_pages = $sections_out ? (int) ceil( count( $sections_out ) / $per_page ) : 1;
    $pages       = array_fill( 0, $total_pages, '' );
    foreach ( $sections_out as $sec ) {
        $pages[ $sec['page'] - 1 ] .= $sec['html'];
    }
    $pages[0] = $parsed['intro'] . $pages[0];

    $pdf = coordly_legal_pdf( (int) get_the_ID() );

    // Textos i18n
    $t_indice   = coordly_t( 'Índice', 'Contents', 'Índice' );
    $t_downloads = coordly_t( 'Downloads', 'Downloads', 'Descargas' );
    $t_backtop  = coordly_t( 'Voltar para o topo', 'Back to top', 'Volver arriba' );
    $t_prev     = coordly_t( 'Página anterior', 'Previous page', 'Página anterior' );
    $t_next     = coordly_t( 'Próxima página', 'Next page', 'Página siguiente' );
    $t_pager    = coordly_t( 'Paginação do documento', 'Document pagination', 'Paginación del documento' );
    $t_dl       = coordly_t( 'Baixar', 'Download', 'Descargar' );
    $t_print    = coordly_t( 'Baixar em PDF', 'Download as PDF', 'Descargar en PDF' );
    ?>
    <div class="coordly-doc">
        <div class="coordly-doc__main">
            <h1 class="coordly-doc__title"><?php echo esc_html( $title ); ?></h1>

            <div class="coordly-doc__pages">
                <?php foreach ( $pages as $pi => $body ) : ?>
                    <div class="coordly-doc__page<?php echo 0 === $pi ? ' is-active' : ''; ?>" data-page="<?php echo (int) ( $pi + 1 ); ?>">
                        <?php echo $body; // phpcs:ignore WordPress.Security.EscapeOutput ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php if ( $total_pages > 1 ) : ?>
                <nav class="coordly-doc__pager" aria-label="<?php echo esc_attr( $t_pager ); ?>">
                    <button type="button" class="coordly-pager__btn" data-pager="prev" aria-label="<?php echo esc_attr( $t_prev ); ?>"><?php echo coordly_legal_icon( 'chevron-left' ); ?></button>
                    <span class="coordly-pager__status" aria-live="polite">1 / <?php echo (int) $total_pages; ?></span>
                    <button type="button" class="coordly-pager__btn" data-pager="next" aria-label="<?php echo esc_attr( $t_next ); ?>"><?php echo coordly_legal_icon( 'chevron-right' ); ?></button>
                </nav>
            <?php endif; ?>
        </div>

        <aside class="coordly-doc__aside">
            <?php if ( ! empty( $toc ) ) : ?>
                <div class="coordly-card coordly-toc">
                    <h2 class="coordly-card__title"><?php echo esc_html( $t_indice ); ?></h2>
                    <hr class="coordly-card__divider">
                    <ul class="coordly-toc__list">
                        <?php foreach ( $toc as $item ) : ?>
                            <li class="coordly-toc__item" data-page="<?php echo (int) $item['page']; ?>">
                                <a class="coordly-toc__link" href="#<?php echo esc_attr( $item['id'] ); ?>">
                                    <?php if ( $item['num'] !== '' ) : ?>
                                        <span class="coordly-toc__num"><?php echo esc_html( $item['num'] ); ?></span>
                                    <?php endif; ?>
                                    <?php echo esc_html( $item['label'] ); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <hr class="coordly-card__divider">
                    <button type="button" class="coordly-backtop"><?php echo coordly_legal_icon( 'arrow-up' ); ?><?php echo esc_html( $t_backtop ); ?></button>
                </div>
            <?php endif; ?>

            <div class="coordly-card coordly-downloads">
                <h2 class="coordly-card__title"><?php echo esc_html( $t_downloads ); ?></h2>
                <hr class="coordly-card__divider">
                <?php if ( $pdf ) : ?>
                    <div class="coordly-download">
                        <span class="coordly-download__icon"><?php echo coordly_legal_icon( 'file' ); ?></span>
                        <span class="coordly-download__info">
                            <a class="coordly-download__name" href="<?php echo esc_url( $pdf['url'] ); ?>" download><?php echo esc_html( $pdf['name'] ); ?></a>
                            <?php if ( $pdf['size'] || $pdf['date'] ) : ?>
                                <span class="coordly-download__meta"><?php echo esc_html( trim( $pdf['size'] . ( $pdf['size'] && $pdf['date'] ? '  ·  ' : '' ) . $pdf['date'] ) ); ?></span>
                            <?php endif; ?>
                        </span>
                        <a class="coordly-download__btn" href="<?php echo esc_url( $pdf['url'] ); ?>" download aria-label="<?php echo esc_attr( $t_dl ); ?>"><?php echo coordly_legal_icon( 'download' ); ?></a>
                    </div>
                <?php else : ?>
                    <button type="button" class="coordly-print-btn" onclick="window.print()"><?php echo coordly_legal_icon( 'download' ); ?><?php echo esc_html( $t_print ); ?></button>
                <?php endif; ?>
            </div>
        </aside>
    </div>
    <?php
}
