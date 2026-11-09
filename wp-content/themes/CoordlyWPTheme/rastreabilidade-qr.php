<?php
/* Template Name: Rastreabilidade por QR Code */
get_header(); ?>

<main>
    <div class="container-fluid p-0">
		<div class="row mx-0 position-relative" style="height: 100svh; background-color: #F7F7F7;">
			<div style="position: relative; z-index: 5;" class="col d-flex flex-wrap align-items-center px-0 pt-5 px-lg-5 m-5">
				<div style="max-width: 650px;" class="d-flex flex-column align-items-start justify-content-between gap-3">
					<div style="background-color: #EAEDF0; border-radius: 100px; padding: 5px 10px;" class="d-flex align-items-center gap-2 mb-2">
						<svg width="20" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.49984 5.54166C1.10817 5.54166 0.791504 5.22499 0.791504 4.83332V2.74999C0.791504 1.67082 1.67067 0.791656 2.74984 0.791656H4.83317C5.22484 0.791656 5.5415 1.10832 5.5415 1.49999C5.5415 1.89166 5.22484 2.20832 4.83317 2.20832H2.74984C2.44984 2.20832 2.20817 2.44999 2.20817 2.74999V4.83332C2.20817 5.22499 1.8915 5.54166 1.49984 5.54166Z" fill="#8697A8"/>
						<path d="M16.4998 5.54166C16.1082 5.54166 15.7915 5.22499 15.7915 4.83332V2.74999C15.7915 2.44999 15.5498 2.20832 15.2498 2.20832H13.1665C12.7748 2.20832 12.4582 1.89166 12.4582 1.49999C12.4582 1.10832 12.7748 0.791656 13.1665 0.791656H15.2498C16.329 0.791656 17.2082 1.67082 17.2082 2.74999V4.83332C17.2082 5.22499 16.8915 5.54166 16.4998 5.54166Z" fill="#8697A8"/>
						<path d="M15.2498 17.2083H13.1665C12.7748 17.2083 12.4582 16.8917 12.4582 16.5C12.4582 16.1083 12.7748 15.7917 13.1665 15.7917H15.2498C15.5498 15.7917 15.7915 15.55 15.7915 15.25V13.1667C15.7915 12.775 16.1082 12.4583 16.4998 12.4583C16.8915 12.4583 17.2082 12.775 17.2082 13.1667V15.25C17.2082 16.3292 16.329 17.2083 15.2498 17.2083Z" fill="#8697A8"/>
						<path d="M4.83317 17.2083H2.74984C1.67067 17.2083 0.791504 16.3292 0.791504 15.25V13.1667C0.791504 12.775 1.10817 12.4583 1.49984 12.4583C1.8915 12.4583 2.20817 12.775 2.20817 13.1667V15.25C2.20817 15.55 2.44984 15.7917 2.74984 15.7917H4.83317C5.22484 15.7917 5.5415 16.1083 5.5415 16.5C5.5415 16.8917 5.22484 17.2083 4.83317 17.2083Z" fill="#8697A8"/>
						<path d="M6.9165 14.2917H4.4165C4.02484 14.2917 3.70817 13.975 3.70817 13.5833V11.0833C3.70817 10.6917 4.02484 10.375 4.4165 10.375H6.9165C7.30817 10.375 7.62484 10.6917 7.62484 11.0833V13.5833C7.62484 13.975 7.30817 14.2917 6.9165 14.2917ZM5.12484 12.875H6.20817V11.7917H5.12484V12.875Z" fill="#8697A8"/>
						<path d="M6.9165 7.62499H4.4165C4.02484 7.62499 3.70817 7.30832 3.70817 6.91666V4.41666C3.70817 4.02499 4.02484 3.70832 4.4165 3.70832H6.9165C7.30817 3.70832 7.62484 4.02499 7.62484 4.41666V6.91666C7.62484 7.30832 7.30817 7.62499 6.9165 7.62499ZM5.12484 6.20832H6.20817V5.12499H5.12484V6.20832Z" fill="#8697A8"/>
						<path d="M13.5832 7.62499H11.0832C10.6915 7.62499 10.3748 7.30832 10.3748 6.91666V4.41666C10.3748 4.02499 10.6915 3.70832 11.0832 3.70832H13.5832C13.9748 3.70832 14.2915 4.02499 14.2915 4.41666V6.91666C14.2915 7.30832 13.9748 7.62499 13.5832 7.62499ZM11.7915 6.20832H12.8748V5.12499H11.7915V6.20832Z" fill="#8697A8"/>
						<path d="M8.99984 7.62499C8.60817 7.62499 8.2915 7.30832 8.2915 6.91666V4.41666C8.2915 4.02499 8.60817 3.70832 8.99984 3.70832C9.3915 3.70832 9.70817 4.02499 9.70817 4.41666V6.91666C9.70817 7.30832 9.3915 7.62499 8.99984 7.62499Z" fill="#8697A8"/>
						<path d="M5.6665 9.70832H4.4165C4.02484 9.70832 3.70817 9.39166 3.70817 8.99999C3.70817 8.60832 4.02484 8.29166 4.4165 8.29166H5.6665C6.05817 8.29166 6.37484 8.60832 6.37484 8.99999C6.37484 9.39166 6.05817 9.70832 5.6665 9.70832Z" fill="#8697A8"/>
						<path d="M8.99984 8.29166H7.74984C7.35817 8.29166 7.0415 8.60832 7.0415 8.99999C7.0415 9.39166 7.35817 9.70832 7.74984 9.70832H8.2915V11.5C8.2915 11.8917 8.60817 12.2083 8.99984 12.2083C9.3915 12.2083 9.70817 11.8917 9.70817 11.5V8.99999C9.70817 8.60832 9.3915 8.29166 8.99984 8.29166Z" fill="#8697A8"/>
						<path d="M13.5832 9.70832H11.0832C10.6915 9.70832 10.3748 9.39166 10.3748 8.99999C10.3748 8.60832 10.6915 8.29166 11.0832 8.29166H13.5832C13.9748 8.29166 14.2915 8.60832 14.2915 8.99999C14.2915 9.39166 13.9748 9.70832 13.5832 9.70832Z" fill="#8697A8"/>
						<path d="M11.0832 10.375C10.6915 10.375 10.3748 10.6917 10.3748 11.0833V12.875H8.99984C8.60817 12.875 8.2915 13.1917 8.2915 13.5833C8.2915 13.975 8.60817 14.2917 8.99984 14.2917H11.0832C11.4748 14.2917 11.7915 13.975 11.7915 13.5833V11.0833C11.7915 10.6917 11.4748 10.375 11.0832 10.375Z" fill="#8697A8"/>
						<path d="M13.5832 14.2917C13.1915 14.2917 12.8748 13.975 12.8748 13.5833V11.0833C12.8748 10.6917 13.1915 10.375 13.5832 10.375C13.9748 10.375 14.2915 10.6917 14.2915 11.0833V13.5833C14.2915 13.975 13.9748 14.2917 13.5832 14.2917Z" fill="#8697A8"/>
						</svg>
                        <p class="mb-0 text-nowrap">Rastreabilidade por QR Code</p>
                    </div>
                    <h2 class="coordly-text-dark fw-bold custom-font-size">
					Identifique rapidamente a versão de qualquer documento com <span class="fw-bold custom-font-size" style="color: #3547C8;">QR Code</span>
                    </h2>
                    <p style="color: #777E86;">Garanta o uso da documentação correta na obra e evite erros com a rastreabilidade instantânea via leitura de QR Codes.</p>
                    <div class="d-flex flex-wrap gap-2">
						<a href="https://lp.coordly.co/cadastro" class="btn text-nowrap coordly-btn-primary px-3 py-2">
						Agende uma conversa
						</a>
					</div>
                </div>
			</div>
			<img
			src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/func-hero-4.png"
			alt="hero"
			loading="lazy"
			class="d-none d-xl-block" 
			style="z-index: 0;
			position: absolute;
            height: 75svh;
            width: auto;
            left: 45%;
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
                    No ambiente da construção civil, documentos impressos ainda são amplamente utilizados. No entanto, a troca de versões, falhas de comunicação e ausência de controle sobre o que está sendo utilizado em campo podem gerar retrabalhos, atrasos e altos custos.<br>A rastreabilidade por QR Code resolve esse problema com uma solução prática, visual e confiável.
                    </p>
                </div>
                <div style="max-width: 540px;" class="d-flex flex-column align-items-start justify-content-between gap-4">
					<div class="d-flex align-items-center gap-3">
						<div style="background-color: #F3DDDB; border-radius: 100px; padding: 10px;">
							<svg width="25" height="25" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.6665 1.5V4.83333C8.6665 5.05435 8.7543 5.26631 8.91058 5.42259C9.06686 5.57887 9.27882 5.66667 9.49984 5.66667H12.8332M8.6665 1.5H2.83317C2.39114 1.5 1.96722 1.67559 1.65466 1.98816C1.3421 2.30072 1.1665 2.72464 1.1665 3.16667V14.8333C1.1665 15.2754 1.3421 15.6993 1.65466 16.0118C1.96722 16.3244 2.39114 16.5 2.83317 16.5H11.1665C11.6085 16.5 12.0325 16.3244 12.345 16.0118C12.6576 15.6993 12.8332 15.2754 12.8332 14.8333V5.66667M8.6665 1.5L12.8332 5.66667M6.99984 13.1667H7.00817M6.99984 8.16667V10.6667" stroke="#E2574C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<h5 class="coordly-text-dark mb-0">
						<span style="color: #E2574C;">Falta de controle</span> sobre a versão dos documentos impressos.
						</h5>
					</div>
					<div class="d-flex align-items-center gap-3">
						<div style="background-color: #F3DDDB; border-radius: 100px; padding: 10px;">
							<svg width="25" height="25" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.6665 1.5V4.83333C8.6665 5.05435 8.7543 5.26631 8.91058 5.42259C9.06686 5.57887 9.27882 5.66667 9.49984 5.66667H12.8332M8.6665 1.5H2.83317C2.39114 1.5 1.96722 1.67559 1.65466 1.98816C1.3421 2.30072 1.1665 2.72464 1.1665 3.16667V14.8333C1.1665 15.2754 1.3421 15.6993 1.65466 16.0118C1.96722 16.3244 2.39114 16.5 2.83317 16.5H11.1665C11.6085 16.5 12.0325 16.3244 12.345 16.0118C12.6576 15.6993 12.8332 15.2754 12.8332 14.8333V5.66667M8.6665 1.5L12.8332 5.66667M6.99984 9.41333V10.6667L7.83317 11.5M3.6665 10.6667C3.6665 11.5507 4.01769 12.3986 4.64281 13.0237C5.26794 13.6488 6.11578 14 6.99984 14C7.88389 14 8.73174 13.6488 9.35686 13.0237C9.98198 12.3986 10.3332 11.5507 10.3332 10.6667C10.3332 9.78261 9.98198 8.93476 9.35686 8.30964C8.73174 7.68452 7.88389 7.33333 6.99984 7.33333C6.11578 7.33333 5.26794 7.68452 4.64281 8.30964C4.01769 8.93476 3.6665 9.78261 3.6665 10.6667Z" stroke="#E2574C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<h5 class="coordly-text-dark mb-0">
						<span style="color: #E2574C;">Utilização de pranchas desatualizadas</span> na execução da obra.
						</h5>
					</div>
					<div class="d-flex align-items-center gap-3">
						<div style="background-color: #F3DDDB; border-radius: 100px; padding: 10px;">
							<svg width="25" height="25" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M5.66667 5.49998H12.3333M5.66667 8.83331H10.6667M10.6667 13H9.83333L5.66667 15.5V13H4C3.33696 13 2.70107 12.7366 2.23223 12.2677C1.76339 11.7989 1.5 11.163 1.5 10.5V3.83331C1.5 3.17027 1.76339 2.53439 2.23223 2.06555C2.70107 1.59671 3.33696 1.33331 4 1.33331H14C14.663 1.33331 15.2989 1.59671 15.7678 2.06555C16.2366 2.53439 16.5 3.17027 16.5 3.83331V7.58331M14.8333 16.3333V16.3416M14.8333 13.8333C15.2069 13.8321 15.5693 13.7056 15.8625 13.4741C16.1557 13.2426 16.3627 12.9194 16.4505 12.5563C16.5382 12.1931 16.5016 11.8111 16.3465 11.4712C16.1914 11.1313 15.9268 10.8533 15.595 10.6817C15.2635 10.5118 14.8843 10.4592 14.519 10.5323C14.1538 10.6053 13.824 10.7998 13.5833 11.0842" stroke="#E2574C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<h5 class="coordly-text-dark mb-0">
						<span style="color: #E2574C;">Dificuldade em identificar</span> a origem e status de um arquivo físico.
						</h5>
					</div>
					<div class="d-flex align-items-center gap-3">
						<div style="background-color: #F3DDDB; border-radius: 100px; padding: 10px;">
							<svg width="25" height="25" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1.83333 16.5L4.33333 13.1667M9.33333 16.5L7.66667 13.1667L5.16667 10.6667L6 5.66667M6 5.66667L2.66667 6.5L1 9M6 5.66667L8.5 8.16667L11 9M6 2.33333C6 2.55435 6.0878 2.76631 6.24408 2.92259C6.40036 3.07887 6.61232 3.16667 6.83333 3.16667C7.05435 3.16667 7.26631 3.07887 7.42259 2.92259C7.57887 2.76631 7.66667 2.55435 7.66667 2.33333C7.66667 2.11232 7.57887 1.90036 7.42259 1.74408C7.26631 1.5878 7.05435 1.5 6.83333 1.5C6.61232 1.5 6.40036 1.5878 6.24408 1.74408C6.0878 1.90036 6 2.11232 6 2.33333Z" stroke="#E2574C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<h5 class="coordly-text-dark mb-0">
						<span style="color: #E2574C;">Necessidade de deslocamentos</span> até o escritório para verificar informações.
						</h5>
					</div>
                </div>
            </div>
        </div>

		<div class="row mx-0" style="background-color: #F7F7F7;">
			<div class="col d-flex flex-column align-items-center justify-content-center p-0 pt-5 px-lg-5 m-5 gap-5">
				<h2 class="coordly-text-dark fw-bold custom-font-size-2 text-center" style="max-width: 1000px;">
				Resolva todos os problemas com a funcionalidade de <span class="coordly-text-blue fw-bold custom-font-size-2">Rastreabilidade por QR Code</span> da Coordly:
				</h2>
			</div>
		</div>
		<div class="row mx-0" style="background-color: #F7F7F7;">
            <div class="col d-flex flex-wrap align-items-center justify-content-center px-0 py-5 px-lg-5 mx-5 gap-3 gap-sm-5">
				<div style="max-width: 616px;" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/qr1.png" alt="qr" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
				<div style="max-width: 550px;" class="d-flex flex-column align-items-start justify-content-between gap-2 gap-sm-3">
                    <h2 class="coordly-text-dark fw-bold custom-font-size-2">
					Impressão de plotagens com QR Codes
                    </h2>
                    <p style="color: #777E86;">
                    Todas as plantas e documentos impressos pela plataforma já são gerados com um QR Code exclusivo, vinculado ao arquivo digital correspondente.
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
					Escaneie o QR Code direto do celular
                    </h2>
                    <p style="color: #777E86;">
                    A leitura do código com qualquer smartphone permite verificar, em tempo real, a versão do arquivo, seu status e outras informações úteis, sem precisar sair do canteiro.
                    </p>
                    <a href="https://lp.coordly.co/cadastro" class="btn text-nowrap coordly-btn-primary px-3 py-2">
                    Agende uma conversa
                    </a>
                </div>
				<div style="max-width: 616px;" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/qr2.png" alt="qr" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
            </div>
        </div>
		<div class="row mx-0" style="background-color: #F7F7F7;">
            <div class="col d-flex flex-wrap align-items-center justify-content-center px-0 py-5 px-lg-5 mx-5 gap-3 gap-sm-5">
				<div style="max-width: 616px;" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/qr3.png" alt="qr" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
				<div style="max-width: 550px;" class="d-flex flex-column align-items-start justify-content-between gap-2 gap-sm-3">
                    <h2 class="coordly-text-dark fw-bold custom-font-size-2">
					Identificação de arquivos obsoletos
                    </h2>
                    <p style="color: #777E86;">
                    Ao escanear um documento obsoleto, o sistema alerta o usuário de que aquele material não deve ser utilizado, prevenindo o uso indevido de versões antigas.
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
					Impressão de painel de QR Codes para a obra
                    </h2>
                    <p style="color: #777E86;">
                    Gere painéis com QR Codes para fixar em áreas da obra, vinculando-as a documentos, revisões ou plantas específicas, facilitando o acesso à informação in loco.
                    </p>
                    <a href="https://lp.coordly.co/cadastro" class="btn text-nowrap coordly-btn-primary px-3 py-2">
                    Agende uma conversa
                    </a>
                </div>
				<div style="max-width: 616px;" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/qr4.png" alt="qr" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
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