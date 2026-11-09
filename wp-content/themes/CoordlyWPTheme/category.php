<?php get_header(); ?>

<main>
    <div class="container-fluid p-0" style="margin-top: 120px">

        <div class="row mx-0">
            <div
                class="d-flex justify-content-center align-items-center"
                style="background-color: #3547c8; height: 100px"
            >
                <h1 class="mb-0 text-white">
                    <?php single_cat_title(); ?>
                </h1>
            </div>
        </div>

        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10,
            'cat' => get_queried_object_id(),
            'paged' => $paged
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

            <div class="pagination d-flex justify-content-center my-4">
                <?php
                $prev_link = get_previous_posts_link(__('Anterior'));
                $next_link = get_next_posts_link(__('Próximo'));

                if ($prev_link || $next_link): ?>
                    <div id="coordly-pages" class="d-flex gap-4">
                        <?php if ($prev_link): ?>
                            <a class="btn coordly-btn-primary py-2 px-3" style="text-decoration: none !important" href="<?= esc_url(get_previous_posts_page_link() . '#coordly-pages'); ?>">
                                <?= __('Anterior'); ?>
                            </a>
                        <?php endif; ?>

                        <?php if ($next_link): ?>
                            <a class="btn coordly-btn-primary py-2 px-3" style="text-decoration: none !important" href="<?= esc_url(get_next_posts_page_link() . '#coordly-pages'); ?>">
                                <?= __('Próximo'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>

        <?php else : ?>
            <div class="d-flex justify-content-center p-0" style="min-height: 30svh">
                <div class="p-3 p-lg-4 my-5 mx-3 mx-lg-5 coordly-text-dark">
                    <h1>Oops...</h1>
                    <p>Nenhum post encontrado...</p>
                </div>
            </div>
        <?php
        endif;
        wp_reset_postdata();
        ?>

        <div class="row mx-0 d-flex justify-content-center">
            <div class="mx-3 px-3 mx-lg-5 px-lg-5 my-5" style="max-width: 1250px">
                <h1
                class="coordly-text-dark border-start border-5 px-3"
                style="border-color: #3547c8 !important"
                >
                Categorias
                </h1>

                <div class="d-flex flex-wrap gap-3 my-5">
                    <?php
                    $categories = get_categories(array(
                        'orderby' => 'name', 
                        'order'   => 'ASC'
                    ));
                    foreach ($categories as $category) : ?>
                        <a href="<?php echo get_category_link($category->term_id); ?>" class="py-2 px-3 btn coordly-btn-primary text-nowrap text-decoration-none">
                            <h5 class="mb-0"><?php echo esc_html($category->name); ?></h5>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="row mx-0 d-flex justify-content-center">
            <div class="mx-3 px-3 mx-lg-5 px-lg-5 my-5" style="max-width: 1250px">
                <h1
                class="coordly-text-dark border-start border-5 px-3"
                style="border-color: #3547c8 !important"
                >
                Newsletter
                </h1>

                <div
                class="d-flex flex-column flex-md-row justify-content-around rounded shadow my-5"
                >
                    <form
                        class="d-flex flex-column m-4 gap-3 justify-content-between"
                    >
                        <h2 class="coordly-text-dark">
                        Quer ficar por dentro das últimas novidades da Coordly?
                        </h2>
                        <div class="d-flex flex-column gap-3">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Seu nome"
                                aria-label="Username"
                                name="nome"
                                style="
                                    outline: none;
                                    box-shadow: none;
                                    border-color: grey !important;
                                "
                                required
                            />
                            <input
                                type="email"
                                class="form-control"
                                placeholder="Seu email"
                                aria-label="Email"
                                name="email"
                                style="
                                    outline: none;
                                    box-shadow: none;
                                    border-color: grey !important;
                                "
                                required
                            />
                        </div>
                        <div class="d-flex align-items-center">
                            <button
                                type="submit"
                                class="btn coordly-btn-primary px-3 py-2"
                            >
                                Assinar Newsletter
                            </button>
                        </div>
                    </form>
                    <div class="d-flex justify-content-center align-items-center p-4">
                        <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/newsletter.svg"
                        style="max-width: 100%; height: auto"
                        loading="lazy"
                        alt="Newsletter"
                        />
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>