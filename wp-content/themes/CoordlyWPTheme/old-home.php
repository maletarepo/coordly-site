<?php
/* Template Name: Old home */
get_header(); ?>

<main>
    <div class="container-fluid p-0">
        <div id="inicio" class="row mx-0">
            <div
                class="col d-flex align-items-center p-0 px-lg-5"
                style="height: 100svh; position: relative">
                <div class="d-flex flex-column gap-3 mx-5" style="z-index: 10">
                    <h2
                        class="coordly-text-dark fw-bold custom-font-size"
                        style="text-shadow: 0px 0px 3px white">
                        Maximize a eficiência
                        <br />
                        na construção com a Coordly:
                        <br />
                        <span
                        style="
                          text-decoration: underline;
                          text-decoration-color: #3547c8;
                          text-decoration-thickness: 4px;
                        ">centralize seus dados</span> e otimize
                        <br />
                        seus processos
                    </h2>
                    <div class="d-flex flex-wrap gap-3 py-2">
                        <a
                            class="btn text-nowrap coordly-btn-primary px-5 py-3"
                            href="https://lp.coordly.co/cadastro"
                            target="_blank">
                            Contate-nos
                        </a>
                        <a class="btn text-nowrap coordly-btn-secondary px-5 py-3" href="<?php echo home_url(); ?>#sobre">
                            Saiba mais
                        </a>
                    </div>
                </div>
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/img-hero.png"
                    alt="Engenheira"
                    loading="lazy"
                    class="coordly-hero" />
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/box-disciplinas.svg"
                    alt="Box disciplinas"
                    loading="lazy"
                    class="coordly-box-disciplinas" />
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/dots-horizontal.svg"
                    alt="Dots horizontal"
                    loading="lazy"
                    class="coordly-dots-h" />
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/dots-vertical.svg"
                    alt="Dots vertical"
                    loading="lazy"
                    class="coordly-dots-v" />
            </div>
            <div
                class="d-none d-xl-block p-0 px-lg-5"
                style="
              height: 100svh;
              background-color: #3547c8;
              flex: 0 0 37%;
              max-width: 37%;
            "></div>
        </div>

        <div id="sobre" class="row my-5 py-5 mx-0">
            <div class="swiper swiper-1">
                <div class="swiper-wrapper">
                    <div
                        class="swiper-slide d-flex justify-content-center p-0 px-lg-5">
                        <div class="d-flex flex-column flex-md-row mb-5 px-5">
                            <div class="col d-flex flex-column justify-content-center">
                                <h2 class="coordly-text-dark fw-bold custom-font-size">
                                    Crie seu padrão de
                                    <span
                                        style="
                          text-decoration: underline;
                          text-decoration-color: #3547c8;
                          text-decoration-thickness: 4px;
                        ">nomenclatura</span>
                                    e versione os seus documentos
                                </h2>
                                <h5 class="coordly-text-dark">
                                    Altere nomes dos arquivos tanto na Coordly quanto no
                                    serviço de armazenamento simuntaneamente
                                </h5>
                            </div>
                            <div
                                class="col d-flex justify-content-center align-items-center">
                                <lottie-player
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/anim1.json"
                                    background="transparent"
                                    speed="1"
                                    loop
                                    autoplay>
                                </lottie-player>
                            </div>
                        </div>
                    </div>
                    <div
                        class="swiper-slide d-flex justify-content-center p-0 px-lg-5">
                        <div class="d-flex flex-column flex-md-row mb-5 px-5">
                            <div class="col d-flex flex-column justify-content-center">
                                <h2 class="coordly-text-dark fw-bold custom-font-size">
                                    Armazene seus
                                    <span
                                        style="
                          text-decoration: underline;
                          text-decoration-color: #3547c8;
                          text-decoration-thickness: 4px;
                        ">documentos em nuvem</span>
                                    de forma segura
                                </h2>
                                <h5 class="coordly-text-dark">
                                    Seus arquivos protegidos pelas empresas mais valiosas do
                                    mundo
                                </h5>
                            </div>
                            <div
                                class="col d-flex justify-content-center align-items-center">
                                <lottie-player
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/anim2.json"
                                    background="transparent"
                                    speed="1"
                                    loop
                                    autoplay
                                    class="mx-3">
                                </lottie-player>
                            </div>
                        </div>
                    </div>
                    <div
                        class="swiper-slide d-flex justify-content-center p-0 px-lg-5">
                        <div class="d-flex flex-column flex-md-row mb-5 px-5">
                            <div class="col d-flex flex-column justify-content-center">
                                <h2 class="coordly-text-dark fw-bold custom-font-size">
                                    Convide outras pessoas para
                                    <span
                                        style="
                          text-decoration: underline;
                          text-decoration-color: #3547c8;
                          text-decoration-thickness: 4px;
                        ">colaborar</span>
                                    em projetos em tempo real
                                </h2>
                                <h5 class="coordly-text-dark">
                                    Trabalhe sempre com a versão mais atualizada dos seus
                                    documentos
                                </h5>
                            </div>
                            <div
                                class="col d-flex justify-content-center align-items-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/colabore.png"
                                    alt="Colabore"
                                    loading="lazy"
                                    class="px-4"
                                    style="max-width: 100%; height: auto" />
                            </div>
                        </div>
                    </div>
                    <div
                        class="swiper-slide d-flex justify-content-center p-0 px-lg-5">
                        <div class="d-flex flex-column flex-md-row mb-5 px-5">
                            <div class="col d-flex flex-column justify-content-center">
                                <h2 class="coordly-text-dark fw-bold custom-font-size">
                                    Visualize seus arquivos em 2D e 3D com o melhor
                                    <span
                                        style="
                          text-decoration: underline;
                          text-decoration-color: #3547c8;
                          text-decoration-thickness: 4px;
                        ">visualizador de projetos</span>
                                    que existe
                                </h2>
                                <h5 class="coordly-text-dark">
                                    Recursos de download de dados em Excel, visualização
                                    remota em tempo real e muito mais
                                </h5>
                            </div>
                            <div
                                class="col d-flex justify-content-center align-items-center">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/visualize.png"
                                    alt="Visualize"
                                    loading="lazy"
                                    style="max-width: 100%; height: auto" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="row py-5 mx-0" style="background-color: #3547c8">
            <div class="swiper swiper-2 my-5">
                <div class="swiper-wrapper">
                    <div
                        class="swiper-slide d-flex justify-content-center align-items-center p-0 px-lg-5">
                        <div class="d-flex flex-column flex-lg-row mb-5 px-5">
                            <div
                                class="d-flex align-items-center mb-4 me-5"
                                style="max-width: 160px">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/RegisNasser.jpg"
                                    alt="Regis Nasser"
                                    loading="lazy"
                                    class="rounded border border-white border-3"
                                    style="max-width: 100%; height: auto" />
                            </div>
                            <div
                                class="d-flex flex-column justify-content-center"
                                style="max-width: 600px">
                                <h5 class="text-white">
                                    "Hoje o nosso controle de documentação e projetos é muito
                                    mais eficiente. Conseguimos acessar arquivos em .dwg e
                                    Revit sem precisar de licença ou do software instalado, o
                                    que gera uma economia de milhares de reais."
                                </h5>
                                <h2 class="text-white">Regis Nasser</h2>
                                <h5 class="text-white">
                                    Engenheiro de Obra na WRocha Engenharia
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="swiper-slide d-flex justify-content-center align-items-center p-0 px-lg-5">
                        <div class="d-flex flex-column flex-lg-row mb-5 px-5">
                            <div
                                class="d-flex align-items-center mb-4 me-5"
                                style="max-width: 160px">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/RodrigoMoreira.jpeg"
                                    alt="Rodrigo Moreira"
                                    loading="lazy"
                                    class="rounded border border-white border-3"
                                    style="max-width: 100%; height: auto" />
                            </div>
                            <div
                                class="d-flex flex-column justify-content-center"
                                style="max-width: 600px">
                                <h5 class="text-white">
                                    "Todo mundo tem a possibilidade de visualizar as revisões
                                    vigentes, o que facilita e traz mais segurança para o
                                    nosso trabalho!"
                                </h5>
                                <h2 class="text-white">Rodrigo Moreira</h2>
                                <h5 class="text-white">Engenheiro de Obra na Innovar</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="swiper-slide d-flex justify-content-center align-items-center p-0 px-lg-5">
                        <div class="d-flex flex-column flex-lg-row mb-5 px-5">
                            <div
                                class="d-flex align-items-center mb-4 me-5"
                                style="max-width: 160px">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/FabricioBalestrim.jpeg"
                                    alt="Fabricio Balestrim"
                                    loading="lazy"
                                    class="rounded border border-white border-3"
                                    style="max-width: 100%; height: auto" />
                            </div>
                            <div
                                class="d-flex flex-column justify-content-center"
                                style="max-width: 600px">
                                <h5 class="text-white">
                                    "Armazenar nossos projetos de engenharia na nuvem tem sido
                                    crucial para manter uma gestão e organização eficientes.
                                    Com essa facilidade, podemos acessar todos os projetos de
                                    forma organizada de qualquer lugar e a qualquer momento, o
                                    que tem permitido uma comunicação ágil e colaborativa
                                    entre a equipe, mesmo em projetos complexos com muitos
                                    envolvidos.”
                                </h5>
                                <h2 class="text-white">Fabricio Balestrim</h2>
                                <h5 class="text-white">Engenheiro da Casa BIM</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="row py-5 mx-0">
            <div class="col pt-5 px-0 px-lg-5 mx-5">
                <h2
                    class="coordly-text-dark fw-bold custom-font-size border-start border-5 px-3"
                    style="border-color: #3547c8 !important">
                    Nossos Clientes
                </h2>
            </div>
            <div class="swiper swiper-3 my-5">
                <div class="swiper-wrapper">
                    <div
                        class="swiper-slide d-flex justify-content-center align-items-center">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/clientes/WRocha.png"
                            alt="WRocha logo"
                            loading="lazy"
                            style="max-width: 150px; height: auto" />
                    </div>
                    <div
                        class="swiper-slide d-flex justify-content-center align-items-center">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/clientes/StudioIdeia.png"
                            alt="Studio Ideia logo"
                            loading="lazy"
                            style="max-width: 150px; height: auto" />
                    </div>
                    <div
                        class="swiper-slide d-flex justify-content-center align-items-center">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/clientes/Urban.png"
                            alt="Urban logo"
                            loading="lazy"
                            style="max-width: 150px; height: auto" />
                    </div>
                    <div
                        class="swiper-slide d-flex justify-content-center align-items-center">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/clientes/ConcrejatoEngenharia.png"
                            alt="Concrejato Engenharia logo"
                            loading="lazy"
                            style="max-width: 150px; height: auto" />
                    </div>
                    <div
                        class="swiper-slide d-flex justify-content-center align-items-center">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/clientes/Dinamica.png"
                            alt="Dinamica logo"
                            loading="lazy"
                            style="max-width: 150px; height: auto" />
                    </div>
                    <div
                        class="swiper-slide d-flex justify-content-center align-items-center">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/clientes/Engecom.png"
                            alt="Engecom logo"
                            loading="lazy"
                            style="max-width: 150px; height: auto" />
                    </div>
                    <div
                        class="swiper-slide d-flex justify-content-center align-items-center">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/clientes/GPE.png"
                            alt="GPE logo"
                            loading="lazy"
                            style="max-width: 150px; height: auto" />
                    </div>
                    <div
                        class="swiper-slide d-flex justify-content-center align-items-center">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/clientes/Conserpaenger.png"
                            alt="Conserpaenger logo"
                            loading="lazy"
                            style="max-width: 150px; height: auto" />
                    </div>
                    <div
                        class="swiper-slide d-flex justify-content-center align-items-center">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/clientes/Portomar.svg"
                            alt="Portomar logo"
                            loading="lazy"
                            style="max-width: 150px; height: auto" />
                    </div>
                    <div
                        class="swiper-slide d-flex justify-content-center align-items-center">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/clientes/RC.png"
                            alt="RC logo"
                            loading="lazy"
                            style="max-width: 150px; height: auto" />
                    </div>
                    <div
                        class="swiper-slide d-flex justify-content-center align-items-center">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/clientes/Tropical.png"
                            alt="Tropical logo"
                            loading="lazy"
                            style="max-width: 150px; height: auto" />
                    </div>
                    <div
                        class="swiper-slide d-flex justify-content-center align-items-center">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/clientes/CF.png"
                            alt="CF logo"
                            loading="lazy"
                            style="max-width: 150px; height: auto" />
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-0">
            <div class="col p-0 px-lg-5 m-0">
                <h2
                    class="coordly-text-dark fw-bold custom-font-size border-start border-5 px-3 mx-5"
                    style="border-color: #3547c8 !important">
                    Como a Coordly funciona?
                </h2>
                <div
                    class="col px-4 px-lg-5 pt-4 pb-4 pb-lg-5 my-5 rounded shadow mx-3 mx-lg-5">
                    <div class="swiper swiper-4">
                        <div class="swiper-pagination" style="text-wrap: nowrap; gap: 20px; flex-wrap: nowrap; overflow-x:auto"></div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide d-flex justify-content-center p-0">
                                <div class="col d-flex flex-column-reverse flex-md-row gap-3">
                                    <div class="col d-flex flex-column">
                                        <h2 class="coordly-text-dark fw-bold">
                                            Configure uma primeira obra gratuitamente
                                        </h2>
                                        <p class="coordly-text-dark">
                                            Criar uma obra na Coordly é muito fácil e rápido!
                                            Basta acessar a aba “Obras” no menu de navegação, e
                                            clicar no botão “+” no canto direito superior.
                                        </p>
                                        <p class="coordly-text-dark">
                                            Assim, é aberta uma nova janela para inserir os dados
                                            da obra, criar Disciplinas, convidar usuários e
                                            definir seus papeis, personalizar suas permissões,
                                            configurar uma Nomenclatura padrão e por fim conectar
                                            a obra ao seu Serviço de Armazenamento.
                                        </p>
                                    </div>
                                    <div
                                        class="col d-flex justify-content-center align-items-center">
                                        <iframe
                                            src="https://www.youtube-nocookie.com/embed/xy4eJ3qx3bI?si=dagFi1yBFMZ32K0H"
                                            loading="lazy"
                                            frameborder="0"
                                            referrerpolicy="strict-origin-when-cross-origin"
                                            allowfullscreen
                                            style="width: 100%; height: 40svh">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide d-flex justify-content-center p-0">
                                <div class="col d-flex flex-column-reverse flex-md-row gap-3">
                                    <div class="col d-flex flex-column">
                                        <h2 class="coordly-text-dark fw-bold">
                                            Faça a rastreabilidade dos seus projetos de forma
                                            inteligente
                                        </h2>
                                        <p class="coordly-text-dark">
                                            O controle de plotagens da Coordly é simples e fácil
                                            de usar! Você solicita as plotagens pela plataforma
                                            para documentos que já estão liberados, a plataforma
                                            envia um e-mail para sua plotadora.
                                        </p>
                                        <p class="coordly-text-dark">
                                            Agora basta gerenciar as plotagens solicitadas, com
                                            QRcodes impressos na prancha ou controlando o status
                                            por relatórios!
                                        </p>
                                    </div>
                                    <div
                                        class="col d-flex justify-content-center align-items-center">
                                        <iframe
                                            src="https://www.youtube-nocookie.com/embed/tCeFQSWdRdo?si=d0JbJJTYAdnhlbLN"
                                            loading="lazy"
                                            frameborder="0"
                                            referrerpolicy="strict-origin-when-cross-origin"
                                            allowfullscreen
                                            style="width: 100%; height: 40svh">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide d-flex justify-content-center p-0">
                                <div class="col d-flex flex-column-reverse flex-md-row gap-3">
                                    <div class="col d-flex flex-column">
                                        <h2 class="coordly-text-dark fw-bold">
                                            Receba tudo na sua mão
                                        </h2>
                                        <p class="coordly-text-dark">
                                            As notificações da Coordly são enviadas pela
                                            plataforma, por email de forma resumida e pelo nosso
                                            App disponivel para tablets e smartphones!
                                        </p>
                                    </div>
                                    <div
                                        class="col d-flex justify-content-center align-items-center">
                                        <iframe
                                            src="https://www.youtube-nocookie.com/embed/SlmqjRK8ccI?si=tikz-JIWfZDeySSk"
                                            loading="lazy"
                                            frameborder="0"
                                            referrerpolicy="strict-origin-when-cross-origin"
                                            allowfullscreen
                                            style="width: 100%; height: 40svh">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide d-flex justify-content-center p-0">
                                <div class="col d-flex flex-column-reverse flex-md-row gap-3">
                                    <div class="col d-flex flex-column">
                                        <h2 class="coordly-text-dark fw-bold">
                                            Centralize a gestão de tarefas dos projetos
                                        </h2>
                                        <p class="coordly-text-dark">
                                            A Coordenação de projetos não é possível sem a
                                            centralização da comunicação das demandas de projeto.
                                            Por isso, a Coordly oferece uma experiência nova para
                                            gestão das atividades de projetos!
                                        </p>
                                    </div>
                                    <div
                                        class="col d-flex justify-content-center align-items-center">
                                        <iframe
                                            src="https://www.youtube-nocookie.com/embed/Z6yR0L1Z4aQ?si=jmSTE32OJcz3a9hc"
                                            loading="lazy"
                                            frameborder="0"
                                            referrerpolicy="strict-origin-when-cross-origin"
                                            allowfullscreen
                                            style="width: 100%; height: 40svh">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide d-flex justify-content-center p-0">
                                <div class="col d-flex flex-column-reverse flex-md-row gap-3">
                                    <div class="col d-flex flex-column">
                                        <h2 class="coordly-text-dark fw-bold">Gestão do modelo BIM</h2>
                                        <p class="coordly-text-dark">
                                            Faça a gestão do modelo BIM pela plataforma! Monte o
                                            modelo federado e trabalhe de forma colaborativa com a
                                            sua equipe!
                                        </p>
                                    </div>
                                    <div
                                        class="col d-flex justify-content-center align-items-center">
                                        <iframe
                                            src="https://www.youtube-nocookie.com/embed/Z6yR0L1Z4aQ?si=wFrF90QP4jqWNWYc"
                                            loading="lazy"
                                            frameborder="0"
                                            referrerpolicy="strict-origin-when-cross-origin"
                                            allowfullscreen
                                            style="width: 100%; height: 40svh">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide d-flex justify-content-center p-0">
                                <div class="col d-flex flex-column-reverse flex-md-row gap-3">
                                    <div class="col d-flex flex-column">
                                        <h2 class="coordly-text-dark fw-bold">
                                            Personalise a plataforma para sua empresa
                                        </h2>
                                        <p class="coordly-text-dark">
                                            Com o plano Enterprise da Coordly, é possível
                                            personalizar a plataforma de acordo com a as
                                            necessidades da sua empresa!
                                        </p>
                                    </div>
                                    <div
                                        class="col d-flex justify-content-center align-items-center">
                                        <iframe
                                            src="https://www.youtube-nocookie.com/embed/rwtmvgrw37Q?si=iHVlA4RTcTmOxQL1"
                                            loading="lazy"
                                            frameborder="0"
                                            referrerpolicy="strict-origin-when-cross-origin"
                                            allowfullscreen
                                            style="width: 100%; height: 40svh">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="planos" class="row mx-0" style="background-color: #3547c8">
            <div class="col p-0 px-lg-5 my-5">
                <h2
                    class="text-white fw-bold custom-font-size border-start border-5 px-3 mx-5"
                    style="border-color: rgba(0, 0, 0, 0.4) !important">
                    Nossos Planos
                </h2>
                <div
                    class="col d-flex flex-wrap justify-content-center gap-5 p-0 my-5 mx-4 mx-lg-5">
                    <div
                        class="bg-white p-4 p-lg-5 rounded d-flex flex-column justify-content-between"
                        style="max-width: 400px">
                        <div>
                            <div class="border-bottom border-1 mb-3">
                                <h2 class="coordly-text-dark fw-bold custom-font-size">Start</h2>
                                <p class="coordly-text-dark">
                                    Teste a nossa plataforma gratuitamente e sem compromisso
                                </p>
                            </div>
                            <p class="coordly-text-dark">
                                ● Criação de
                                <span style="color: #3547c8">1 obra</span>
                            </p>
                            <p class="coordly-text-dark">
                                ● Gestão de documentos 2D e 3D
                            </p>
                            <p class="coordly-text-dark">● Controle de nomenclatura</p>
                        </div>
                        <a
                            class="btn text-nowrap coordly-btn-secondary px-3 py-3 mt-2"
                            href="https://app.maletadoengenheiro.com.br/signup">
                            Criar conta gratuita
                        </a>
                    </div>
                    <div
                        class="bg-white p-4 p-lg-5 rounded d-flex flex-column justify-content-between"
                        style="max-width: 400px">
                        <div>
                            <div class="border-bottom border-1 mb-3">
                                <h2 class="coordly-text-dark fw-bold custom-font-size">Standard</h2>
                                <p class="coordly-text-dark">
                                    O plano perfeito para a empresa que coordena poucos
                                    projetos, mas precisa da informação a onde você estiver
                                </p>
                            </div>
                            <p class="coordly-text-dark">
                                ● Criação de
                                <span style="color: #3547c8">5 obras</span>
                            </p>
                            <p class="coordly-text-dark">
                                ● Usuários
                                <span style="color: #3547c8">ilimitados</span>
                            </p>
                            <p class="coordly-text-dark">● Controle de plotagem</p>
                            <p class="coordly-text-dark">
                                ● Histórico de atividades por
                                <span style="color: #3547c8">60 dias</span>
                            </p>
                            <p class="coordly-text-dark">
                                ● Gestão de usuários e papéis na obra
                            </p>
                        </div>
                        <a
                            class="btn text-nowrap coordly-btn-primary px-3 py-3 mt-2"
                            href="https://api.whatsapp.com/send?phone=556240062626&text=Ol%C3%A1%2C+quero+falar+com+um+especialista+sobre+a+Coordly+e+agendar+uma+demonstra%C3%A7%C3%A3o."
                            target="_blank">
                            Fale com um especialista
                        </a>
                    </div>
                    <div
                        class="bg-white p-4 p-lg-5 rounded d-flex flex-column justify-content-between"
                        style="max-width: 400px">
                        <div>
                            <div class="border-bottom border-1 mb-3">
                                <h2 class="coordly-text-dark fw-bold custom-font-size">PRO</h2>
                                <p class="coordly-text-dark">
                                    Faça uso de todas as funcionalidades de forma ilimitada
                                </p>
                            </div>
                            <p class="coordly-text-dark">
                                ● Criação de
                                <span style="color: #3547c8">15 obras</span>
                            </p>
                            <p class="coordly-text-dark">
                                ● Usuários
                                <span style="color: #3547c8">ilimitados</span>
                            </p>
                            <p class="coordly-text-dark">● Controle de plotagem</p>
                            <p class="coordly-text-dark">● Controle de atividades</p>
                            <p class="coordly-text-dark">
                                ● Gereciamento do modelo
                                <span style="color: #3547c8">BIM</span>
                            </p>
                            <p class="coordly-text-dark">
                                ● Gestão de usuários e papéis na obra
                            </p>
                        </div>
                        <a
                            class="btn text-nowrap coordly-btn-primary px-3 py-3 mt-2"
                            href="https://api.whatsapp.com/send?phone=556240062626&text=Ol%C3%A1%2C+quero+falar+com+um+especialista+sobre+a+Coordly+e+agendar+uma+demonstra%C3%A7%C3%A3o."
                            target="_blank">
                            Fale com um especialista
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="contato" class="row mx-0">
            <div class="col p-0 px-lg-5 mt-5">
                <h2
                    class="coordly-text-dark fw-bold custom-font-size border-start border-5 px-3 mx-5"
                    style="border-color: #3547c8 !important">
                    Quer conhecer melhor?
                </h2>
                <div
                    class="col d-flex flex-column flex-md-row justify-content-center gap-5 p-0 mx-5 mt-5">
                    <div class="col">
                        <h2 class="coordly-text-dark fw-bold custom-font-size">Equipe de Vendas</h2>
                        <p style="color: #3547c8">Agende uma apresentação!</p>
                        <p class="coordly-text-dark">
                            “Nosso propósito é tranformar a experiência de coordenação de
                            projetos em algo mais simples, fácil e integrado.”
                        </p>
                        <h5 class="coordly-text-dark mb-4">
                            Com a Coordly, desde engenheiros autônomos até grandes
                            construtoras já podem adotar o BIM nos seus projetos com total
                            suporte do nosso time.
                        </h5>
                        <h5 class="coordly-text-dark mb-4">Vamos conversar?</h5>
                        <a
                            class="btn text-nowrap coordly-btn-secondary px-4 py-3"
                            href="https://api.whatsapp.com/send?phone=556240062626&text=Ol%C3%A1%2C+quero+falar+com+um+especialista+sobre+a+Coordly+e+agendar+uma+demonstra%C3%A7%C3%A3o."
                            target="_blank">
                            Marcar uma conversa
                        </a>
                    </div>
                    <div class="col">
                        <div class="" style="height: 950px">
                        <iframe
                            src="https://calendly.com/maletadoengenheiro/apresentacao-da-maleta-do-engenheiro-construtora?embed_domain=www.maletadoengenheiro.com.br&embed_type=Inline"
                            loading="lazy"
                            width="100%"
                            height="100%"
                            frameborder="0"
                            referrerpolicy="no-referrer"
                            sandbox="allow-same-origin allow-scripts allow-popups allow-forms">
                        </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-0 d-flex flex-column">
            <div
                class="d-flex flex-wrap align-items-center p-0 px-lg-5 mt-5 mx-5">
                <h2
                    class="coordly-text-dark fw-bold custom-font-size border-start border-5 px-3"
                    style="border-color: #3547c8 !important">
                    Conheça nosso blog
                </h2>
                <a href="<?php echo home_url(); ?>/blog" class="btn text-nowrap coordly-btn-secondary px-5 py-2">Ver mais</a>
            </div>
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
                            class="d-flex flex-column p-4 rounded shadow text-decoration-none coordly-text-dark"
                            style="max-width: 400px">
                                
                                <div class="post-thumbnail rounded mb-2" style="height: 200px">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                
                                <h4><?php the_title(); ?></h4>
                                
                                <p><?php echo get_the_date(); ?></p>
                                
                                <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>

                                <div class="d-flex flex-wrap gap-1 mb-1">
                                    <?php foreach (get_the_category() as $category): ?>
                                        <div class="py-1 px-2 text-white rounded text-nowrap" style="background-color: #3547c8">
                                            <h6 class="mb-0"><?= esc_html($category->name); ?></h6>
                                        </div>
                                    <?php endforeach; ?>
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