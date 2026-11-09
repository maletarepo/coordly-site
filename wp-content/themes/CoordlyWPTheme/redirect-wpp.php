<?php
/* Template Name: WhatsApp Redirect */
get_header(); ?>

<main>
    <div class="container-fluid p-0">
        <div class="row mx-0" style="height: 100svh;">
			<div class="col d-flex flex-column align-items-center justify-content-center px-0 pt-5 px-lg-5 m-5 gap-2">
				<h2 class="coordly-text-dark fw-bold custom-font-size text-center">
					Redirecionando...
				</h2>
				<p class="text-center" style="color: #777E86;">Você será redirecionado em alguns segundos. Se estiver demorando, <a href="<?php echo esc_url($whatsapp_link); ?>">clique aqui</a>.</p>
			</div>
		</div>
    </div>
</main>

<?php get_footer(); ?>