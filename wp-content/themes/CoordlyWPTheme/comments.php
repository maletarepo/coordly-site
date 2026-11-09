<div class="coordly-text-dark mt-5">
    <h2>Deixe um Comentário</h2>

    <div class="d-flex flex-column mt-3">
        <?php if (have_comments()) :
        wp_list_comments(array(
            'callback' => function($comment, $args, $depth) {
                ?>
                <div class="d-flex flex-column">
                    <div class="d-flex gap-3 align-items-center mb-1">
                        <h5 class="mb-0"><?php echo get_comment_author(); ?></h5>
                        <p class="mb-0"><?php echo get_comment_date(); ?></p>
                    </div>
                    <p><?php echo get_comment_text(); ?></p>
                </div>
                <?php
            }
        ));
        endif; ?>
    </div>

    <div>
        <?php
        comment_form(array(
            'comment_field' => '<textarea class="form-control mb-3" placeholder="Comentário" aria-label="Comment" name="comment" style="outline: none; box-shadow: none; border-color: grey !important;" required></textarea>',
            'fields' => array(
                'author' => '<input type="text" class="form-control mb-3" placeholder="Seu nome" aria-label="Username" name="author" style="outline: none; box-shadow: none; border-color: grey !important; max-width: 300px;" required />',
                'email' => '<input type="email" class="form-control mb-3" placeholder="Seu email" aria-label="Email" name="email" style="outline: none; box-shadow: none; border-color: grey !important; max-width: 300px;" required />'
            ),
            'title_reply' => '',
            'comment_notes_before' => '',
            'comment_notes_after' => '',
            'class_submit' => 'btn coordly-btn-primary px-3 py-2',
            'label_submit' => 'Publicar'
        ));
        ?>
    </div>
</div>