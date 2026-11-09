<?php
/* Template Name: Historias de Clientes */
get_header(); ?>

<main>
    <div class="container-fluid p-0">
		<div class="row mx-0 position-relative" style="height: 100svh; background-color: #F7F7F7;">
			<div style="position: relative; z-index: 5;" class="col d-flex flex-wrap align-items-center px-0 pt-5 px-lg-5 m-5">
				<div style="max-width: 600px;" class="d-flex flex-column align-items-start justify-content-between gap-3">
					<div style="background-color: #EAEDF0; border-radius: 100px; padding: 5px 10px;" class="d-flex align-items-center gap-2 mb-2">
                        <p class="mb-0 text-nowrap">Histórias de Clientes</p>
                    </div>
                    <h2 class="coordly-text-dark fw-bold custom-font-size">
					Histórias reais de quem <span class="fw-bold custom-font-size" style="color: #3547C8;">transformou sua gestão</span> com a <span class="fw-bold custom-font-size" style="color: #3547C8;">Coordly</span>
                    </h2>
                    <p style="color: #777E86;">Empresas de diferentes portes e áreas da construção civil compartilham como ganharam eficiência, organização e controle com nossa plataforma.</p>
                </div>
			</div>
			<img
			src="<?php echo get_template_directory_uri(); ?>/temp/historias/hist-hero.png"
			alt="hero"
			loading="lazy"
			class="d-none d-xl-block p-0" 
			style="z-index: 0;
			position: absolute;
            height: 60svh;
            width: auto;
            right: 0%;
            bottom: 10%;
            object-fit: contain;"
			/>
		</div>

		<div class="row mx-0" style="background-color: #EAEDF0;">
            <div class="col d-flex flex-wrap align-items-center justify-content-center px-0 py-5 px-lg-5 mx-5 my-0 gap-5" style="position: relative; z-index: 3; overflow: hidden;">
                <h2 class="coordly-text-dark fw-bold custom-font-size-2 my-3" style="z-index: 5;">
					Nossos <spam class="coordly-text-blue fw-bold custom-font-size-2">resultados</spam> em números
                </h2>
				<div class="d-flex flex-wrap gap-5 align-items-center justify-content-center">
					<div class="d-flex flex-column align-items-center justify-content-center">
						<h2 class="m-0 fw-bold custom-font-size" style="color: #BEC2C6;"><spam class="coordly-text-blue fw-bold custom-font-size" style="">95</spam>%</h2>
						<h3 class="m-0 coordly-text-dark text-center">Satisfação de Clientes</h3>
					</div>
					<div class="d-flex flex-column align-items-center justify-content-center">
						<h2 class="m-0 fw-bold custom-font-size" style="color: #BEC2C6;">+<spam class="coordly-text-blue fw-bold custom-font-size" style="">100</spam></h2>
						<h3 class="m-0 coordly-text-dark text-center">Empresas Atendidas</h3>
					</div>
					<div class="d-flex flex-column align-items-center justify-content-center">
						<h2 class="m-0 fw-bold custom-font-size" style="color: #BEC2C6;">+<spam class="coordly-text-blue fw-bold custom-font-size" style="">500</spam></h2>
						<h3 class="m-0 coordly-text-dark text-center">Obras Organizadas</h3>
					</div>
					<div class="d-flex flex-column align-items-center justify-content-center">
						<h2 class="m-0 fw-bold custom-font-size" style="color: #BEC2C6;">+<spam class="coordly-text-blue fw-bold custom-font-size" style="">500</spam>K</h2>
						<h3 class="m-0 coordly-text-dark text-center">Arquivos Versionados</h3>
					</div>
				</div>
            </div>
        </div>

		<div class="row mx-0" style="background-color: #F7F7F7;">
            <a href="<?php echo home_url(); ?>/case-dinamica/" style="text-decoration: none;" class="col d-flex flex-wrap align-items-center justify-content-center px-0 py-5 px-lg-5 mx-5 gap-3 gap-sm-5">
				<div style="max-width: 400px;" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/temp/historias/dinam.png" alt="prototipacao" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
				<div style="max-width: 600px;" class="d-flex flex-column align-items-start justify-content-center gap-3 gap-sm-3">
					<h2 class="coordly-text-dark fw-bold custom-font-size-2 m-0">
					Dinâmica Incorporadora melhora comunicação entre escritório e obra
                    </h2>
                    <p class="m-0" style="color: #777E86;">
                    Soluções digitais que eliminaram retrabalho e aumentaram a eficiência entre escritório e campo.
                    </p>
					<div class="btn text-nowrap coordly-btn-primary px-3 py-2">Ler mais</div>
                </div>
			</a>
        </div>

		<div class="row mx-0" style="background-color: #3547C8;">
			<div class="col d-flex flex-column align-items-center justify-content-center px-0 py-5 px-lg-5 mx-5 gap-5">
				<div class="d-flex" style="max-width: 784px;">
					<h2 class="text-white text-center fw-bold custom-font-size-2 mb-0">
					Veja como a <span class="fw-bold custom-font-size-2" style="color: #C7C421;">Coordly</span> faz a deferença na prática
					</h2>
				</div>
				<div class="d-flex flex-wrap align-items-start justify-content-center gap-3" style="max-width: 1300px;">
	         		<div style="max-width: 400px;" class="d-flex flex-column justify-content-between bg-white rounded p-4 gap-2">
  						<p class="mb-0" style="color: #777E86;">
						  “A Coordly é uma ferramenta que para a Dinâmica. funcionou muito desde o princípio. Antes trabalhávamos com outras plataformas que não eram tão assertivas. Conseguimos ter todas as informações em um só aplicativo. A tratativa com os fornecedores ficou muito mais fácil porque conseguimos ter esse bate e volta com eles tudo no mesmo lugar.”
						</p>
						<div class="d-flex gap-2 align-items-center mt-2">
							<div style="max-width: 48px; max-height: 48px; min-width: 48px; min-height: 48px;" class="d-flex align-items-center">
								<img src="<?php echo get_template_directory_uri(); ?>/temp/FF.png" alt="persona" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
							</div>
							<div class="d-flex flex-column justify-content-center">
								<h6 class="coordly-text-dark fw-bold mb-0">Fernanda Ferreira</h6>
								<p class="mb-0" style="color: #777E86;">Coordenadora de Projetos Executivos na Dinâmica Engenharia</p>
							</div>
						</div>
					</div>
					<div style="max-width: 400px;" class="d-flex flex-column justify-content-between bg-white rounded p-4 gap-2">
  						<p class="mb-0" style="color: #777E86;">
						  “Passando um feedback da Coordly, queria dizer que estou gostando muito dessa forma de informar a atualização dos projetos. Fica organizado, todos ficam cientes e é feito de modo objetivo, sem muitos e-mails soltos. Muito bom!”
						</p>
						<div class="d-flex gap-2 align-items-center mt-2">
							<div style="max-width: 48px; max-height: 48px; min-width: 48px; min-height: 48px;" class="d-flex align-items-center">
								<img src="<?php echo get_template_directory_uri(); ?>/temp/NGS.png" alt="persona" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
							</div>
							<div class="d-flex flex-column justify-content-center">
								<h6 class="coordly-text-dark fw-bold mb-0">Nicole Garrido Saddi</h6>
								<p class="mb-0" style="color: #777E86;">Arquiteta na Norden^</p>
							</div>
						</div>
					</div>
					<div style="max-width: 400px;" class="d-flex flex-column justify-content-between bg-white rounded p-4 gap-2">
  						<p class="mb-0" style="color: #777E86;">
						  “Armazenar nossos projetos de engenharia na nuvem tem sido crucial para manter uma gestão e organização eficientes. Com essa facilidade, podemos acessar todos os projetos de forma organizada de qualquer lugar e a qualquer momento, o que tem permitido uma comunicação ágil e colaborativa entre a equipe, mesmo em projetos complexos com muitos envolvidos.”
						</p>
						<div class="d-flex gap-2 align-items-center mt-2">
							<div style="max-width: 48px; max-height: 48px; min-width: 48px; min-height: 48px;" class="d-flex align-items-center">
								<img src="<?php echo get_template_directory_uri(); ?>/temp/FB.png" alt="persona" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
							</div>
							<div class="d-flex flex-column justify-content-center">
								<h6 class="coordly-text-dark fw-bold mb-0">Fabrício Balestrim</h6>
								<p class="mb-0" style="color: #777E86;">Engenheiro Civil e professor da EAPBIM</p>
							</div>
						</div>
					</div>
					<div style="max-width: 400px;" class="d-flex flex-column justify-content-between bg-white rounded p-4 gap-2">
  						<p class="mb-0" style="color: #777E86;">
							“...quando um colaborador precisa acessar os documentos na obra ele consegue visualizar esse documento em 3D, facilitando o entendimento e evita possíveis erros... diminui muito o consumo de papel na obra por esse acesso digital”
						</p>
						<div class="d-flex gap-2 align-items-center mt-2">
							<div style="max-width: 48px; max-height: 48px; min-width: 48px; min-height: 48px;" class="d-flex align-items-center">
								<img src="<?php echo get_template_directory_uri(); ?>/temp/IV.jpg" alt="persona" loading="lazy" style="width: 100%; height: 100%; object-fit: contain; border-radius: 50px;">
							</div>
							<div class="d-flex flex-column justify-content-center">
								<h6 class="coordly-text-dark fw-bold mb-0">Isabelle Valois</h6>
								<p class="mb-0" style="color: #777E86;">Construção e incorporação na Dinâmica Incorporadora</p>
							</div>
						</div>
					</div>
					<div style="max-width: 400px;" class="d-flex flex-column justify-content-between bg-white rounded p-4 gap-2">
  						<p class="mb-0" style="color: #777E86;">
							“Uma solução simples e eficaz, o custo-benefício que você precisa testar na sua organização.”
						</p>
						<div class="d-flex gap-2 align-items-center mt-2">
							<div style="max-width: 48px; max-height: 48px; min-width: 48px; min-height: 48px;" class="d-flex align-items-center">
								<img src="<?php echo get_template_directory_uri(); ?>/temp/EV.jpg" alt="persona" loading="lazy" style="width: 100%; height: 100%; object-fit: contain; border-radius: 50px;">
							</div>
							<div class="d-flex flex-column justify-content-center">
								<h6 class="coordly-text-dark fw-bold mb-0">Évila Araruna</h6>
								<p class="mb-0" style="color: #777E86;">Arquiteta, mestre em BIM</p>
							</div>
						</div>
					</div>
					<div style="max-width: 400px;" class="d-flex flex-column justify-content-between bg-white rounded p-4 gap-2">
  						<p class="mb-0" style="color: #777E86;">
							“A Coodly é uma plataforma extremamente intuitiva, com excelentes recursos. Para mim, um grande diferencial é a sincronização de arquivos através da integração com as principais plataformas de armazenamento, além do atendimento diferenciado! O Brasil está bem servido com esta ferramenta de gestão BIM no âmbito nacional. Parabéns à equipe Coordly!”
						</p>
						<div class="d-flex gap-2 align-items-center mt-2">
							<div style="max-width: 48px; max-height: 48px; min-width: 48px; min-height: 48px;" class="d-flex align-items-center">
								<img src="<?php echo get_template_directory_uri(); ?>/temp/RM.jpg" alt="persona" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
							</div>
							<div class="d-flex flex-column justify-content-center">
								<h6 class="coordly-text-dark fw-bold mb-0">Rani de Moraes Soares</h6>
								<p class="mb-0" style="color: #777E86;">Especialista BIM, coordenadora Quatre Ensino</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

        <div class="row mx-0" style="background-color: #F7F7F7;">
            <div class="col d-flex flex-wrap-reverse align-items-center justify-content-center px-0 pt-5 pb-0 px-lg-5 mb-5 mx-5 gap-0 gap-sm-5">
                <div style="max-width: 511px;" class="d-flex flex-column align-items-start justify-content-between">
                    <h2 class="coordly-text-dark fw-bold custom-font-size-2">
                        Pronto para <span class="fw-bold custom-font-size-2" style="color: #C88F48;">revolucionar</span> a forma que você gerencia a sua obra?
                    </h2>
                    <p style="color: #777E86;">
                    Transforme a rotina da sua obra com uma coordenação inteligente, centralizada e sem complicações. A Coordly é a parceira que faltava para você entregar mais, com menos dor de cabeça.
                    </p>
                    <a href="https://lp.coordly.co/cadastro" class="btn text-nowrap coordly-btn-primary px-3 py-2">
                    Agende uma conversa
                    </a>
                </div>
                <div style="max-width: 465px;" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/temp/hero2.png" alt="coordenadora de projetos" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
            </div>
        </div>

	</div>
</main>

<?php get_footer(); ?>