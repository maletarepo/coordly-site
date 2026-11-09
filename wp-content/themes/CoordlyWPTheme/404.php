<?php get_header(); ?>

<main>
    <div class="container-fluid p-0" style="margin-top: 125px">
        <div class="row mx-0">
            <div class="d-flex flex-wrap justify-content-center p-5 gap-4" style="min-height: 600px">
                <div class="d-flex flex-column justify-content-center align-items-start coordly-text-dark">
                    <div style="background-color: #F3DDDB; border-radius: 100px; padding: 5px 15px;" class="d-flex align-items-center gap-2 fw-bold mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-exclamation-triangle" viewBox="0 0 16 16" width="20" height="20" fill="#E2574C">
                            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z"></path>
                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"></path>
                        </svg>
                        <p class="mb-0 text-nowrap" style="color: #E2574C">Erro 404</p>
                    </div>
                    <h1>Página não encontrada</h1>
                    <p style="color: #777E86; max-width: 500px;">A página que você está tentando acessar não existe ou foi movida. Mas não se preocupe, vamos te redirecionar.</p>
                    <a class="btn text-nowrap coordly-btn-quaternary px-4 py-2" href="<?php echo home_url(); ?>">← Voltar ao Início</a>
                </div>
                <div style="max-width: 700px;">
					<img src="<?php echo get_template_directory_uri(); ?>/temp/404.png" alt="404" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
				</div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>