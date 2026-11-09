<?php get_header(); ?>

<main>
    <div class="container-fluid p-0" style="margin-top: 100px">
        <div class="row mx-0">
            <div class="col d-flex justify-content-center p-0">
                <div
                    class="col rounded shadow p-3 p-lg-4 my-5 mx-3 mx-lg-5 coordly-text-dark"
                    style="max-width: 1000px"
                >
                    <?php 
                    if ( have_posts() ) : 
                        while ( have_posts() ) : the_post(); 
                    ?>
                        
                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <?php foreach (get_the_category() as $category): ?>
                                <a href="<?= esc_url(get_category_link($category->term_id)); ?>" class="py-1 px-2 btn coordly-btn-primary text-nowrap text-decoration-none">
                                    <h6 class="mb-0"><?= esc_html($category->name); ?></h6>
                                </a>
                            <?php endforeach; ?>
                        </div>

                        <h1><?php the_title(); ?></h1>

                        <p><?php echo get_the_date(); ?></p>
                        
                        <div class="post-thumbnail mb-3" style="height: auto">
                            <?php 
                            if ( has_post_thumbnail() ) { 
                                the_post_thumbnail();
                            }
                            ?>
                        </div>
                        
                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>
                        
                        <?php
                        if (comments_open() || get_comments_number()) {
                            comments_template();
                        }
                        ?>

                    <?php 
                        endwhile; 
                    else : 
                    ?>
                        <p>Nenhum post encontrado...</p>
                    <?php 
                    endif; 
                    ?>

                    

                </div>
            </div>
        </div>

        <div class="row mx-0 d-flex flex-column">
            <div
                class="d-flex flex-wrap align-items-center p-0 px-lg-5 mt-5 mx-5">
                <h1
                    class="coordly-text-dark border-start border-5 px-3"
                    style="border-color: #3547c8 !important">
                    Confira outros artigos
                </h1>
            </div>
            <div class="swiper swiper-5 p-0 m-0">
                <div class="swiper-wrapper my-5">
                    <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 6,
                        'post__not_in'   => array(get_the_ID()),
                    );

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                            <div class="swiper-slide d-flex justify-content-center" style="height: auto">
                                <a href="<?php the_permalink(); ?>"
                                class="d-flex flex-column p-4 rounded shadow text-decoration-none coordly-text-dark"
                                style="max-width: 400px">
                                    
                                    <div class="post-thumbnail rounded mb-2" style="height: 200px">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    
                                    <h4><?php the_title(); ?></h4>
                                    
                                    <p><?php echo get_the_date(); ?></p>
                                    
                                    <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>

                                    <div class="d-flex flex-wrap gap-1">
                                        <?php foreach (get_the_category() as $category): ?>
                                            <div class="py-1 px-2 text-white rounded text-nowrap" style="background-color: #3547c8">
                                                <h6 class="mb-0"><?= esc_html($category->name); ?></h6>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </a>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        ?>
                        <div class="d-flex justify-content-center">
                            <p class="coordly-text-dark">Sem posts...</p>
                        </div>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>