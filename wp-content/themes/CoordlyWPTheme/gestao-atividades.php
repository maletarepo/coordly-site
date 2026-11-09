<?php
/* Template Name: Gestao de Atividades */
get_header(); ?>

<main>
    <div class="container-fluid p-0">
		<div class="row mx-0 position-relative" style="height: 100svh; background-color: #F7F7F7;">
			<div style="position: relative; z-index: 5;" class="col d-flex flex-wrap align-items-center px-0 pt-5 px-lg-5 m-5">
				<div style="max-width: 600px;" class="d-flex flex-column align-items-start justify-content-between gap-3">
					<div style="background-color: #EAEDF0; border-radius: 100px; padding: 5px 10px;" class="d-flex align-items-center gap-2 mb-2">
						<svg width="20" height="20" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M9.75 17.0208H2.25C1.67018 17.0197 1.11442 16.7889 0.70442 16.3789C0.294423 15.9689 0.0636013 15.4132 0.0625 14.8333V5.04167C0.0625 4.84828 0.139323 4.66281 0.276068 4.52607C0.412813 4.38932 0.59828 4.3125 0.791667 4.3125C0.985054 4.3125 1.17052 4.38932 1.30727 4.52607C1.44401 4.66281 1.52083 4.84828 1.52083 5.04167V14.8333C1.52083 15.0267 1.59766 15.2122 1.7344 15.3489C1.87115 15.4857 2.05661 15.5625 2.25 15.5625H9.75C9.94339 15.5625 10.1289 15.4857 10.2656 15.3489C10.4023 15.2122 10.4792 15.0267 10.4792 14.8333V5.04167C10.4792 4.84828 10.556 4.66281 10.6927 4.52607C10.8295 4.38932 11.0149 4.3125 11.2083 4.3125C11.4017 4.3125 11.5872 4.38932 11.7239 4.52607C11.8607 4.66281 11.9375 4.84828 11.9375 5.04167V14.8333C11.9364 15.4132 11.7056 15.9689 11.2956 16.3789C10.8856 16.7889 10.3298 17.0197 9.75 17.0208Z" fill="#8697A8"/>
						<path d="M5.26667 12.7167C5.07333 12.7159 4.88794 12.6396 4.75 12.5042L3.575 11.325C3.43797 11.188 3.36099 11.0021 3.36099 10.8083C3.36099 10.6145 3.43797 10.4287 3.575 10.2917C3.71203 10.1546 3.89788 10.0777 4.09167 10.0777C4.28545 10.0777 4.4713 10.1546 4.60833 10.2917L5.26667 10.9542L7.39167 8.82917C7.5287 8.69214 7.71455 8.61516 7.90833 8.61516C8.10212 8.61516 8.28797 8.69214 8.425 8.82917C8.56203 8.9662 8.63901 9.15205 8.63901 9.34583C8.63901 9.53962 8.56203 9.72547 8.425 9.8625L5.78333 12.5042C5.64589 12.6404 5.46018 12.7168 5.26667 12.7167Z" fill="#8697A8"/>
						<path d="M8.6 5.77083H3.4C3.30389 5.77138 3.20863 5.75293 3.11968 5.71653C3.03073 5.68013 2.94986 5.62651 2.88171 5.55875C2.81355 5.49098 2.75947 5.41041 2.72257 5.32167C2.68566 5.23293 2.66667 5.13778 2.66667 5.04167V4.30833C2.66705 3.98283 2.76274 3.66456 2.94193 3.39281C3.12112 3.12107 3.37596 2.90774 3.675 2.77917C3.80704 2.26393 4.10678 1.80728 4.52698 1.48119C4.94718 1.1551 5.46395 0.978104 5.99583 0.978104C6.52772 0.978104 7.04449 1.1551 7.46468 1.48119C7.88488 1.80728 8.18462 2.26393 8.31667 2.77917C8.61726 2.90648 8.87385 3.11926 9.05459 3.39111C9.23532 3.66296 9.33225 3.98189 9.33333 4.30833V5.04167C9.33333 5.13778 9.31434 5.23293 9.27743 5.32167C9.24053 5.41041 9.18645 5.49098 9.11829 5.55875C9.05014 5.62651 8.96927 5.68013 8.88032 5.71653C8.79137 5.75293 8.69611 5.77138 8.6 5.77083ZM4.12917 4.3125H7.87917C7.87917 4.25835 7.85766 4.20642 7.81937 4.16813C7.78108 4.12985 7.72915 4.10834 7.675 4.10834C7.48161 4.10834 7.29615 4.03151 7.1594 3.89477C7.02266 3.75802 6.94583 3.57256 6.94583 3.37917C6.94583 3.13053 6.84706 2.89207 6.67125 2.71626C6.49543 2.54044 6.25697 2.44167 6.00833 2.44167C5.75969 2.44167 5.52124 2.54044 5.34542 2.71626C5.16961 2.89207 5.07083 3.13053 5.07083 3.37917C5.07029 3.47528 5.05075 3.57033 5.01334 3.65886C4.97593 3.7474 4.92139 3.82766 4.85285 3.89504C4.78431 3.96241 4.70313 4.01558 4.61397 4.05147C4.52481 4.08736 4.42944 4.10527 4.33333 4.10417C4.27918 4.10417 4.22725 4.12568 4.18897 4.16397C4.15068 4.20226 4.12917 4.25419 4.12917 4.30833V4.3125Z" fill="#8697A8"/>
						</svg>
                        <p class="mb-0 text-nowrap">Gestão de Atividades</p>
                    </div>
                    <h2 class="coordly-text-dark fw-bold custom-font-size">
					O jeito mais fácil e eficiente de <span class="fw-bold custom-font-size" style="color: #3547C8;">gerenciar atividades</span> da sua obra
                    </h2>
                    <p style="color: #777E86;">Tenha visibilidade total das tarefas, automatize processos e reduza o tempo perdido com desorganização.</p>
                    <div class="d-flex flex-wrap gap-2">
						<a href="https://lp.coordly.co/cadastro" class="btn text-nowrap coordly-btn-primary px-3 py-2">
						Agende uma conversa
						</a>
					</div>
                </div>
			</div>
			<img
			src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/func-hero.png"
			alt="hero"
			loading="lazy"
			class="d-none d-xl-block" 
			style="z-index: 0;
			position: absolute;
            height: 85svh;
            width: auto;
            left: 34%;
            top: 12%;
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
                    Na construção civil, atrasos, falhas de comunicação e falta de controle sobre atividades são grandes desafios que levam a custos extras e perda de eficiência. Sem um sistema estruturado, as equipes perdem tempo tentando rastrear o que já foi feito, quem está responsável por cada tarefa e quais são as prioridades do momento.
                    </p>
                </div>
                <div style="max-width: 540px;" class="d-flex flex-column align-items-start justify-content-between gap-4">
					<div class="d-flex align-items-center gap-3">
						<div style="background-color: #F3DDDB; border-radius: 100px; padding: 10px;">
							<svg width="25" height="25" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.4883 9.41831C16.5779 7.8104 16.1476 6.21636 15.261 4.87199C14.3744 3.52762 13.0786 2.50432 11.5653 1.95349C10.052 1.40265 8.40166 1.35352 6.85831 1.81337C5.31496 2.27322 3.96061 3.21763 2.99561 4.50688C2.03061 5.79613 1.50621 7.36176 1.49999 8.97215C1.49378 10.5825 2.00607 12.1522 2.96109 13.4488C3.91611 14.7455 5.26313 15.7003 6.80288 16.1721C8.34264 16.6438 9.99335 16.6074 11.5108 16.0683M8.99999 4.83331V8.99998L11.5 11.5M14.8333 12.3333V14.8333M14.8333 17.3333V17.3416" stroke="#E2574C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<h5 class="coordly-text-dark mb-0">
						Atividades de projeto <span style="color: #E2574C;">esquecidas</span> ou <span style="color: #E2574C;">não concluídas</span>.
						</h5>
					</div>
					<div class="d-flex align-items-center gap-3">
						<div style="background-color: #F3DDDB; border-radius: 100px; padding: 10px;">
							<svg width="25" height="25" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M7.82083 7.8225C7.50832 8.13513 7.3328 8.55909 7.33288 9.00113C7.33295 9.44317 7.50863 9.86707 7.82125 10.1796C8.13388 10.4921 8.55784 10.6676 8.99988 10.6675C9.44192 10.6675 9.86582 10.4918 10.1783 10.1792M12.9008 12.8942C11.7319 13.6255 10.3789 14.0091 9 14C6 14 3.5 12.3333 1.5 9C2.56 7.23333 3.76 5.935 5.1 5.105M7.48333 4.15C7.98253 4.04894 8.49068 3.99869 9 4C12 4 14.5 5.66667 16.5 9C15.945 9.925 15.3508 10.7225 14.7183 11.3917M1.5 1.5L16.5 16.5" stroke="#E2574C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<h5 class="coordly-text-dark mb-0">
						<span style="color: #E2574C;">Falta de visibilidade</span> sobre o andamento dos projetos e chamados da obra.
						</h5>
					</div>
					<div class="d-flex align-items-center gap-3">
						<div style="background-color: #F3DDDB; border-radius: 100px; padding: 10px;">
							<svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" width="25" height="25">
							<path d="M5.66667 5.49998H12.3333M5.66667 8.83331H10.6667M10.6667 13H9.83333L5.66667 15.5V13H4C3.33696 13 2.70107 12.7366 2.23223 12.2677C1.76339 11.7989 1.5 11.163 1.5 10.5V3.83331C1.5 3.17027 1.76339 2.53439 2.23223 2.06555C2.70107 1.59671 3.33696 1.33331 4 1.33331H14C14.663 1.33331 15.2989 1.59671 15.7678 2.06555C16.2366 2.53439 16.5 3.17027 16.5 3.83331V7.58331M14.8333 16.3333V16.3416M14.8333 13.8333C15.2069 13.8321 15.5693 13.7056 15.8625 13.4741C16.1557 13.2426 16.3627 12.9194 16.4505 12.5563C16.5382 12.1931 16.5016 11.8111 16.3465 11.4712C16.1914 11.1313 15.9268 10.8533 15.595 10.6817C15.2635 10.5118 14.8843 10.4592 14.519 10.5323C14.1538 10.6053 13.824 10.7998 13.5833 11.0842" stroke="#E2574C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<h5 class="coordly-text-dark mb-0">
						<span style="color: #E2574C;">Perda de informação</span> por comunicação descentralizada por email, WhatsApp e outros.
						</h5>
					</div>
					<div class="d-flex align-items-center gap-3">
						<div style="background-color: #F3DDDB; border-radius: 100px; padding: 10px;">
							<svg width="25" height="25" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16.5 16.5L11.5 11.5M7.33333 9.83333V9.84167M7.33332 7.33333C7.54307 7.33344 7.74948 7.28076 7.93353 7.18015C8.11758 7.07954 8.27335 6.93423 8.38649 6.75761C8.49964 6.581 8.56652 6.37874 8.58098 6.16949C8.59544 5.96024 8.557 5.75071 8.46922 5.56021C8.38144 5.36971 8.24713 5.20436 8.07867 5.0794C7.91021 4.95443 7.71301 4.87387 7.50523 4.84512C7.29746 4.81638 7.08579 4.84039 6.88973 4.91493C6.69367 4.98947 6.51952 5.11215 6.38332 5.27167M1.5 7.33333C1.5 8.09938 1.65088 8.85792 1.94404 9.56565C2.23719 10.2734 2.66687 10.9164 3.20854 11.4581C3.75022 11.9998 4.39328 12.4295 5.10101 12.7226C5.80875 13.0158 6.56729 13.1667 7.33333 13.1667C8.09938 13.1667 8.85792 13.0158 9.56565 12.7226C10.2734 12.4295 10.9164 11.9998 11.4581 11.4581C11.9998 10.9164 12.4295 10.2734 12.7226 9.56565C13.0158 8.85792 13.1667 8.09938 13.1667 7.33333C13.1667 6.56729 13.0158 5.80875 12.7226 5.10101C12.4295 4.39328 11.9998 3.75022 11.4581 3.20854C10.9164 2.66687 10.2734 2.23719 9.56565 1.94404C8.85792 1.65088 8.09938 1.5 7.33333 1.5C6.56729 1.5 5.80875 1.65088 5.10101 1.94404C4.39328 2.23719 3.75022 2.66687 3.20854 3.20854C2.66687 3.75022 2.23719 4.39328 1.94404 5.10101C1.65088 5.80875 1.5 6.56729 1.5 7.33333Z" stroke="#E2574C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<h5 class="coordly-text-dark mb-0">
						<span style="color: #E2574C;">Dificuldade em acompanhar atualizações</span> e mudanças no planejamento.
						</h5>
					</div>
                </div>
            </div>
        </div>

		<div class="row mx-0" style="background-color: #F7F7F7;">
			<div class="col d-flex flex-column align-items-center justify-content-center p-0 pt-5 px-lg-5 m-5 gap-5">
				<h2 class="coordly-text-dark fw-bold custom-font-size-2 text-center" style="max-width: 1000px;">
				Resolva todos os problemas com a funcionalidade de <span class="coordly-text-blue fw-bold custom-font-size-2">Gestão de Atividades</span> da Coordly:
				</h2>
			</div>
		</div>
		<div class="row mx-0" style="background-color: #F7F7F7;">
            <div class="col d-flex flex-wrap align-items-center justify-content-center px-0 py-5 px-lg-5 mx-5 gap-3 gap-sm-5">
				<div style="max-width: 616px;" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/ativ1.png" alt="ativ" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
				<div style="max-width: 550px;" class="d-flex flex-column align-items-start justify-content-between gap-2 gap-sm-3">
                    <h2 class="coordly-text-dark fw-bold custom-font-size-2">
					Crie, atribua e acompanhe atividades de forma objetiva
                    </h2>
                    <p style="color: #777E86;">
                    Registre e organize todas as atividades do seu projeto de maneira estruturada. Atribua responsáveis, defina prazos e acompanhe o status das tarefas para garantir que nada fique para trás.
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
					Visualização clara para um acompanhamento eficiente do projeto
                    </h2>
                    <p style="color: #777E86;">
                    Tenha total controle sobre suas atividades com as visões em lista e kanban. Acompanhe o andamento do projeto de forma intuitiva e identifique rapidamente prioridades e pendências.
                    </p>
                    <a href="https://lp.coordly.co/cadastro" class="btn text-nowrap coordly-btn-primary px-3 py-2">
                    Agende uma conversa
                    </a>
                </div>
				<div style="max-width: 616px;" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/ativ2.png" alt="ativ" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
            </div>
        </div>
		<div class="row mx-0" style="background-color: #F7F7F7;">
            <div class="col d-flex flex-wrap align-items-center justify-content-center px-0 py-5 px-lg-5 mx-5 gap-3 gap-sm-5">
				<div style="max-width: 616px;" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/ativ3.png" alt="ativ" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
				<div style="max-width: 550px;" class="d-flex flex-column align-items-start justify-content-between gap-2 gap-sm-3">
                    <h2 class="coordly-text-dark fw-bold custom-font-size-2">
					Comunicação centralizada para uma gestão mais eficiente
                    </h2>
                    <p style="color: #777E86;">
                    Elimine ruídos na comunicação e mantenha todas as interações no mesmo lugar. Comente diretamente nas atividades, mencione usuários e garanta que todos estejam alinhados.
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
					Anexe imagens para uma comunicação mais clara
                    </h2>
                    <p style="color: #777E86;">
                    Facilite o entendimento das tarefas adicionando fotos, documentos e relatórios diretamente nas atividades. Todas as informações ficam centralizadas e acessíveis para a equipe.
                    </p>
                    <a href="https://lp.coordly.co/cadastro" class="btn text-nowrap coordly-btn-primary px-3 py-2">
                    Agende uma conversa
                    </a>
                </div>
				<div style="max-width: 616px;" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/ativ4.png" alt="ativ" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
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
            <div class="col d-flex flex-wrap align-items-center justify-content-center px-0 py-5 px-lg-5 mx-5 gap-3 gap-sm-5">
				<div style="max-width: 616px;" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/ativ5.png" alt="ativ" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
				<div style="max-width: 550px;" class="d-flex flex-column align-items-start justify-content-between gap-2 gap-sm-3">
                    <h2 class="coordly-text-dark fw-bold custom-font-size-2">
					Acompanhe cada mudança e garanta mais transparência
                    </h2>
                    <p style="color: #777E86;">
                    Visualize o histórico completo de cada atividade e saiba exatamente quem fez o quê e quando. Com total rastreabilidade, sua equipe trabalha com mais segurança e previsibilidade.
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
					Encontre rapidamente as atividades certas com filtros avançados
                    </h2>
                    <p style="color: #777E86;">
                    Localize as tarefas que precisa com poucos cliques usando filtros inteligentes. Personalize sua busca e compartilhe os filtros com a equipe para um acompanhamento mais ágil e eficiente.
                    </p>
                    <a href="https://lp.coordly.co/cadastro" class="btn text-nowrap coordly-btn-primary px-3 py-2">
                    Agende uma conversa
                    </a>
                </div>
				<div style="max-width: 616px;" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/ativ6.png" alt="ativ" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
            </div>
        </div>
		<div class="row mx-0" style="background-color: #F7F7F7;">
            <div class="col d-flex flex-wrap align-items-center justify-content-center px-0 py-5 px-lg-5 mx-5 gap-3 gap-sm-5">
				<div style="max-width: 616px;" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/temp/funcionalidades/ativ7.png" alt="ativ" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
				<div style="max-width: 550px;" class="d-flex flex-column align-items-start justify-content-between gap-2 gap-sm-3">
                    <h2 class="coordly-text-dark fw-bold custom-font-size-2">
					Atualizações em tempo real para um time sempre alinhado
                    </h2>
                    <p style="color: #777E86;">
                    Receba notificações automáticas sobre qualquer alteração nas atividades. Mantenha sua equipe informada em tempo real e evite retrabalho por falta de comunicação.
                    </p>
                    <a href="https://lp.coordly.co/cadastro" class="btn text-nowrap coordly-btn-primary px-3 py-2">
                    Agende uma conversa
                    </a>
                </div>
            </div>
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