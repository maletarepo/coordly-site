<?php
/* Template Name: Termos de uso */
get_header(); ?>

<main class="coordly-doc-wrap">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            coordly_render_legal_document();
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>
