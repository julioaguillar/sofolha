@extends('layouts.master')

@section('titulo', 'SÓFOLHA Soluções Corporativas | Sobre')

@section('conteudo')

    {{-- SOBRE --}}
    <section class="w-full bg-Bege lg:bg-barra-lateral-bege bg-auto bg-left bg-no-repeat">
        <div class="container mx-auto my-14 md:my-20 py-5 md:py-14">
            <div class="flex flex-col lg:flex-row justify-around items-center py-10 px-3 relative">
                <div class="absolute bottom-14 left-4">
                    <img src="{{ asset('img/SFBege.png') }}" width="800" height="461" alt="">
                </div>
                <div class="max-w-5xl font-normal relative z-20">
                    <h2 class="font-barlow text-3xl font-semibold text-AzulPrincipal">
                        SOBRE <span class="font-barlow font-normal text-3xl">| SÓFOLHA Soluções Corporativas</span>
                    </h2>
                    <p class="pt-3 text-lg text-AzulPrincipal">
                        Há mais de 25 anos oferecendo soluções eficientes e contribuindo para o progresso contínuo da
                        tecnologia no cumprimento e integração das Corporações ao cenário Tributário Nacional.
                    </p>

                    <p class="pt-8">SISTEMAS COMPLETOS e elaborados conforme nossa legislação.</p>

                    <p class="pt-4">
                        A empresa SÓFOLHA Soluções Corporativas, fundada em fevereiro de 1996, atua na área de Tecnologia da
                        Informação buscando inovações acessíveis aos ramos de atividade que analisa e entende que, novos
                        recursos digitais podem ser criados para otimização dos processos internos das corporações.
                    </p>

                    <p class="pt-4">
                        Com mais de 20 anos no mercado, conta com um quadro de Colaboradores extremamente capacitado,
                        oferecendo aos clientes, tranquilidade e precisão nas orientações transmitidas.
                    </p>

                    <p class="pt-4">
                        Nossos programas são desenvolvidos com as mais modernas ferramentas de desenvolvimento de Software
                        disponibilizadas pelo mercado nacional e internacional, totalmente licenciadas, adquiridas pela
                        empresa, para garantir a máxima qualidade em nossos produtos.
                    </p>

                    <p class="pt-4">
                        O conjunto de toda essa experiência aliada ao nosso conhecimento e responsabilidade, leva nossos
                        produtos e serviços a uma classificação de alto nível, nos destacando entre as mais modernas e
                        estruturadas empresas desenvolvedoras de software do país.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- GALERIA DE FOTOS --}}
    <section class="container mx-auto mb-20">
        <div class="flex flex-wrap justify-center items-center max-w-5xl w-full mx-auto">
            <a target="_blank" href="{{ asset('img/galeria-sobre/form-quadrado-1.jpg') }}" data-lightbox="roadtrip" class="transition hover:scale-110">
                <img src="{{ asset('img/galeria-sobre/form-quadrado-1.jpg') }}" alt="Fachada" width="958" height="958"
                    class="w-44 m-2">
            </a>

            <a target="_blank" href="{{ asset('img/galeria-sobre/form-quadrado-2.jpg') }}" data-lightbox="roadtrip" class="transition hover:scale-110">
                <img src="{{ asset('img/galeria-sobre/form-quadrado-2.jpg') }}" alt="Suporte" width="958" height="958"
                    class="w-44 m-2">
            </a>

            <a target="_blank" href="{{ asset('img/galeria-sobre/form-quadrado-3.jpg') }}" data-lightbox="roadtrip" class="transition hover:scale-110">
                <img src="{{ asset('img/galeria-sobre/form-quadrado-3.jpg') }}" alt="Recepção" width="958" height="958"
                    class="w-44 m-2">
            </a>

            <a target="_blank" href="{{ asset('img/galeria-sobre/form-quadrado-4.jpg') }}" data-lightbox="roadtrip" class="transition hover:scale-110">
                <img src="{{ asset('img/galeria-sobre/form-quadrado-4.jpg') }}" alt="Recepção" width="958" height="958"
                    class="w-44 m-2">
            </a>

            <a target="_blank" href="{{ asset('img/galeria-sobre/form-quadrado-5.jpg') }}" data-lightbox="roadtrip" class="transition hover:scale-110">
                <img src="{{ asset('img/galeria-sobre/form-quadrado-5.jpg') }}" alt="Fachada dentro" width="958"
                    height="958" class="w-44 m-2">
            </a>
        </div>
    </section>

    {{-- ATENDIMENTO --}}
    <section class="pb-5 md:pb-20 w-full">
        <div class="container mx-auto px-4">
            <div class="flex flex-col flex-wrap max-w-5xl mx-auto">
                <h2 class="font-barlow text-3xl font-semibold text-AzulPrincipal">ATENDIMENTO PERSONALIZADO</h2>
                <p class="text-xl font-light text-AzulPrincipal pt-4">
                    Relacionamento com o cliente <span class="font-normal">8 horas diárias, 5 dias por semana,</span> de
                    2ª a 6ª feira das 8h às 11h30 e das 13h às 17h30.
                </p>
                <p class="text-xl font-normal text-AzulPrincipal pt-3">
                    Confira nossos canais de atendimento.
                </p>
            </div>

            <div class="pt-8 w-full">
                <div class="lg:flex justify-center w-full">
                    <div class="lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded">
                        <div class="flex items-center border-b border-gray-200 pb-6">
                            <i class="fa-solid fa-phone fa-fw fa-xl text-AzulClaro"></i>
                            <div class="flex items-start justify-between w-full">
                                <div class="pl-3 w-full">
                                    <p class="text-xl font-medium leading-5 text-gray-800">
                                        Telefones
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="px-2">
                            <p class="py-4 font-normal text-sm">
                                Centrais telefônicas interligadas otimizando o custo de ligações interurbanas através das
                                seguintes regiões:
                            </p>
                            <ul>
                                <li class="font-normal text-sm">
                                    Marília e região <span class="font-light">(14)2105-5500</span>
                                </li>
                                <li class="font-normal text-sm">
                                    Presidente Prudente e região <span class="font-light">(18)3600-9899 /
                                        (18)3600-9980</span>
                                </li>
                                <li class="font-normal text-sm">
                                    S. José dos Campos e região <span class="font-light">(12)3600-9666 / (12)
                                        3600-9678</span>
                                </li>
                                <li class="font-normal text-sm">
                                    São Paulo e região <span class="font-light">(11)3010-1210 / (11)3010-1211</span>
                                </li>
                                <li class="font-normal text-sm">
                                    Sorocaba e região <span class="font-light">(15) 3500-9763</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded">
                        <div class="flex items-center border-b border-gray-200 pb-6">
                            <i class="fa-solid fa-desktop fa-fw fa-xl text-AzulClaro"></i>
                            <div class="flex items-start justify-between w-full">
                                <div class="pl-3 w-full">
                                    <p class="text-xl font-medium leading-5 text-gray-800">
                                        Remoto
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="px-2">
                            <p class="py-4 text-sm font-normal">
                                Aplicativo via Acesso Remoto através da internet, onde nossa equipe acessa seu computador e
                                soluciona o problema de maneira ágil, tendo o acompanhamento do próprio cliente através da
                                tela do computador, podendo interagir utilizando o Chat do próprio Software. Disponível
                                através do nosso <strong>SITE</strong> pelo menu <strong>Downloads</strong>, bem como
                                através do <strong>SFAtalho</strong> (opção Utilitários &gt; Assistênccia Remota)
                            </p>
                        </div>
                    </div>
                </div>

                <div class="lg:flex justify-center w-full mt-7">
                    <div class="lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded">
                        <div class="flex items-center border-b border-gray-200 pb-6">
                            <i class="fa-regular fa-comments fa-fw fa-xl text-AzulClaro"></i>
                            <div class="flex items-start justify-between w-full">
                                <div class="pl-3 w-full">
                                    <p class="text-xl font-medium leading-5 text-gray-800">
                                        Chat
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="px-2">
                            <p class="py-4 text-sm font-normal">
                                Ferramenta que possibilita a exclusiva comunicação através
                                de conversão <strong>ONLINE</strong>, onde o cliente tem a oportunidade de esclarecer
                                dúvidas, de forma
                                rápida e prática. Disponível através do nosso <strong>SITE</strong>, bem como pelo
                                <strong>SFAtalho</strong> (opção no canto inferior descrito como ATENDIMENTO ON-LINE)
                            </p>
                            <button class="bg-VermelhoEscuro px-5 py-2">
                                <a href="#" class="text-white">Acessar Chat</a>
                            </button>
                        </div>
                    </div>
                    <div class="lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded">
                        <div class="flex items-center border-b border-gray-200 pb-6">
                            <i class="fa-solid fa-star-of-life fa-fw fa-xl text-AzulClaro"></i>
                            <div class="flex items-start justify-between w-full">
                                <div class="pl-3 w-full">
                                    <p class="text-xl font-medium leading-5 text-gray-800">
                                        Ning
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="px-2">
                            <p class="py-4 text-sm font-normal">
                                <strong>Rede virtual</strong> de informações e aprendizado fomentando diariamente a troca de
                                experiências
                                sobre nossa legislação Tributária, inclusive Trabalhista e Previdenciária. <strong>Não
                                    caracterizado</strong> como "<strong>Suporte Técnico</strong>" em relação aos nossos
                                Sistemas. Acesse <a href="https://sofolha.ning.com/" target="_blank"
                                    class="text-VermelhoEscuro">sofolha.ning.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    {{-- CONTATO --}}
    <section class="pb-5 md:pb-20 w-full">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row justify-around items-center px-3">
                <div class="max-w-6xl w-full font-normal">
                    <h2 class="font-barlow text-3xl font-semibold text-AzulPrincipal">
                        CONTATO <span class="font-barlow font-normal text-3xl">| Diga-nos como podemos te ajudar</span>
                    </h2>

                    {{-- PRECISA COLOCAR NO PADRÃO LARAVEL --}}
                    <form method="POST" action="{{ url('/contato') }}">
                        @csrf

                        @if (count($errors) > 0)
                            <div class="w-full relative bg-red-100 text-VermelhoEscuro px-4 py-3 mt-4" role="alert">
                                <strong class="font-bold mr-1">Preencha os dados corretamente!</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3 alert-del">
                                    <svg class="fill-current h-6 w-6 text-red-500" role="button"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <title>Close</title>
                                        <path
                                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                    </svg>
                                </span>
                            </div>
                        @endif

                        @if ($message = Session::get('success'))
                            <div class="bg-green-100 text-green-700 px-4 py-3 relative mt-4" role="alert">
                                <strong class="font-bold">Enviado com sucesso!</strong> {{ $message }}
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3 alert-del">
                                    <svg class="fill-current h-6 w-6 text-green-500" role="button"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <title>Close</title>
                                        <path
                                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                    </svg>
                                </span>
                            </div>
                        @endif

                        @if ($message = Session::get('error'))
                            <div class="bg-red-100 text-VermelhoEscuro px-4 py-3 relative mt-4" role="alert">
                                <strong class="font-bold">Erro</strong> {{ $message }}
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3 alert-del">
                                    <svg class="fill-current h-6 w-6 text-red-500" role="button"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <title>Close</title>
                                        <path
                                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                    </svg>
                                </span>
                            </div>
                        @endif

                        <div class="flex flex-col md:flex-row mt-6">
                            <input type="text" name="nome" id="nome" placeholder="Nome"
                                class="w-full md:w-3/5 p-3 text-lg bg-CinzaBranco mr-4">
                            <input type="text" name="telefone" id="telefone" placeholder="Telefone"
                                class="w-full md:w-2/5 mt-4 md:mt-0 p-3 text-lg bg-CinzaBranco">
                        </div>
                        <div class="flex w-full mt-4">
                            <input type="email" name="email" id="email" placeholder="Email"
                                class="w-full p-3 text-lg bg-CinzaBranco">
                        </div>
                        <div class="flex w-full mt-4">
                            <textarea name="mensagem" id="mensagem" rows="5" class="w-full p-3 text-lg bg-CinzaBranco"
                                placeholder="Mensagem"></textarea>
                        </div>
                        <div class="flex justify-end mt-4">
                            <button type="submit" class="flex items-end px-16 py-3 bg-VermelhoEscuro text-white">
                                ENVIAR
                            </button>
                        </div>
                    </form>

                    <iframe class="w-full h-96 mt-16"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.5049551302254!2d-49.951074585046754!3d-22.220912085364915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bfd73865594495%3A0xc0d43f0700d75423!2sR.%20S%C3%A3o%20Luiz%2C%20238%20-%20Centro%2C%20Mar%C3%ADlia%20-%20SP%2C%2017530-001!5e0!3m2!1spt-BR!2sbr!4v1651164668749!5m2!1spt-BR!2sbr"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>

            </div>
        </div>
    </section>

@endsection
