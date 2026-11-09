<?php get_header(); ?>

<main>
    <div class="container-fluid p-0">
		<div class="row mx-0 position-relative" style="height: 100svh; background-color: #0e25c7;">
			<div class="p-0"
				style="
				position: absolute;
				top: 0; left: 0; width: 100%; height: 100%;
				background: url('<?php echo get_template_directory_uri(); ?>/temp/back.png') center center / cover no-repeat;
				filter: grayscale(100%) opacity(0.3);
				z-index: 0;
			"></div>
			<div style="position: relative; z-index: 5;" class="col d-flex flex-wrap align-items-center px-0 pt-5 px-lg-5 m-5">
				<div style="max-width: 650px;" class="d-flex flex-column align-items-start justify-content-between gap-3">
                    <h2 class="text-white fw-bold custom-font-size">
					Coordenação <span class="fw-bold custom-font-size" style="color: #C7C421;">inteligente</span> para obras reais
                    </h2>
                    <p style="color: #FFFFFF;">A plataforma que conecta a fase de projetos com a obra, ajudando coordenadores e empresas de construção a transformar processos de compatibilização confusos em uma coordenação organizada, rastreável e precisa — garantindo entregas no prazo e redução de custos.</p>
                    <div class="d-flex flex-wrap gap-2">
						<a href="https://lp.coordly.co/cadastro" class="btn text-nowrap coordly-btn-senary px-3 py-2">
						Agende uma conversa
						</a>
						<a href="https://lp.coordly.co/cadastro" class="btn text-nowrap coordly-btn-quinary px-3 py-2 d-flex align-items-center gap-2">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M15.1992 3.91333C13.7169 2.64893 11.824 1.96899 9.87587 2.00109C7.92775 2.03319 6.05831 2.77513 4.61838 4.08768C3.17845 5.40023 2.26701 7.19316 2.05512 9.12998C1.84323 11.0668 2.34545 13.0144 3.46753 14.6072C3.66838 14.8923 3.70618 15.2615 3.56727 15.5814L2.6597 17.6716L5.87456 17.0986C6.08359 17.0614 6.29906 17.0916 6.48975 17.185C8.23964 18.0418 10.2421 18.2305 12.1212 17.7158C14.0004 17.201 15.6271 16.0182 16.6961 14.3892C17.7651 12.7603 18.2028 10.7972 17.9272 8.86844C17.6517 6.93965 16.6816 5.17772 15.1992 3.91333ZM9.84292 0.00135862C12.2781 -0.0387683 14.6441 0.811168 16.4971 2.39166C18.3501 3.97216 19.5626 6.17456 19.9071 8.58555C20.2516 10.9965 19.7044 13.4504 18.3682 15.4865C17.0319 17.5227 14.9985 19.0013 12.6496 19.6447C10.4083 20.2586 8.02682 20.072 5.91307 19.1233L1.17546 19.9676C0.81274 20.0323 0.443854 19.8922 0.215418 19.6031C-0.0130184 19.3141 -0.0639951 18.9228 0.0827482 18.5848L1.51671 15.2824C0.336877 13.386 -0.177096 11.1435 0.0669859 8.91248C0.33185 6.49145 1.47114 4.25029 3.27106 2.6096C5.07097 0.968917 7.40777 0.0414855 9.84292 0.00135862ZM6.43935 5.92249C6.72066 5.64119 7.10219 5.48315 7.50001 5.48315C7.89783 5.48315 8.27936 5.64119 8.56067 5.92249C8.84198 6.2038 9.00001 6.58533 9.00001 6.98315V7.98315C9.00001 8.38098 8.84198 8.76251 8.56067 9.04381C8.45952 9.14497 8.3454 9.23018 8.22223 9.29784C8.41867 9.86227 8.74096 10.381 9.17158 10.8116C9.6022 11.2422 10.1209 11.5645 10.6853 11.7609C10.753 11.6378 10.8382 11.5236 10.9394 11.4225C11.2207 11.1412 11.6022 10.9832 12 10.9832H13C13.3978 10.9832 13.7794 11.1412 14.0607 11.4225C14.342 11.7038 14.5 12.0853 14.5 12.4832C14.5 12.881 14.342 13.2625 14.0607 13.5438C13.7794 13.8251 13.3978 13.9832 13 13.9832H12C10.4087 13.9832 8.88259 13.351 7.75737 12.2258C6.63215 11.1006 6.00001 9.57445 6.00001 7.98315V6.98315C6.00001 6.58533 6.15804 6.2038 6.43935 5.92249Z" fill="currentColor"/>
							</svg>
							<span>Fale com um especialista</span>
						</a>
					</div>
                </div>
			</div>
			<img
			src="<?php echo get_template_directory_uri(); ?>/temp/hero-main.png"
			alt="hero"
			loading="lazy"
			class="d-none d-xl-block" 
			style="position: absolute;
            height: 130svh;
            width: auto;
            left: 43%;
            top: 6%;
            z-index: 0;"
			/>
		</div>

		<div class="row mx-0" style="background-color: #F7F7F7;">
			<div class="col d-flex flex-column align-items-start justify-content-center p-0 pt-5 px-lg-5 m-5 gap-4 gap-md-5">
				<h2 class="coordly-text-dark fw-bold custom-font-size-2 text-start" style="max-width: 616px;">
					Junte-se às empresas que já otimizam sua gestão com a 
					<span class="coordly-text-blue fw-bold custom-font-size-2">Coordly</span>
				</h2>
				<div class="d-flex flex-wrap align-items-center justify-content-around gap-3 mt-5">
					<div style="max-width: 140px; max-height: 80px; width: 140px; height: 80px;" class="d-flex align-items-center mx-2 mx-md-5">
						<img src="<?php echo get_template_directory_uri(); ?>/temp/wrocha.png" alt="WRocha logo" loading="lazy" style="width: 100%; height: 100%; object-fit: contain; filter: grayscale(100%) opacity(0.7);">
					</div>
					<div style="max-width: 140px; max-height: 80px; width: 140px; height: 80px;" class="d-flex align-items-center mx-2 mx-md-5">
						<img src="<?php echo get_template_directory_uri(); ?>/temp/studioidea.png" alt="Studio Ideia logo" loading="lazy" style="width: 100%; height: 100%; object-fit: contain; filter: grayscale(100%) opacity(0.7);">
					</div>
					<div style="max-width: 140px; max-height: 80px; width: 140px; height: 80px;" class="d-flex align-items-center mx-2 mx-md-5">
						<img src="<?php echo get_template_directory_uri(); ?>/temp/urban.png" alt="Urban logo" loading="lazy" style="width: 100%; height: 100%; object-fit: contain; filter: grayscale(100%) opacity(0.7);">
					</div>
					<div style="max-width: 140px; max-height: 80px; width: 140px; height: 80px;" class="d-flex align-items-center mx-2 mx-md-5">
						<img src="<?php echo get_template_directory_uri(); ?>/temp/concre.png" alt="Concrejato logo" loading="lazy" style="width: 100%; height: 100%; object-fit: contain; filter: grayscale(100%) opacity(0.7);">
					</div>
					<div style="max-width: 140px; max-height: 80px; width: 140px; height: 80px;" class="d-flex align-items-center mx-2 mx-md-5">
						<img src="<?php echo get_template_directory_uri(); ?>/temp/dinamica.png" alt="Dinamica logo" loading="lazy" style="width: 100%; height: 100%; object-fit: contain; filter: grayscale(100%) opacity(0.7);">
					</div>
					<div style="max-width: 140px; max-height: 80px; width: 140px; height: 80px;" class="d-flex align-items-center mx-2 mx-md-5">
						<img src="<?php echo get_template_directory_uri(); ?>/temp/engecom.png" alt="Engecom logo" loading="lazy" style="width: 100%; height: 100%; object-fit: contain; filter: grayscale(100%) opacity(0.7);">
					</div>
					<div style="max-width: 140px; max-height: 80px; width: 140px; height: 80px;" class="d-flex align-items-center mx-2 mx-md-5">
						<img src="<?php echo get_template_directory_uri(); ?>/temp/gpe.png" alt="GPE logo" loading="lazy" style="width: 100%; height: 100%; object-fit: contain; filter: grayscale(100%) opacity(0.7);">
					</div>
					<div style="max-width: 140px; max-height: 80px; width: 140px; height: 80px;" class="d-flex align-items-center mx-2 mx-md-5">
						<img src="<?php echo get_template_directory_uri(); ?>/temp/conserpa.png" alt="Conserpa logo" loading="lazy" style="width: 100%; height: 100%; object-fit: contain; filter: grayscale(100%) opacity(0.7);">
					</div>
					<div style="max-width: 140px; max-height: 80px; width: 140px; height: 80px;" class="d-flex align-items-center mx-2 mx-md-5">
						<img src="<?php echo get_template_directory_uri(); ?>/temp/portomar.png" alt="Portomar logo" loading="lazy" style="width: 100%; height: 100%; object-fit: contain; filter: grayscale(100%) opacity(0.7);">
					</div>
					<div style="max-width: 140px; max-height: 80px; width: 140px; height: 80px;" class="d-flex align-items-center mx-2 mx-md-5">
						<img src="<?php echo get_template_directory_uri(); ?>/temp/rc.png" alt="RC logo" loading="lazy" style="width: 100%; height: 100%; object-fit: contain; filter: grayscale(100%) opacity(0.7);">
					</div>
					<div style="max-width: 140px; max-height: 80px; width: 140px; height: 80px;" class="d-flex align-items-center mx-2 mx-md-5">
						<img src="<?php echo get_template_directory_uri(); ?>/temp/tropical.png" alt="Tropical logo" loading="lazy" style="width: 100%; height: 100%; object-fit: contain; filter: grayscale(100%) opacity(0.7);">
					</div>
					<div style="max-width: 140px; max-height: 80px; width: 140px; height: 80px;" class="d-flex align-items-center mx-2 mx-md-5">
						<img src="<?php echo get_template_directory_uri(); ?>/temp/cf.png" alt="CF logo" loading="lazy" style="width: 100%; height: 100%; object-fit: contain; filter: grayscale(100%) opacity(0.7);">
					</div>
				</div>
			</div>
		</div>

		<div class="row mx-0" style="background-color: #F7F7F7;">
            <div class="col d-flex flex-column justify-content-center px-0 pt-5 pb-0 px-lg-5 mx-5 mb-5 gap-5">
                <div class="d-flex flex-column align-items-start justify-content-between mb-0 gap-4">
                    <h2 class="coordly-text-dark fw-bold custom-font-size-2" style="max-width: 616px;">
						<span class="coordly-text-blue fw-bold custom-font-size-2">Soluções completas </span>para transformar sua operação
                    </h2>
				</div>
				<div class="d-flex flex-wrap-reverse gap-4 align-items-center">
					<div id="outd" class="d-flex gap-4" style="max-width: 650px">
						<div class="swiper-nav-cstm justify-content-between gap-4" style="min-height: 550px;">
							<div id="itm1" class="d-flex gap-4">
								<div class="flex-grow-1" style="min-width: 5px; max-width: 5px; width: 5px; background: #e4e4e4; border-radius: 6px;">
									<div class="progress-fill-1"></div>
								</div>
								<div class="nav-item-cstm d-flex flex-column jusify-content-center" style="cursor: pointer;" data-index="0">
									<h4 class="coordly-text-dark">Gestão de arquivos</h4>
									<p class="mb-0" style="color: #777E86;">
										Centralize, organize e compartilhe documentos com total segurança e
										controle de versões.
									</p>
								</div>
							</div>
							<div id="itm2" class="d-flex gap-4">
								<div class="flex-grow-1" style="min-width: 5px; max-width: 5px; width: 5px; background: #e4e4e4; border-radius: 6px;">
									<div class="progress-fill-2"></div>
								</div>
								<div class="nav-item-cstm d-flex flex-column jusify-content-center" style="cursor: pointer;" data-index="1">
									<h4 class="coordly-text-dark">Gestão de atividades</h4>
									<p class="mb-0" style="color: #777E86;">
										Acompanhe tarefas, prazos e responsáveis em tempo real para manter
										seus projetos no ritmo certo.
									</p>
								</div>
							</div>
							<div id="itm3" class="d-flex gap-4">
								<div class="flex-grow-1" style="min-width: 5px; max-width: 5px; width: 5px; background: #e4e4e4; border-radius: 6px;">
									<div class="progress-fill-3"></div>
								</div>
								<div class="nav-item-cstm d-flex flex-column jusify-content-center" style="cursor: pointer;" data-index="2">
									<h4 class="coordly-text-dark">Visualizador 2D e 3D</h4>
									<p class="mb-0" style="color: #777E86;">
										Visualize e interaja com projetos técnicos em múltiplas dimensões,
										sem precisar de softwares externos.
									</p>
								</div>
							</div>
							<div id="itm4" class="d-flex gap-4">
								<div class="flex-grow-1" style="min-width: 5px; max-width: 5px; width: 5px; background: #e4e4e4; border-radius: 6px;">
									<div class="progress-fill-4"></div>
								</div>
								<div class="nav-item-cstm d-flex flex-column jusify-content-center" style="cursor: pointer;" data-index="3">
									<h4 class="coordly-text-dark">Controle de plotagens e rastreabilidade</h4>
									<p class="mb-0" style="color: #777E86;">
										Gerencie solicitações de impressão e acompanhe a rastreabilidade de
										documentos com precisão.
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="swiper swiper-6 responsive-max-height" style="border-radius: 20px; max-width: 830px;">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/temp/Frame1.png" alt="Frame 1" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
							</div>
							<div class="swiper-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/temp/Frame2.png" alt="Frame 2" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
							</div>
							<div class="swiper-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/temp/Frame3.png" alt="Frame 3" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
							</div>
							<div class="swiper-slide">
								<img src="<?php echo get_template_directory_uri(); ?>/temp/Frame4.png" alt="Frame 4" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row mx-0" style="background-color: #F7F7F7;">
            <div class="col d-flex flex-column justify-content-center px-0 py-5 px-lg-5 m-5 mt-3 gap-5">
                <div style="max-width: 1000px;" class="d-flex flex-column align-items-start justify-content-between mb-0 me-0 me-lg-5 gap-3">
                    <h2 class="coordly-text-dark fw-bold custom-font-size-2">
					Uma solução completa para <span class="coordly-text-blue fw-bold custom-font-size-2">todos os setores</span>
                    </h2>
                    <p style="color: #777E86;">
                    A Coordly conecta projetos de construção, arquitetura e infraestrutura, atendendo desde incorporadoras e construtoras até escritórios de projetos e obras públicas.
                    </p>
                </div>
                <div class="d-flex flex-wrap justify-content-center align-items-center gap-4 gap-md-5">
					<a href="<?php echo home_url(); ?>/construtoras-e-incorporadoras/" style="width: 100%; max-width: 350px; text-decoration: none;" class="d-flex align-items-center justify-content-between rounded shadow p-3 gap-3">
						<div class="d-flex align-items-center" style="max-width: 56px; max-height: 56px; min-width: 56px; min-height: 56px;">
							<svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="56" height="56" rx="6" fill="#EAEDF0"/>
								<path d="M28 39.8H20.8867C20.26 39.8 19.7533 39.2933 19.7533 38.6666C19.7533 38.04 20.26 37.5333 20.8867 37.5333H23.3067V25.58H17.3267C16.8667 25.58 16.4533 25.3066 16.28 24.88C16.1067 24.46 16.2 23.9666 16.5267 23.6466L23.62 16.5533C23.68 16.4866 23.7533 16.4333 23.8267 16.3866C23.88 16.3533 23.94 16.32 24.0067 16.2933C24.1067 16.2533 24.22 16.22 24.34 16.2133C24.48 16.2 24.62 16.2133 24.7533 16.2533C24.7933 16.2666 24.84 16.28 24.88 16.3C24.94 16.3266 24.9933 16.3533 25.0467 16.3866L36.6067 23.3266H38.66C39.2867 23.3266 39.7933 23.8333 39.7933 24.46C39.7933 25.0866 39.2867 25.5933 38.66 25.5933H36.3067C36.3067 25.5933 36.28 25.5933 36.2667 25.5933H35.0533V28.2533C35.34 28.3533 35.6133 28.4866 35.8667 28.6533C36.4467 29.04 36.8933 29.58 37.16 30.2266C37.4267 30.8666 37.4933 31.5666 37.36 32.2466C37.22 32.9333 36.8867 33.5533 36.4 34.0466C35.9133 34.5333 35.2933 34.8666 34.6133 35.0066C33.9333 35.14 33.2333 35.0733 32.5867 34.8066C31.94 34.54 31.4 34.0933 31.0133 33.5133C30.6267 32.9333 30.42 32.26 30.42 31.5666C30.42 30.94 30.9267 30.4333 31.5533 30.4333C32.18 30.4333 32.6867 30.94 32.6867 31.5666C32.6867 31.8133 32.76 32.0466 32.8933 32.2533C33.0333 32.46 33.22 32.6133 33.4533 32.7133C33.68 32.8066 33.9267 32.8333 34.1667 32.78C34.4067 32.7333 34.6267 32.6133 34.8 32.44C34.9733 32.2666 35.0933 32.0466 35.14 31.8C35.1867 31.56 35.16 31.3133 35.0667 31.0866C34.9733 30.86 34.8133 30.6666 34.6133 30.5333C34.4067 30.3933 34.1733 30.3266 33.9267 30.3266C33.3 30.3266 32.7933 29.82 32.7933 29.1933V25.5866H25.58V37.54H28C28.6267 37.54 29.1333 38.0466 29.1333 38.6733C29.1333 39.3 28.6267 39.8066 28 39.8066V39.8ZM25.58 23.3133H32.2067L25.58 19.34V23.3133ZM20.0667 23.3133H23.3067V20.0733L20.0667 23.3133Z" fill="#324150"/>
							</svg>
						</div>
						<h5 class="coordly-text-dark fw-bold m-0">
							Construtoras e Incorporadoras
						</h5>
						<div class="d-flex align-items-center" style="max-width: 32px; max-height: 32px; min-width: 32px; min-height: 32px;">
							<img src="<?php echo get_template_directory_uri(); ?>/temp/arrow-right.png" alt="icon" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
						</div>
					</a>
					<a href="<?php echo home_url(); ?>/gerenciadoras-de-projeto/" style="width: 100%; max-width: 350px; text-decoration: none;" class="d-flex align-items-center justify-content-between rounded shadow p-3 gap-3">
						<div class="d-flex align-items-center" style="max-width: 56px; max-height: 56px; min-width: 56px; min-height: 56px;">
							<svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="56" height="56" rx="6" fill="#EAEDF0"/>
								<path d="M40.7343 32.8027C40.7343 32.7722 40.7343 32.7416 40.7343 32.711C40.7343 27.3304 37.2459 22.5306 32.183 20.7879V20.5434C32.183 18.7702 30.763 17.3333 28.9724 17.3333H26.9041C25.1136 17.3333 23.6626 18.7702 23.6626 20.5434V20.8491C18.6615 22.6223 15.2348 27.3915 15.2348 32.711C15.2348 32.7416 15.2348 32.7722 15.2348 32.8027C15.0805 32.8945 14.957 33.0167 14.8335 33.139C14.3087 33.6588 14 34.3925 14 35.1568C14 36.7465 15.2966 38 16.871 38H39.0981C39.8699 38 40.6108 37.6943 41.1356 37.1745C41.6913 36.6242 42 35.9211 42 35.1568C42 34.1785 41.5061 33.3225 40.7343 32.8027ZM20.4212 25.6795C20.5138 26.2603 20.9768 26.6883 21.5943 26.6883C22.2426 26.6883 22.7674 26.1686 22.7674 25.5266V23.8146C23.0761 23.6311 23.3848 23.4783 23.6935 23.3254V27.7584C23.6935 28.4004 24.2183 28.9201 24.8357 28.9201C25.484 28.9201 26.0088 28.4309 26.0397 27.7889C26.0397 27.6055 26.0706 26.0158 26.0706 24.6094C26.0706 23.0808 26.0706 22.2248 26.0397 21.7051V20.5128C26.0397 20.0236 26.441 19.6262 26.935 19.6262H29.0033C29.4972 19.6262 29.8986 20.0236 29.8986 20.5128V21.7357C29.8368 22.5611 29.8368 24.212 29.8986 27.7584C29.8986 28.4004 30.4234 28.9201 31.0717 28.9201C31.72 28.9201 32.2448 28.4004 32.2448 27.7584V23.2949C32.6152 23.4477 32.9548 23.6311 33.2944 23.8451V25.5572C33.2944 26.1992 33.8192 26.7189 34.4675 26.7189C35.054 26.7189 35.548 26.2909 35.6406 25.71C37.2767 27.4526 38.2955 29.715 38.4498 32.1913H17.6119C17.7354 29.715 18.785 27.4221 20.4212 25.6795ZM39.6847 35.7377C39.5303 35.8905 39.3142 35.9822 39.0981 35.9822H16.871C16.4079 35.9822 16.0375 35.6154 16.0375 35.1568C16.0375 34.9428 16.1301 34.7288 16.2845 34.5759C16.3153 34.5453 16.3153 34.5453 16.3462 34.5148C16.4697 34.5148 16.5932 34.5148 16.7166 34.4842C16.7475 34.4842 16.8093 34.4536 16.871 34.4536H39.0981C39.1599 34.4536 39.1907 34.4536 39.2525 34.4842C39.3451 34.5148 39.4377 34.5148 39.5612 34.5148C39.5921 34.5148 39.6229 34.5148 39.6538 34.5148C39.839 34.6676 39.9625 34.8816 39.9625 35.1262C39.9316 35.3708 39.839 35.5848 39.6847 35.7377Z" fill="#324150"/>
							</svg>
						</div>
						<h5 class="coordly-text-dark fw-bold m-0">
							Gerenciadoras de Projeto
						</h5>
						<div class="d-flex align-items-center" style="max-width: 32px; max-height: 32px; min-width: 32px; min-height: 32px;">
							<img src="<?php echo get_template_directory_uri(); ?>/temp/arrow-right.png" alt="icon" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
						</div>
					</a>
					<a href="<?php echo home_url(); ?>/escritorios-de-projetos/" style="width: 100%; max-width: 350px; text-decoration: none;" class="d-flex align-items-center justify-content-between rounded shadow p-3 gap-3">
						<div class="d-flex align-items-center" style="max-width: 56px; max-height: 56px; min-width: 56px; min-height: 56px;">
							<svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="56" height="56" rx="6" fill="#EAEDF0"/>
								<path d="M21.5261 35.8483C21.4912 35.4974 21.3356 35.1676 21.084 34.916C20.8324 34.6645 20.5027 34.5089 20.1517 34.474L20 34.4668C19.5934 34.4668 19.2036 34.6285 18.916 34.916C18.6645 35.1676 18.5089 35.4974 18.474 35.8483L18.4668 36L18.474 36.1517C18.5089 36.5027 18.6645 36.8324 18.916 37.084C19.2036 37.3716 19.5934 37.5332 20 37.5332C20.4067 37.5332 20.7964 37.3716 21.084 37.084C21.3716 36.7964 21.5332 36.4067 21.5332 36L21.5261 35.8483ZM23.7956 36.1882C23.7724 36.6557 23.6622 37.111 23.4759 37.5332H36C36.4067 37.5332 36.7964 37.3716 37.084 37.084C37.3716 36.7964 37.5332 36.4067 37.5332 36V22.6667C37.5332 22.26 37.3716 21.8703 37.084 21.5827C36.8324 21.3311 36.5027 21.1755 36.1517 21.1406L36 21.1335H23.8001V36L23.7956 36.1882ZM39.8001 36C39.8001 37.0078 39.3995 37.9742 38.6869 38.6869C37.9742 39.3995 37.0078 39.8001 36 39.8001H20C18.9922 39.8001 18.0258 39.3995 17.3132 38.6869C16.645 38.0187 16.251 37.1275 16.2044 36.1882L16.1999 36V20C16.1999 18.9922 16.6005 18.0258 17.3132 17.3132C18.0258 16.6005 18.9922 16.1999 20 16.1999L20.1882 16.2044C21.1275 16.251 22.0187 16.645 22.6869 17.3132C23.1252 17.7515 23.4454 18.2857 23.627 18.8666H36L36.1882 18.8711C37.1275 18.9176 38.0187 19.3117 38.6869 19.9798C39.3995 20.6925 39.8001 21.6589 39.8001 22.6667V36ZM18.4668 32.5241C18.9455 32.313 19.4668 32.1999 20 32.1999L20.1882 32.2044C20.6557 32.2276 21.111 32.3379 21.5332 32.5241V20L21.5261 19.8483C21.4912 19.4974 21.3356 19.1676 21.084 18.916C20.8324 18.6645 20.5027 18.5089 20.1517 18.474L20 18.4668C19.5934 18.4668 19.2036 18.6285 18.916 18.916C18.6285 19.2036 18.4668 19.5934 18.4668 20V32.5241Z" fill="#354052"/>
							</svg>
						</div>
						<h5 class="coordly-text-dark fw-bold m-0">
							Escritórios de Projetos
						</h5>
						<div class="d-flex align-items-center" style="max-width: 32px; max-height: 32px; min-width: 32px; min-height: 32px;">
							<img src="<?php echo get_template_directory_uri(); ?>/temp/arrow-right.png" alt="icon" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
						</div>
					</a>
					<a href="<?php echo home_url(); ?>/educacional/" style="width: 100%; max-width: 350px; text-decoration: none;" class="d-flex align-items-center justify-content-between rounded shadow p-3 gap-3">
						<div class="d-flex align-items-center" style="max-width: 56px; max-height: 56px; min-width: 56px; min-height: 56px;">
							<svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect width="56" height="56" rx="6" fill="#EAEDF0"/>
								<path d="M34.8665 27.8073L28.4212 30.3854C28.151 30.4935 27.849 30.4935 27.5788 30.3854L21.1335 27.8073V33.3333C21.1335 33.7475 21.4904 34.4678 22.8503 35.1478C24.1571 35.8012 26.0089 36.1999 28 36.1999L28.3717 36.1953C30.2206 36.1491 31.9246 35.7603 33.1497 35.1478C34.5096 34.4678 34.8665 33.7475 34.8665 33.3333V27.8073ZM17.7181 24L20.4368 25.0872C20.4388 25.088 20.4407 25.089 20.4427 25.0898L28 28.1126L35.5566 25.0898C35.5586 25.089 35.5605 25.088 35.5625 25.0872L38.2819 24L28 19.8867L17.7181 24ZM42.4668 32C42.4668 32.6259 41.9593 33.1334 41.3333 33.1334C40.7074 33.1334 40.1999 32.6259 40.1999 32V25.6738L37.1335 26.9004V33.3333C37.1335 35.0409 35.8041 36.3547 34.1634 37.1751C32.5756 37.969 30.5275 38.4096 28.4219 38.4616L28 38.4668C25.7477 38.4668 23.5303 38.022 21.8366 37.1751C20.1959 36.3547 18.8665 35.0409 18.8665 33.3333V26.9004L14.2454 25.0521C13.8154 24.8799 13.5332 24.4633 13.5332 24C13.5332 23.5367 13.8154 23.1201 14.2454 22.9479L27.5788 17.6146C27.849 17.5065 28.151 17.5065 28.4212 17.6146L41.7546 22.9479C42.1846 23.1201 42.4668 23.5367 42.4668 24V32Z" fill="#354052"/>
							</svg>
						</div>
						<h5 class="coordly-text-dark fw-bold m-0">
							Educacional
						</h5>
						<div class="d-flex align-items-center" style="max-width: 32px; max-height: 32px; min-width: 32px; min-height: 32px;">
							<img src="<?php echo get_template_directory_uri(); ?>/temp/arrow-right.png" alt="icon" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
						</div>
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

		<div class="row mx-0" style="background-color: #F7F7F7;">
            <div class="col d-flex flex-wrap align-items-center justify-content-center px-0 pb-5 pt-0 pt-sm-5 px-lg-5 mx-5 gap-0 gap-sm-5">
				<div style="max-width: 465px; max-height: 511px; height: 40svh;" class="d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/temp/hero1.png" alt="interface da plataforma mobile" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
				<div style="max-width: 511px;" class="d-flex flex-column align-items-start justify-content-between">
                    <h2 class="coordly-text-dark fw-bold custom-font-size-2">
					Tenha acesso às suas obras de <span class="fw-bold custom-font-size-2" style="color: #C88F48;">onde você estiver</span>!
                    </h2>
                    <p style="color: #777E86;">
                    O app da Coordly está disponível para iOS, Android e tablets, oferecendo acesso rápido e intuitivo à gestão de projetos em qualquer lugar. Visualize documentos, acompanhe atividades e registre apontamentos diretamente do canteiro de obras. Ideal para manter sua equipe conectada e seu projeto sob controle em tempo real.
                    </p>
					<div class="d-flex flex-wrap gap-3">
						<a href="https://apps.apple.com/br/app/maleta-do-engenheiro/id1611061856" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/app-store.svg" alt="App Store logo" loading="lazy" height="51">
						</a>
						<a href="https://play.google.com/store/apps/details?id=com.appmaleta&amp;pli=1" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/google-play.svg" alt="Google Play logo" loading="lazy" height="51">
						</a>
					</div>
                </div>
            </div>
        </div>

		<div class="row mx-0" style="background-color: #F7F7F7;">
            <div class="col d-flex flex-wrap align-items-center justify-content-center px-0 py-0 py-md-5 px-lg-5 m-5 gap-0 gap-md-5">
                <div style="max-width: 521px; max-height: 254px; height: 254px;" class="d-flex flex-column align-items-start justify-content-between mb-5 mb-lg-0 me-0 me-lg-5">
                    <h2 class="coordly-text-dark fw-bold custom-font-size-2">
					Confiança construída com <span class="coordly-text-blue fw-bold custom-font-size-2">resultados</span>
                    </h2>
                    <p style="color: #777E86;">
                    Transformamos a gestão de obras com tecnologia, eficiência e um suporte que acompanha de verdade quem está no campo e no escritório.
                    </p>
                    <a href="<?php echo home_url(); ?>/quem-somos/" class="btn text-nowrap coordly-btn-primary px-3 py-2">
                    Saiba mais
                    </a>
                </div>
                <div class="d-flex flex-wrap justify-content-center align-items-center gap-4 gap-md-3" style="max-width: 700px;">
					<div class="d-flex flex-column align-items-start justify-content-between gap-2" style="width: 340px;">
						<div style="max-width: 56px; max-height: 56px; width: 56px; height: 56px;" class="d-flex align-items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/temp/cnstrct-ico.png" alt="icon" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
						</div>
						<div class="d-flex flex-column">
							<h2 class="coordly-text-blue fw-bold custom-font-size-2 m-0 text-nowrap">
							+100 mil arquivos
							</h2>
							<p class="m-0" style="color: #777E86;">
							processados anualmente
							</p>
						</div>
					</div>
					<div class="d-flex flex-column align-items-start justify-content-between gap-2" style="width: 340px;">
						<div style="max-width: 56px; max-height: 56px; width: 56px; height: 56px;" class="d-flex align-items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/temp/cnstrct-ico.png" alt="icon" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
						</div>
						<div class="d-flex flex-column">
							<h2 class="coordly-text-blue fw-bold custom-font-size-2 m-0 text-nowrap">
							+100 empresas
							</h2>
							<p class="m-0" style="color: #777E86;">
							empresas atendidas
							</p>
						</div>
					</div>
					<div class="d-flex flex-column align-items-start justify-content-between gap-2" style="width: 340px;">
						<div style="max-width: 56px; max-height: 56px; width: 56px; height: 56px;" class="d-flex align-items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/temp/peopl-ico.png" alt="icon" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
						</div>
						<div class="d-flex flex-column">
							<h2 class="coordly-text-blue fw-bold custom-font-size-2 m-0 text-nowrap">
							+10 estados
							</h2>
							<p class="m-0" style="color: #777E86;">
							do Brasil com usuários ativos
							</p>
						</div>
					</div>
					<div class="d-flex flex-column align-items-start justify-content-between gap-2" style="width: 340px;">
						<div style="max-width: 56px; max-height: 56px; width: 56px; height: 56px;" class="d-flex align-items-center">
							<img src="<?php echo get_template_directory_uri(); ?>/temp/cnstrct-ico.png" alt="icon" loading="lazy" style="width: 100%; height: 100%; object-fit: contain;">
						</div>
						<div class="d-flex flex-column">
							<h2 class="coordly-text-blue fw-bold custom-font-size-2 m-0 text-nowrap">
							+500 obras
							</h2>
							<p class="m-0" style="color: #777E86;">
							coordenadas através da plataforma
							</p>
						</div>
					</div>
				</div>
            </div>
        </div>
		
		<div class="row mx-0" style="background-color: #3547C8;">
			<div class="col d-flex flex-column align-items-center justify-content-center px-0 py-5 px-lg-5 mx-5 gap-5">
				<div class="d-flex" style="max-width: 784px;">
					<h2 class="text-white text-center fw-bold custom-font-size-2 mb-0">
					Veja como a <span class="fw-bold custom-font-size-2" style="color: #C7C421;">Coordly</span> faz a deferença na prática
					</h2>
				</div>
				<div class="d-flex flex-wrap align-items-start justify-content-center gap-3">
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
				</div>
				<div class="d-flex align-items-center justify-content-center">
					<a href="<?php echo home_url(); ?>/historias-de-clientes/" class="btn text-nowrap coordly-btn-primary px-3 py-2">Veja mais depoimentos ➜</a>
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

		<div class="row mx-0" style="background-color: #F7F7F7;">
			<div class="col d-flex flex-wrap align-items-center justify-content-between p-0 px-lg-5 mt-5 mx-5">
                <h2 class="coordly-text-dark fw-bold custom-font-size-2">
                    Conheça <span class="coordly-text-blue fw-bold custom-font-size-2">nosso blog</span>
                </h2>
                <a href="<?php echo home_url(); ?>/blog" class="btn text-nowrap coordly-btn-secondary px-3 py-2">Acessar blog ➜</a>
            </div>
		</div>
		<div class="row mx-0 d-flex flex-column" style="background-color: #F7F7F7;">
            <div class="swiper swiper-5 p-0 m-0">
                <div class="swiper-wrapper my-5">
                    <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 6,
                    );

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                        <div class="swiper-slide d-flex justify-content-center" style="height: auto">
                            <a href="<?php the_permalink(); ?>"
                            class="d-flex flex-column p-4 justify-content-between rounded shadow text-decoration-none coordly-text-dark"
                            style="max-width: 400px">
                                
                                <div class="post-thumbnail rounded mb-2" style="height: 200px">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                
                                <h4><?php the_title(); ?></h4>
                                
                                <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>

								<div class="d-flex flex-wrap gap-1 mb-3">
                                    <?php foreach (get_the_category() as $category): ?>
                                        <div class="py-1 px-2 coordly-text-dark rounded text-nowrap" style="background-color: #EAEDF0">
                                            <h6 class="mb-0"><?= esc_html($category->name); ?></h6>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

								<div class="d-flex">
									<div class="btn text-nowrap coordly-btn-secondary px-3 py-2">Ler mais</div>
								</div>
                            </a>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        ?>
                        <div class="d-flex justify-content-center">
                            <p class="coordly-text-dark">Sem posts...</p>
                        </div>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
        </div>

	</div>
</main>

<?php get_footer(); ?>