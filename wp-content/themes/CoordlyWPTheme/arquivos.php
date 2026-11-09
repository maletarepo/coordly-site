<?php
/* Template Name: Arquivos */
get_header(); ?>

<main>
    <div class="container-fluid p-0" style="margin-top: 120px">

        <div class="row mx-0">
            <div
                class="d-flex justify-content-center align-items-center"
                style="background-color: #3547c8; height: 100px"
            >
                <h1 class="mb-0 text-white">
                    Arquivos Coordly
                </h1>
            </div>
        </div>

        <?php
        global $wpdb;
        $months = $wpdb->get_results("
            SELECT DISTINCT YEAR(post_date) AS year, MONTH(post_date) AS month
            FROM $wpdb->posts
            WHERE post_status = 'publish' AND post_type = 'post'
            ORDER BY post_date DESC
        ");

        if ($months):
            foreach ($months as $month):
                $year = $month->year;
                $month_num = $month->month; ?>
                
                <div class="row mx-0 d-flex justify-content-center">
                    <div class="mx-3 px-3 mx-lg-5 px-lg-5 my-5" style="max-width: 1250px">
                        <h1
                            class="coordly-text-dark border-start border-5 px-3"
                            style="border-color: #3547c8 !important"
                        >
                            <?php echo date("F Y", mktime(0, 0, 0, $month_num, 1, $year)) ?>
                        </h1>
                    </div>
                </div>

                <?php
                // Query posts from the specific month
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 10,
                    'no_found_rows' => true, // Optional: Optimize query by skipping pagination
                    'date_query' => array(
                        array(
                            'year'  => $year,
                            'month' => $month_num,
                        ),
                    ),
                );

                $query = new WP_Query($args);
                
                if ($query->have_posts()) : ?>
                    <div class="row mx-0 d-flex flex-column my-4">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="col d-flex justify-content-center p-0">
                                <div
                                    class="col p-3 p-lg-4 my-2 mx-3 mx-lg-5 coordly-text-dark d-flex gap-2 flex-column flex-md-row"
                                    style="max-width: 1200px"
                                >
                                    <a
                                        href="<?php the_permalink(); ?>"
                                        class="post-thumbnail rounded"
                                        style="min-width: 30%; max-width: 100%"
                                    >
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php endif; ?>
                                    </a>
                                    <div class="d-flex flex-column justify-content-between" style="min-width:70%; max-width: 100%">
                                        <a href="<?php the_permalink(); ?>" style="text-decoration: none !important">
                                            <h2 class="coordly-text-dark"><?php the_title(); ?></h2>
                                        </a>
                                        <a href="<?php the_permalink(); ?>" style="text-decoration: none !important">
                                            <p class="coordly-text-dark"><?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?></p>
                                        </a>
                                        <a href="<?php the_permalink(); ?>" style="text-decoration: none !important">
                                            <p class="coordly-text-dark mb-0"><?php echo get_the_date(); ?></p>
                                        </a>
                                        <div class="d-flex flex-wrap gap-1">
                                            <?php foreach (get_the_category() as $category): ?>
                                                <a href="<?= esc_url(get_category_link($category->term_id)); ?>" class="py-1 px-2 btn coordly-btn-primary text-nowrap text-decoration-none">
                                                    <h6 class="mb-0"><?= esc_html($category->name); ?></h6>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php
                endif;

                wp_reset_postdata();
            endforeach;
        endif;
        ?>

    </div>
</main>

<?php get_footer(); ?>