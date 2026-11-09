<?php
/* Template Name: Em construcao */
get_header(); ?>

<main>
    <div class="container-fluid p-0" style="margin-top: 125px">
        <div class="row mx-0">
            <div class="d-flex flex-wrap justify-content-center p-5 gap-4" style="min-height: 600px">
                <div class="d-flex flex-column justify-content-center align-items-start coordly-text-dark">
                    <div style="background-color: #F7EEDE; border-radius: 100px; padding: 5px 15px;" class="d-flex align-items-center gap-2 fw-bold mb-2">
                        <svg width="20" height="20" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.83334 10.3333V13.6667M4.25 10.3333L11.75 2.83334M9.25 10.3333L14.6667 4.91667M1.33334 8.25L6.75 2.83334M12.1667 10.3333V13.6667M2.16667 13.6667H5.5M10.5 13.6667H13.8333M12.1667 2.83334V1.16667M3.83334 2.83334V1.16667M1.33334 3.66667C1.33334 3.44566 1.42113 3.2337 1.57741 3.07742C1.73369 2.92114 1.94566 2.83334 2.16667 2.83334H13.8333C14.0543 2.83334 14.2663 2.92114 14.4226 3.07742C14.5789 3.2337 14.6667 3.44566 14.6667 3.66667V9.5C14.6667 9.72102 14.5789 9.93298 14.4226 10.0893C14.2663 10.2455 14.0543 10.3333 13.8333 10.3333H2.16667C1.94566 10.3333 1.73369 10.2455 1.57741 10.0893C1.42113 9.93298 1.33334 9.72102 1.33334 9.5V3.66667Z" stroke="#FDBF5E" stroke-width="1.41667" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p class="mb-0 text-nowrap">Em construção</p>
                    </div>
                    <h1>Página em construção</h1>
                    <p style="color: #777E86; max-width: 500px;">Estamos trabalhando para entregar uma nova experiência. <br>
                    Enquanto isso, navegue por outras áreas do site ou entre em contato com nossa equipe.</p>
                    <a class="btn text-nowrap coordly-btn-quaternary px-4 py-2 mb-2" href="https://lp.coordly.co/cadastro">Vídeo de Introdução</a>
                    <a class="btn text-nowrap coordly-btn-quaternary px-4 py-2 mb-2" href="<?php echo home_url(); ?>">← Voltar ao Início</a>
                </div>
                <div style="max-width: 700px;">
					<img src="<?php echo get_template_directory_uri(); ?>/temp/construc.png" alt="Em construcao" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
				</div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>