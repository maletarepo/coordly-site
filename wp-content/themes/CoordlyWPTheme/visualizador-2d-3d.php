<?php
/* Template Name: Visualizador 2D e 3D */
get_header(); ?>

<main>
    <div class="container-fluid p-0">
		<div class="row mx-0 position-relative" style="height: 100svh; background-color: #F7F7F7;">
			<div style="position: relative; z-index: 5;" class="col d-flex flex-wrap align-items-center px-0 pt-5 px-lg-5 m-5">
				<div style="max-width: 650px;" class="d-flex flex-column align-items-start justify-content-between gap-3">
					<div style="background-color: #EAEDF0; border-radius: 100px; padding: 5px 10px;" class="d-flex align-items-center gap-2 mb-2">
						<svg width="20" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.3165 5.09584C1.70817 5.09584 2.02484 4.77917 2.02484 4.38751V2.85C2.02484 2.39167 2.39567 2.02084 2.854 2.02084H4.3915C4.78317 2.02084 5.09984 1.70417 5.09984 1.31251C5.09984 0.920839 4.78317 0.604172 4.3915 0.604172H2.854C1.6165 0.604172 0.608171 1.6125 0.608171 2.85V4.38751C0.608171 4.77917 0.924837 5.09584 1.3165 5.09584Z" fill="#8697A8"/>
						<path d="M4.38734 15.975H2.84984C2.3915 15.975 2.02067 15.6042 2.02067 15.1458V13.6083C2.02067 13.2167 1.704 12.9 1.31234 12.9C0.920671 12.9 0.604004 13.2167 0.604004 13.6083V15.1458C0.604004 16.3833 1.61234 17.3917 2.84984 17.3917H4.38734C4.779 17.3917 5.09567 17.075 5.09567 16.6833C5.09567 16.2917 4.779 15.975 4.38734 15.975Z" fill="#8697A8"/>
						<path d="M16.6832 12.9042C16.2915 12.9042 15.9748 13.2208 15.9748 13.6125V15.15C15.9748 15.6083 15.604 15.9792 15.1457 15.9792H13.6082C13.2165 15.9792 12.8998 16.2958 12.8998 16.6875C12.8998 17.0792 13.2165 17.3958 13.6082 17.3958H15.1457C16.3832 17.3958 17.3915 16.3875 17.3915 15.15V13.6125C17.3915 13.2208 17.0748 12.9042 16.6832 12.9042Z" fill="#8697A8"/>
						<path d="M15.1498 0.608338H13.6123C13.2207 0.608338 12.904 0.925005 12.904 1.31667C12.904 1.70834 13.2207 2.02501 13.6123 2.02501H15.1498C15.6082 2.02501 15.979 2.39584 15.979 2.85417V4.39167C15.979 4.78334 16.2957 5.10001 16.6873 5.10001C17.079 5.10001 17.3957 4.78334 17.3957 4.39167V2.85417C17.3957 1.61667 16.3873 0.608338 15.1498 0.608338Z" fill="#8697A8"/>
						<path d="M14.2748 10.7458V7.25C14.2748 6.45 13.8457 5.70001 13.1498 5.3L10.1248 3.55417C9.78317 3.35834 9.39567 3.25417 8.99984 3.25417C8.604 3.25417 8.2165 3.35834 7.87484 3.55417L4.84984 5.3C4.154 5.70001 3.72484 6.44584 3.72484 7.25V10.7458C3.72484 11.5458 4.154 12.2917 4.84984 12.6958L7.87484 14.4417C8.2165 14.6375 8.604 14.7417 8.99984 14.7417C9.39567 14.7417 9.78317 14.6375 10.1248 14.4417L13.1498 12.6958C13.8457 12.2958 14.2748 11.55 14.2748 10.7458ZM8.2915 13.0458L5.55817 11.4667C5.29984 11.3167 5.1415 11.0417 5.1415 10.7458V7.5875L8.2915 9.40834V13.0458ZM5.84984 6.35834L8.58317 4.77917C8.71234 4.70417 8.854 4.66667 8.99984 4.66667C9.14567 4.66667 9.28734 4.70417 9.4165 4.77917L12.1498 6.35834L8.99984 8.17917L5.84984 6.35834ZM12.8623 10.7417C12.8623 11.0375 12.704 11.3125 12.4457 11.4625L9.71234 13.0417V9.40417L12.8623 7.58334V10.7417Z" fill="#8697A8"/>
						</svg>
                        <p class="mb-0 text-nowrap">Visualizador 2D e 3D</p>
                    </div>
                    <h2 class="coordly-text-dark fw-bold custom-font-size">
					Visualize, entenda e colabore com mais clareza em <span class="fw-bold custom-font-size" style="color: #3547C8;">modelos 2D e 3D</span>
                    </h2>
                    <p style="color: #777E86;">Tenha acesso rápido e preciso aos modelos do seu projeto, visualize de qualquer lugar, faça medições e navegue com facilidade — tudo sem sair da plataforma.</p>
                    <div class="d-flex flex-wrap gap-2">
						<a href="https://lp.coordly.co/cadastro" class="btn text-nowrap coordly-btn-primary px-3 py-2">
						Agende uma conversa
						</a>
					</div>
                </div>
			</div>
			<img
			src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/func-hero-5.png"
			alt="hero"
			loading="lazy"
			class="d-none d-xl-block" 
			style="z-index: 0;
			position: absolute;
            height: 85svh;
            width: auto;
            left: 40%;
            top: 15%;
            object-fit: contain;"
			/>
		</div>

		<div class="row mx-0" style="background-color: #EAEDF0;">
            <div class="col d-flex flex-wrap align-items-center justify-content-center px-0 py-5 px-lg-5 mx-5 my-3 gap-5">
                <div style="max-width: 540px;" class="d-flex flex-column align-items-start justify-content-between gap-2">
                    <h2 class="coordly-text-dark fw-bold custom-font-size-2">
					Você já enfrentou esses <span class="fw-bold custom-font-size-2" style="color: #E2574C;">desafios</span> na coordenação de seus projetos de construção?
                    </h2>
                    <p style="color: #777E86;">
                    No ambiente da construção civil, a visualização de arquivos digitais ainda é um desafio. A dificuldade de acesso a plantas 2D e modelos 3D, interpretações equivocadas e a falta de atualização em tempo real podem gerar erros de execução, retrabalhos e custos elevados. Uma solução integrada e online resolve esse problema com acesso rápido, prático e confiável às informações do projeto.
                    </p>
                </div>
                <div style="max-width: 540px;" class="d-flex flex-column align-items-start justify-content-between gap-4">
					<div class="d-flex align-items-center gap-3">
						<div style="background-color: #F3DDDB; border-radius: 100px; padding: 10px;">
							<svg width="25" height="25" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.6665 1.5V4.83333C8.6665 5.05435 8.7543 5.26631 8.91058 5.42259C9.06686 5.57887 9.27882 5.66667 9.49984 5.66667H12.8332M8.6665 1.5H2.83317C2.39114 1.5 1.96722 1.67559 1.65466 1.98816C1.3421 2.30072 1.1665 2.72464 1.1665 3.16667V14.8333C1.1665 15.2754 1.3421 15.6993 1.65466 16.0118C1.96722 16.3244 2.39114 16.5 2.83317 16.5H11.1665C11.6085 16.5 12.0325 16.3244 12.345 16.0118C12.6576 15.6993 12.8332 15.2754 12.8332 14.8333V5.66667M8.6665 1.5L12.8332 5.66667M6.99984 10.25L10.3332 9M6.99984 10.25L3.6665 8.87167L6.99984 7.33333L10.3332 8.87167V12.4617L6.99984 14M6.99984 10.25V14M6.99984 14L3.6665 12.5V9" stroke="#E2574C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<h5 class="coordly-text-dark mb-0">
						<span style="color: #E2574C;">Dificuldade para abrir</span> arquivos técnicos fora do escritório.
						</h5>
					</div>
					<div class="d-flex align-items-center gap-3">
						<div style="background-color: #F3DDDB; border-radius: 100px; padding: 10px;">
							<svg width="25" height="25" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.6667 12.8334H15.6667M13.1667 10.3334V12.8334M4 7.83335V7.84169M4 10.3334V10.3417M1.5 1.16669H6.5V12.8334H1.5V1.16669ZM9 4.50002H17.3333V10.3334H9V4.50002Z" stroke="#E2574C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<h5 class="coordly-text-dark mb-0">
						<span style="color: #E2574C;">Dependência de softwares</span> pesados e técnicos para visualizar arquivos simples da obra.
						</h5>
					</div>
					<div class="d-flex align-items-center gap-3">
						<div style="background-color: #F3DDDB; border-radius: 100px; padding: 10px;">
							<svg width="25" height="25" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M7.82083 7.8225C7.50832 8.13513 7.3328 8.55909 7.33288 9.00113C7.33295 9.44317 7.50863 9.86707 7.82125 10.1796C8.13388 10.4921 8.55784 10.6676 8.99988 10.6675C9.44192 10.6675 9.86582 10.4918 10.1783 10.1792M12.9008 12.8942C11.7319 13.6255 10.3789 14.0091 9 14C6 14 3.5 12.3333 1.5 9C2.56 7.23333 3.76 5.935 5.1 5.105M7.48333 4.15C7.98253 4.04894 8.49068 3.99869 9 4C12 4 14.5 5.66667 16.5 9C15.945 9.925 15.3508 10.7225 14.7183 11.3917M1.5 1.5L16.5 16.5" stroke="#E2574C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<h5 class="coordly-text-dark mb-0">
						<span style="color: #E2574C;">Dificuldade em visualizar</span> o projeto de forma integrada entre disciplinas.
						</h5>
					</div>
					<div class="d-flex align-items-center gap-3">
						<div style="background-color: #F3DDDB; border-radius: 100px; padding: 10px;">
							<svg width="25" height="25" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.5 16.5L11.5 11.5M7.33333 9.83333V9.84167M7.33332 7.33333C7.54307 7.33344 7.74948 7.28076 7.93353 7.18015C8.11758 7.07954 8.27335 6.93423 8.38649 6.75761C8.49964 6.581 8.56652 6.37874 8.58098 6.16949C8.59544 5.96024 8.557 5.75071 8.46922 5.56021C8.38144 5.36971 8.24713 5.20436 8.07867 5.0794C7.91021 4.95443 7.71301 4.87387 7.50523 4.84512C7.29746 4.81638 7.08579 4.84039 6.88973 4.91493C6.69367 4.98947 6.51952 5.11215 6.38332 5.27167M1.5 7.33333C1.5 8.09938 1.65088 8.85792 1.94404 9.56565C2.23719 10.2734 2.66687 10.9164 3.20854 11.4581C3.75022 11.9998 4.39328 12.4295 5.10101 12.7226C5.80875 13.0158 6.56729 13.1667 7.33333 13.1667C8.09938 13.1667 8.85792 13.0158 9.56565 12.7226C10.2734 12.4295 10.9164 11.9998 11.4581 11.4581C11.9998 10.9164 12.4295 10.2734 12.7226 9.56565C13.0158 8.85792 13.1667 8.09938 13.1667 7.33333C13.1667 6.56729 13.0158 5.80875 12.7226 5.10101C12.4295 4.39328 11.9998 3.75022 11.4581 3.20854C10.9164 2.66687 10.2734 2.23719 9.56565 1.94404C8.85792 1.65088 8.09938 1.5 7.33333 1.5C6.56729 1.5 5.80875 1.65088 5.10101 1.94404C4.39328 2.23719 3.75022 2.66687 3.20854 3.20854C2.66687 3.75022 2.23719 4.39328 1.94404 5.10101C1.65088 5.80875 1.5 6.56729 1.5 7.33333Z" stroke="#E2574C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<h5 class="coordly-text-dark mb-0">
						<span style="color: #E2574C;">Dificuldade em localizar</span> pontos específicos ou detalhes no modelo.
						</h5>
					</div>
                </div>
            </div>
        </div>

		<div class="row mx-0" style="background-color: #F7F7F7;">
			<div class="col d-flex flex-column align-items-center justify-content-center p-0 pt-5 px-lg-5 m-5 gap-5">
				<h2 class="coordly-text-dark fw-bold custom-font-size-2 text-center" style="max-width: 1000px;">
				Resolva todos os problemas com a funcionalidade de <span class="coordly-text-blue fw-bold custom-font-size-2">Visualizador 2D e 3D</span> da Coordly:
				</h2>
			</div>
		</div>
		<div class="row mx-0" style="background-color: #F7F7F7;">
            <div class="col d-flex flex-wrap align-items-center justify-content-center px-0 py-5 px-lg-5 mx-5 gap-3 gap-sm-5">
				<div style="max-width: 616px;" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/vis1.png" alt="vis" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
				<div style="max-width: 550px;" class="d-flex flex-column align-items-start justify-content-between gap-2 gap-sm-3">
                    <h2 class="coordly-text-dark fw-bold custom-font-size-2">
					Visualize modelos federados
                    </h2>
                    <p style="color: #777E86;">
                    Abra e consulte modelos integrados de diferentes disciplinas (estrutura, arquitetura, instalações), facilitando a análise do projeto como um todo, sem necessidade de softwares externos.
                    </p>
                    <a href="https://lp.coordly.co/cadastro" class="btn text-nowrap coordly-btn-primary px-3 py-2">
                    Agende uma conversa
                    </a>
                </div>
            </div>
        </div>
		<div class="row mx-0" style="background-color: #F7F7F7;">
            <div class="col d-flex flex-wrap-reverse align-items-center justify-content-center px-0 py-5 px-lg-5 mx-5 gap-3 gap-sm-5">
				<div style="max-width: 550px;" class="d-flex flex-column align-items-start justify-content-between gap-2 gap-sm-3">
                    <h2 class="coordly-text-dark fw-bold custom-font-size-2">
					Visualize arquivos de onde estiver
                    </h2>
                    <p style="color: #777E86;">
                    Acesse arquivos como NWD, RVT, DWG e IFC diretamente pelo navegador, de qualquer dispositivo, sem instalação. Ideal para equipes no escritório e no canteiro.
                    </p>
                    <a href="https://lp.coordly.co/cadastro" class="btn text-nowrap coordly-btn-primary px-3 py-2">
                    Agende uma conversa
                    </a>
                </div>
				<div style="max-width: 616px;" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/vis2.png" alt="vis" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
            </div>
        </div>
		<div class="row mx-0" style="background-color: #F7F7F7;">
            <div class="col d-flex flex-wrap align-items-center justify-content-center px-0 py-5 px-lg-5 mx-5 gap-3 gap-sm-5">
				<div style="max-width: 616px;" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/vis3.png" alt="vis" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
				<div style="max-width: 550px;" class="d-flex flex-column align-items-start justify-content-between gap-2 gap-sm-3">
                    <h2 class="coordly-text-dark fw-bold custom-font-size-2">
					Navegue pelo modelo com facilidade
                    </h2>
                    <p style="color: #777E86;">
                    Explore o modelo em 3D com fluidez, alterne entre pontos de vista e compreenda melhor o espaço físico do projeto antes mesmo da execução.
                    </p>
                    <a href="https://lp.coordly.co/cadastro" class="btn text-nowrap coordly-btn-primary px-3 py-2">
                    Agende uma conversa
                    </a>
                </div>
            </div>
        </div>
		<div class="row mx-0" style="background-color: #F7F7F7;">
            <div class="col d-flex flex-wrap-reverse align-items-center justify-content-center px-0 py-5 px-lg-5 mx-5 gap-3 gap-sm-5">
				<div style="max-width: 550px;" class="d-flex flex-column align-items-start justify-content-between gap-2 gap-sm-3">
                    <h2 class="coordly-text-dark fw-bold custom-font-size-2">
					Faça medições nos modelos
                    </h2>
                    <p style="color: #777E86;">
                    Meça distâncias, áreas e dimensões diretamente no modelo 3D ou na planta 2D, com precisão e praticidade — sem depender de ferramentas adicionais.
                    </p>
                    <a href="https://lp.coordly.co/cadastro" class="btn text-nowrap coordly-btn-primary px-3 py-2">
                    Agende uma conversa
                    </a>
                </div>
				<div style="max-width: 616px;" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/vis4.png" alt="vis" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
            </div>
        </div>

		<div class="row mx-0 px-0 px-lg-5 position-relative" style="background-color: #F7F7F7;">
			<div style="min-height: 335px; background-color: #3547C8; position: relative; z-index: 5; border-radius: 20px; overflow: hidden;" class="col d-flex flex-wrap align-items-center p-5 m-5">
				<svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2080 2920" width="1000" height="1000" style="position: absolute; z-index: 1; left: 35%;">
					<defs>
						<image width="608" height="1280" id="img1" href="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTkiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCAxOSA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTAgMTUuMDAyNUMwIDExLjYyNTMgMS43ODc5NiA4Ljk3NjQ0IDQuMjM4MTQgNy41MTk1OEM1LjAzMjc5IDAuNTAwMTUzIDEyLjU4MiAtMi4wODI0NyAxOC4yNzcgMS44MjQ1N0wxMy4yNDQyIDEwLjAzNkMxMi43ODA2IDkuODM3MyAxMi4xMTg0IDkuMzczNzUgMTEuNjU0OSA5LjA0MjY1QzkuOTMzMTUgOC4xODE3OCA4LjAxMjc0IDguMTgxNzggNi4zNTcyMiA4Ljg0Mzk5VjI0LjkzNTdDNi4zNTcyMiAzMC42MzA3IDEyLjk3OTMgMzMuNDEyIDE3LjE1MTIgMzAuMDM0N0MxNy41NDg1IDMwLjc2MzEgMTcuODEzNCAzMS4yMjY3IDE4LjI3NyAzMS42OTAyQzE3Ljg3OTcgMzIuMDIxMyAxNC42MzQ4IDM3LjI1MjggMTQuMTA1MSAzOC4xMTM2QzguNDc2MjcgNDIuNTUwNSAwIDM4LjcwOTYgMCAzMS4yOTI5QzAgMjUuOTI5IDAgMjAuNDk4OSAwIDE1LjAwMjVaTTE0LjU2ODYgMzMuNDc4MkM5LjUzNTgyIDM0LjQ3MTUgNC4xNzE5MSAzMC44MjkzIDQuMTcxOTEgMjUuMDAxOVYxMC4zMDA4QzIuOTEzNzEgMTEuNDI2NiAyLjExOTA4IDEzLjA4MjEgMi4xMTkwOCAxNS4wNjg4QzIuMTE5MDggMjAuNDk4OSAyLjExOTA4IDI1Ljk5NTIgMi4xMTkwOCAzMS40MjUzQzIuMTE5MDggMzYuODU1NCA4LjE0NTE5IDM5Ljc2OTIgMTIuMzgzMyAzNi45MjE3TDE0LjU2ODYgMzMuNDc4MlpNNi42ODgzMiA2LjU5MjQ3QzguNTQyNTEgNi4xMjg5MiAxMC41OTUzIDYuMzI3NTggMTIuNDQ5NSA3LjI1NDY3TDE1LjM2MzMgMi40ODY3OEMxMS45MTk4IDEuMDk2MTQgNy44MTQwOCAyLjk1MDMxIDYuNjg4MzIgNi41OTI0N1oiIGZpbGw9IiNGQTlGMjkiLz4KPC9zdmc+"></image>
					</defs>
					<style>
					</style>
					<use id="1" href="#img1" transform="matrix(1.74,0,0,1.74,0,693.299)"></use>
					<use id="2" href="#img1" transform="matrix(1.74,0,0,1.74,1061,.299)"></use>
				</svg>
				<div style="max-width: 600px; z-index: 2;" class="d-flex flex-column align-items-start justify-content-between gap-3">
                    <h2 class="fw-bold custom-font-size-2" style="color: #ffffff;">
					Maximize a eficiência na <span class="fw-bold custom-font-size-2" style="color: #C7C321;">coordenação de projetos</span>, centralize seus dados e otimize processos
                    </h2>
                    <div class="d-flex flex-wrap gap-2">
						<a href="https://lp.coordly.co/cadastro" class="btn text-nowrap coordly-btn-tertiary px-3 py-2">
						Agende uma conversa
						</a>
					</div>
                </div>
			</div>
			<img
			src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/eng-hero.png"
			alt="hero"
			loading="lazy"
			class="d-none d-xxl-block" 
			style="z-index: 6; 
			position: absolute;
            height: 380px;
            width: auto;
            left: 48%;
            top: 0.8%;
            object-fit: contain;"
			/>
		</div>

		<div class="row mx-0" style="background-color: #F7F7F7;">
			<div class="col d-flex flex-column align-items-center justify-content-center p-0 pb-5 px-lg-5 m-5 gap-5">
				<h2 class="coordly-text-dark fw-bold custom-font-size-2 text-center" style="max-width: 700px;">
					Veja mais sobre nossas 
					<span class="coordly-text-blue fw-bold custom-font-size-2">funcionalidades</span>
				</h2>
				<div class="d-flex flex-wrap align-items-center justify-content-center gap-5">
					<a href="<?php echo home_url(); ?>/gestao-de-arquivos/" style="max-width: 511px; height: 400px; text-decoration: none;" class="d-flex flex-column justify-content-between bg-white rounded shadow p-3">
						<img
							src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/gdarq.svg"
							alt="hero"
							loading="lazy"
							class="" 
							style="z-index: 6; 
							position: absolute;
							height: 60px;
							width: auto;
							object-fit: contain;"
						/>
						<div class="d-flex align-items-center pt-5 mt-5 ps-sm-5" style="max-height: 60%;">
							<img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/gdarq-img.png" alt="interface da plataforma" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
						</div>
						<div class="d-flex flex-column">
							<h4 class="coordly-text-dark fw-bold">
								Gestão de arquivos
							</h4>
							<p class="mb-0" style="color: #777E86;">
								Armazene, compartilhe e controle versões de documentos com total segurança e acessibilidade.
							</p>
						</div>
					</a>
					<a href="<?php echo home_url(); ?>/visualizador-2d-e-3d/" style="max-width: 405px; height: 400px; text-decoration: none;" class="d-flex flex-column justify-content-between bg-white rounded shadow p-3">
						<img
							src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/v23.svg"
							alt="hero"
							loading="lazy"
							class="" 
							style="z-index: 6; 
							position: absolute;
							height: 60px;
							width: auto;
							object-fit: contain;"
						/>
						<div class="d-flex align-items-center pt-3" style="max-height: 60%;">
							<img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/v23-img.png" alt="interface da plataforma" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
						</div>
						<div class="d-flex flex-column">
							<h4 class="coordly-text-dark fw-bold">
								Visualizador 2D e 3D
							</h4>
							<p class="mb-0" style="color: #777E86;">
								Visualize e interaja com projetos técnicos diretamente na plataforma, sem necessidade de softwares extras.
							</p>
						</div>
					</a>
					<a href="<?php echo home_url(); ?>/rastreabilidade-por-qr-code/" style="max-width: 300px; height: 400px; text-decoration: none;" class="d-flex flex-column justify-content-between bg-white rounded shadow p-3">
						<img
							src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/qr.svg"
							alt="hero"
							loading="lazy"
							class="" 
							style="z-index: 6; 
							position: absolute;
							height: 60px;
							width: auto;
							object-fit: contain;"
						/>
						<div class="d-flex align-items-center pt-3" style="max-height: 55%;">
							<img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/qr-img.png" alt="interface da plataforma" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
						</div>
						<div class="d-flex flex-column">
							<h4 class="coordly-text-dark fw-bold">
								Rastreabilidade por QR Code
							</h4>
							<p class="mb-0" style="color: #777E86;">
								Acesse rapidamente qualquer documento ou atividade com um simples escaneamento.
							</p>
						</div>
					</a>
					<a href="<?php echo home_url(); ?>/controle-de-plotagens/" style="max-width: 405px; height: 400px; text-decoration: none;" class="d-flex flex-column justify-content-between bg-white rounded shadow p-3">
						<img
							src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/plt.svg"
							alt="hero"
							loading="lazy"
							class="" 
							style="z-index: 6; 
							position: absolute;
							height: 60px;
							width: auto;
							object-fit: contain;"
						/>
						<div class="d-flex align-items-center pt-3" style="max-height: 50%;">
							<img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/plt-img.png" alt="interface da plataforma" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
						</div>
						<div class="d-flex flex-column">
							<h4 class="coordly-text-dark fw-bold">
								Controle de Plotagens de Documentos
							</h4>
							<p class="mb-0" style="color: #777E86;">
								Gerencie solicitações de impressão e mantenha o controle sobre a distribuição de arquivos.
							</p>
						</div>
					</a>
					<a href="<?php echo home_url(); ?>/personalizacao-da-plataforma/" style="max-width: 300px; height: 400px; text-decoration: none;" class="d-flex flex-column justify-content-between bg-white rounded shadow p-3">
						<img
							src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/prs.svg"
							alt="hero"
							loading="lazy"
							class="" 
							style="z-index: 6; 
							position: absolute;
							height: 60px;
							width: auto;
							object-fit: contain;"
						/>
						<div class="d-flex align-items-center ps-5 ms-3 pt-3" style="max-height: 55%;">
							<img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/prs-img.png" alt="interface da plataforma" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
						</div>
						<div class="d-flex flex-column">
							<h4 class="coordly-text-dark fw-bold">
								Personalização da Plataforma
							</h4>
							<p class="mb-0" style="color: #777E86;">
								Ajuste cores e adicione o logo da sua empresa para uma experiência visual personalizada.
							</p>
						</div>
					</a>
					<a href="<?php echo home_url(); ?>/gestao-de-atividades/" style="max-width: 511px; height: 400px; text-decoration: none;" class="d-flex flex-column justify-content-between bg-white rounded shadow p-3">
						<img
							src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/atv.svg"
							alt="hero"
							loading="lazy"
							class="" 
							style="z-index: 6; 
							position: absolute;
							height: 60px;
							width: auto;
							object-fit: contain;"
						/>
						<div class="d-flex align-items-center pt-5" style="max-height: 70%;">
							<img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/atv-img.png" alt="interface da plataforma" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
						</div>
						<div class="d-flex flex-column">
							<h4 class="coordly-text-dark fw-bold">
								Gestão de Atividades
							</h4>
							<p class="mb-0" style="color: #777E86;">
								Organize, delegue e acompanhe tarefas em tempo real para manter seus projetos no prazo.
							</p>
						</div>
					</a>
				</div>
			</div>
		</div>

	</div>
</main>

<?php get_footer(); ?>