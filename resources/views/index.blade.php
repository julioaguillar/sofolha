@extends('layouts.master')

@section('titulo', 'SÓFOLHA Soluções Corporativas')

@section('conteudo')
    {{-- HERO SECTION --}}
    <section class="swiper carousel h-600 md:h-720">
        <div class="swiper-wrapper">

            {{-- DESTAQUE --}}
            <div class="swiper-slide relative bg-carousel-mobile-1 md:bg-carousel-tablet-1 xl:bg-carousel-1 bg-cover bg-no-repeat">
                <div class="hidden md:block absolute bottom-3 left-1 sm:left-4 mx-2">
                    <img src="{{ asset('img/SFVermelho.png') }}" width="300" height="199" alt="">
                </div>
                <div class="container mx-auto flex flex-col items-center lg:items-end pt-10 md:pt-20">
                    <div
                        class="flex flex-col justify-center max-w-lg xl:max-w-xl p-4 m-2 rounded bg-white/50 lg:bg-white/0 text-AzulEscuro">
                        <h2 class="font-barlow text-3xl md:text-5xl font-semibold">
                            SISTEMAS COMPLETOS
                        </h2>
                        <p class="text-xl font-medium py-6">
                            Há mais de <strong>25 anos</strong> oferecendo soluções eficientes e contribuindo para o
                            progresso contínuo da tecnologia no cumprimento e integração das corporações ao cenário
                            <strong>Tributário Nacional</strong>.
                        </p>
                    </div>
                </div>
            </div>

            {{-- TRABALHE CONOSCO --}}
            <div class="swiper-slide relative bg-carousel-mobile-2 sm:bg-carousel-tablet-2 lg:bg-carousel-2 bg-cover bg-no-repeat">
                <div class="hidden md:block absolute bottom-4 left-1 sm:left-4 mx-2">
                    <img src="{{ asset('img/SFVermelho.png') }}" width="300" height="199" alt="">
                </div>
                <div class="container mx-auto flex flex-col items-center lg:items-start pt-10 md:pt-20">
                    <div
                        class="flex flex-col justify-center max-w-lg xl:max-w-2xl p-4 m-2 rounded bg-black/50 lg:bg-white/0 text-white">
                        <h2 class="font-barlow text-3xl md:text-5xl font-semibold">
                            TRABALHE CONOSCO
                        </h2>
                        <div class="pt-3">
                            <p class="text-lg md:text-xl font-normal">
                                Nossa empresa contrata profissionais da área de programação em <strong>Delphi +
                                    Firebird</strong> e <strong>PHP + MySQL</strong>. Grandes <strong>benefícios</strong>
                                como: Convênio Médico (titular e dependentes); Vale Alimentação;
                                Auxílio Creche; Participação nos Lucros e Resultados.
                            </p>
                            <p class="text-lg md:text-xl font-normal py-3">
                                Horário de trabalho <strong>semanal</strong>, folga aos sábados e domingos.
                            </p>
                            <P class="text-lg md:text-xl font-normal py-3">
                                Envie seu currículo para <strong>consultoria@sofolha.com.br</strong> e receba uma grande
                                proposta de trabalho!
                            </P>
                        </div>
                    </div>
                </div>
            </div>

            {{-- AUTOMAÇÃO --}}
            <div class="swiper-slide relative bg-carousel-tablet-3 xl:bg-carousel-3 bg-cover bg-no-repeat">
                <div class="hidden md:block absolute bottom-3 left-1 sm:left-4 mx-2">
                    <img src="{{ asset('img/SFVermelho.png') }}" width="300" height="199" alt="">
                </div>
                <div class="relative z-10 container mx-auto flex flex-col items-center lg:items-end pt-10 md:pt-20">
                    <div
                        class="flex flex-col justify-center max-w-lg xl:max-w-xl p-4 m-2 md:m-0 rounded bg-white/50 lg:bg-white/0 text-AzulEscuro">
                        <h2 class="font-barlow text-3xl md:text-5xl font-semibold">
                            AUTOMAÇÃO COMERCIAL
                        </h2>
                        <p class="text-2xl font-normal pt-3">
                            Sistemas <span class="font-semibold">INTEGRADOS</span> e <span
                                class="font-semibold">COORDENADOS</span>
                        </p>
                        <p class="text-lg font-normal py-6">
                            <span class="font-semibold">SFAUTOMATUS</span> | Software <span class="font-semibold">Otimizador</span> de <span class="font-semibold">Processos</span>
                            para atividades Comerciais e de <span class="font-semibold">Prestação de Serviços</span>, que gerencia todos os dados e processos de <span class="font-semibold">Compra</span> e <span class="font-semibold">Venda</span> das mercadorias de uma empresa.
                        </p>
                        <a href="https://www.sfautomatus.sofolha.com.br/" target="_blank"
                            class="py-4 px-10 bg-VermelhoEscuro text-white font-medium w-fit">
                            CONHEÇA
                        </a>
                    </div>
                </div>
            </div>

            {{-- INTEGRAÇÃO --}}
            <div class="swiper-slide relative bg-carousel-mobile-4 md:bg-carousel-tablet-4 xl:bg-carousel-4 bg-cover bg-no-repeat">
                <div class="hidden md:block absolute bottom-4 left-1 sm:left-4 mx-2">
                    <img src="{{ asset('img/SFVermelho.png') }}" width="300" height="199" alt="">
                </div>
                <div class="container mx-auto flex flex-col items-center lg:items-start pt-10 md:pt-20">
                    <div
                        class="flex flex-col justify-center max-w-lg xl:max-w-xl p-4 m-2 rounded bg-black/50 xl:bg-white/0 text-white">
                        <h2 class="font-barlow text-3xl md:text-5xl font-semibold">
                            INTEGRAÇÃO
                        </h2>
                        <h3 class="font-barlow text-2xl font-normal mt-3">
                            Sistema de <strong>Engenharia Reversa</strong> de eventos do <strong>eSocial</strong>
                        </h3>
                        <p class="text-lg font-normal py-3">
                            Ferramenta que possibilita a <strong>importação</strong> de dados para o
                            <strong>SFDPessoal</strong> a partir do <strong>arquivo
                                XML</strong> gerado para o <strong>eSocial</strong>.
                        </p>
                        <p class="text-lg font-normal pb-6">
                            Exclusiva <strong>ferramenta</strong> que adiciona recursos ao seu Sistema.
                        </p>
                        <a href="#" target="_blank"
                            class="py-4 px-10 bg-VermelhoEscuro text-white font-medium w-fit">
                            SAIBA MAIS
                        </a>
                    </div>
                </div>
            </div>

            {{-- INTEGRAÇÃO SIENGE --}}
            <div class="swiper-slide relative bg-carousel-mobile-5 md:bg-carousel-tablet-5 xl:bg-carousel-5 bg-cover bg-no-repeat">
                <div class="hidden md:block absolute bottom-4 left-1 sm:left-4 mx-2">
                    <img src="{{ asset('img/SFVermelho.png') }}" width="300" height="199" alt="">
                </div>
                <div class="container mx-auto flex flex-col items-center lg:items-start pt-10 md:pt-20">
                    <div
                        class="flex flex-col justify-center max-w-lg xl:max-w-xl p-4 m-2 rounded bg-white/50 xl:bg-white/0 text-AzulEscuro">
                        <h2 class="font-barlow text-3xl md:text-5xl font-semibold">
                            INTEGRAÇÃO <br>
                            <span class="font-light">SFDPessoal / SIENGE</span>
                        </h2>
                        <p class="font-barlow text-2xl font-normal py-6">
                            Novo <strong>complemento</strong> com o objetivo de integrar o </strong>Sistema de Folha de
                            Pagamento</strong> com o Sistema <strong>SIENGE</strong>, da Softplan.
                        </p>
                        <a href="#" target="_blank"
                            class="py-4 px-10 bg-VermelhoEscuro text-white font-medium w-fit">
                            SAIBA MAIS
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </section>

    {{-- SOLUÇÕES --}}
    <section class="bg-Bege py-20">
        <div class="container mx-auto px-8">
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 justify-items-center items-center gap-5 max-w-6xl mx-auto text-AzulPrincipal">
                <div class="col-span-full px-6 pb-4">
                    <h2 class="font-barlow text-3xl font-semibold pb-3">SOLUÇÕES</h2>
                    <p class="font-normal text-lg">
                        Sistemas desenvolvidos com as mais modernas ferramentas de desenvolvimento de Software
                        disponibilizadas pelo mercado nacional e internacional, totalmente licenciadas, garantindo a máxima
                        qualidade em nossos produtos.
                    </p>
                </div>
                <a class="bg-CinzaBranco max-w-60 w-full h-44 px-6 py-5 transition hover:scale-110 flex flex-wrap content-evenly justify-center items-center text-center shadow-md"
                    href="{{ url('/solucoes/departamento-pessoal') }}">
                    <i class="fa-solid fa-user-group fa-fw fa-2xl text-AzulClaro"></i>
                    <p class="font-normal text-lg">
                        Departamento Pessoal
                    </p>
                </a>
                <a class="bg-CinzaBranco max-w-60 w-full h-44 px-6 py-5 transition hover:scale-110 flex flex-wrap content-evenly justify-center items-center text-center shadow-md"
                    href="{{ url('/solucoes/escrita-fiscal-contabilidade') }}">
                    <i class="fa-solid fa-file-pen fa-fw fa-2xl text-AzulClaro"></i>
                    <span>
                        <img src="{{ asset('img/caduceu.svg') }}" alt="logo" height="42" width="39" />
                    </span>
                    <p class="text-center font-normal text-lg">
                        Escrita Fiscal e Contabilidade
                    </p>
                </a>
                <a class="bg-CinzaBranco max-w-60 w-full h-44 px-6 py-5 transition hover:scale-110 flex flex-wrap content-evenly justify-center items-center text-center shadow-md"
                    href="https://www.sfautomatus.sofolha.com.br/" target="_blank">
                    <i class="fa-solid fa-receipt fa-fw fa-2xl text-AzulClaro"></i>
                    <p class="font-normal text-lg">
                        Automação Comercial
                    </p>
                </a>
                <a class="bg-CinzaBranco max-w-60 w-full h-44 px-6 py-5 transition hover:scale-110 flex flex-col content-evenly justify-center items-center text-center shadow-md"
                    href="{{ url('/solucoes/sf-converter') }}">
                    <i class="fa-solid fa-rotate fa-fw fa-2xl text-AzulClaro pb-4"></i>
                    <p class="font-normal text-lg">
                        SFConverter <br>
                        <span class="font-light">2ª geração</span>
                    </p>
                </a>
                <a class="bg-CinzaBranco max-w-60 w-full h-44 px-6 py-5 transition hover:scale-110 flex flex-col content-evenly justify-center items-center text-center shadow-md"
                    href="{{ url('/solucoes/advocacia') }}">
                    <i class="fa-solid fa-scale-balanced fa-fw fa-2xl text-AzulClaro pb-4"></i>
                    <p class="font-normal text-lg">
                        Advocacia
                    </p>
                </a>
                <a class="bg-CinzaBranco max-w-60 w-full h-44 px-6 py-5 transition hover:scale-110 flex flex-wrap content-evenly justify-center items-center text-center shadow-md"
                    href="{{ url('/solucoes/pesquisa-xml') }}">
                    <i class="fa-regular fa-file-lines fa-fw fa-2xl text-AzulClaro"></i>
                    <i class="fa-solid fa-magnifying-glass fa-fw fa-2xl text-AzulClaro"></i>
                    <p class="font-normal text-lg">
                        Pesquisa XML
                    </p>
                </a>
            </div>
        </div>
    </section>

    {{-- TELEFONES MOVEIS --}}
    <section class="container mx-auto my-6 py-8">
        <div class="flex flex-col lg:flex-row justify-center items-center ">
            <div
                class="flex flex-col justify-center text-center sm:text-left lg:text-right max-w-80 text-AzulPrincipal ml-3 sm:ml-0 p-4">
                <p>
                    <i class="fa-brands fa-whatsapp fa-fw fa-xl py-2 text-green-500"></i>
                    <i class="fa-solid fa-mobile-screen-button fa-fw fa-xl py-2"></i>
                </p>
                <p>Clique e confira os nossos números de</p>
                <h2 class="font-barlow font-semibold text-lg text-VermelhoEscuro">TELEFONES MÓVEIS</h2>
                <p>e solicite um atendimento com um dos nossos departamentos.</p>
            </div>
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 justify-items-start items-center gap-4 text-AzulPrincipal">

                <div class="text-center bg-Bege flex flex-col justify-center w-full h-full px-6 py-5 shadow-md">
                    <p class="font-normal text-lg">
                        Gestor Comercial
                    </p>
                    <span class="font-light">Área Pública</span>

                    <div class="py-2">
                        <i class="fa-brands fa-whatsapp fa-fw fa-xl py-2 text-green-500"></i>
                        <a href="https://wa.me/5514997357761" target="_blank" class="text-AzulPrincipal font-normal">(14)
                            99735-7761</a>
                    </div>
                    <div class="pb-2">
                        <i class="fa-brands fa-whatsapp fa-fw fa-xl py-2 text-green-500"></i>
                        <a href="https://wa.me/5514981961264" target="_blank" class="text-AzulPrincipal font-normal">(14)
                            98196-1264</a>
                    </div>
                </div>

                <div class="text-center bg-Bege flex flex-col justify-center w-full h-full px-6 py-5 shadow-md">
                    <p class="font-normal text-lg">
                        Gestor Comercial
                    </p>
                    <span class="font-light">Área Empresarial</span>

                    <div class="py-2">
                        <i class="fa-brands fa-whatsapp fa-fw fa-xl py-2 text-green-500"></i>
                        <a href="https://wa.me/5514996511740" target="_blank" class="text-AzulPrincipal font-normal">(14)
                            99651-1740</a>
                    </div>
                    <div class="pb-2">
                        <i class="fa-brands fa-whatsapp fa-fw fa-xl py-2 text-green-500"></i>
                        <a href="https://wa.me/5514981124829" target="_blank" class="text-AzulPrincipal font-normal">(14)
                            98112-4829</a>
                    </div>
                </div>

                <div class="text-center bg-Bege flex flex-col justify-center w-full h-full px-6 py-5 shadow-md">
                    <p class="font-normal text-lg">
                        Mentoring
                    </p>
                    <span class="font-light">Automação Comercial</span>

                    <div class="py-2">
                        <i class="fa-brands fa-whatsapp fa-fw fa-xl py-2 text-green-500"></i>
                        <a href="https://wa.me/5514982133602" target="_blank" class="text-AzulPrincipal font-normal">(14)
                            98213-3602</a>
                    </div>
                </div>

                <div class="text-center bg-Bege flex flex-col justify-center w-full h-full px-6 py-5 shadow-md">
                    <p class="font-normal text-lg">
                        Mentoring
                    </p>
                    <span class="font-light">Departamento Pessoal</span>

                    <div class="py-2">
                        <i class="fa-brands fa-whatsapp fa-fw fa-xl py-2 text-green-500"></i>
                        <a href="https://wa.me/5514981829622" target="_blank" class="text-AzulPrincipal font-normal">(14)
                            98182-9622</a>
                    </div>
                </div>

                <div class="text-center bg-Bege flex flex-col justify-center w-full h-full px-6 py-5 shadow-md">
                    <p class="font-normal text-lg">
                        Documentação Contratual
                    </p>

                    <div class="py-2">
                        <i class="fa-brands fa-whatsapp fa-fw fa-xl py-2 text-green-500"></i>
                        <a href="https://wa.me/5514982090486" target="_blank" class="text-AzulPrincipal font-normal">(14)
                            98209-0486</a>
                    </div>
                </div>

                <div class="text-center bg-Bege flex flex-col justify-center w-full h-full px-6 py-5 shadow-md">
                    <p class="font-normal text-lg">
                        Financeiro
                    </p>

                    <div class="py-2">
                        <i class="fa-brands fa-whatsapp fa-fw fa-xl py-2 text-green-500"></i>
                        <a href="https://wa.me/5514997544468" target="_blank" class="text-AzulPrincipal font-normal">(14)
                            99754-4468</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- SOLUÇÕES PARA GESTÃO PÚBLICA --}}
    <section class="h-720 w-full bg-Bege lg:bg-gestao-publica bg-cover bg-center">
        <div class="container mx-auto flex flex-col justify-center items-center lg:items-end">
            <div class="flex flex-col justify-center h-720 max-w-md xl:max-w-xl p-4 text-RoxoEscuro">
                <h2 class="font-barlow font-semibold text-3xl">SOLUÇÕES para</h2>
                <h2 class="font-barlow font-semibold text-3xl">GESTÃO PÚBLICA</h2>
                <h3 class="font-normal">Módulos funcionais para a Administração Pública e o Planejamento Urbano dos
                    municípios.</h3>

                <p class="py-6">
                    <span class="font-normal">"Contabilidade Pública"</span> | Planejamento e Orçamento, Compras e
                    Licitações, Tesouraria, Administração de Estoque, Patrimônio e Frotas, Gestão da Receita e Gestão de
                    Recursos Humanos.
                </p>

                <p class="py-6">
                    <span class="font-normal">"Planejamento Urbano"</span> | Gerenciamento dos seguintes segmentos:
                    Infações
                    de Trânsito, Emissão de Credenciais
                    para Estacionamento em Vagas Regulamentadas aos Portadores de Necessidades Especiais e Idosos; Mototáxi,
                    Motoentregador e Táxi; Boletim de Ocorrência; Estacionamento Rotativo, Veículos de Propulsão Humana e
                    Animal, Área de Estacionamento e Administração de Lote.
                </p>

                <a class="px-8 py-2 w-fit bg-BegeEscuro font-normal" href="http://www.sfgestorpublico.sofolha.com.br/"
                    target="_blank">ACESSAR</a>
            </div>
        </div>
    </section>

    {{-- DADOS DOS ANOS E ATENDIMENTOS --}}
    <section class="container mx-auto">
        <div class="flex flex-col md:flex-row justify-center items-center py-16 text-center">
            <div class="md:text-right text-AzulPrincipal text-lg px-8 py-6 md:py-0 max-w-sm">
                <h3 class="font-barlow font-semibold text-3xl text-VermelhoEscuro">+25</h3>
                <p>
                    Anos criando <span class="font-normal">soluções</span> e <span class="font-normal">recursos
                        digitais</span> para otimizar os processos internos das corporações
                </p>
            </div>
            <div class="md:text-center text-AzulPrincipal text-lg px-8 py-6 md:py-0 max-w-sm">
                <h3 class="font-barlow font-semibold text-3xl text-VermelhoEscuro">+50.000</h3>
                <p>
                    horas de <span class="font-normal">atendimento</span> ao cliente oferecendo tranquilidade e precisão
                    nas orientações transmitidas
                </p>
            </div>
            <div class="md:text-left text-AzulPrincipal text-lg px-8 py-6 md:py-0 max-w-sm">
                <h3 class="font-barlow font-semibold text-3xl text-VermelhoEscuro">+1.000</h3>
                <p>
                    <span class="font-normal">escritórios</span> e <span class="font-normal">empresas</span>
                    atendidas através de uma moderna estrutura de desenvolvimento de software
                </p>
            </div>
        </div>
    </section>
@endsection
