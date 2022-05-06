<header class="relative text-white m-0 p-0 z-50 h-32">
    <div class="fixed bg-AzulPrincipal w-full">
        <div class="w-full h-3 bg-AzulClaro">&nbsp;</div>
        <div class="w-full h-2.5 bg-AzulEscuro relative">&nbsp;</div>

        <nav class="container mx-auto flex flex-wrap items-center justify-between w-full py-7 lg:py-3.5 px-6">
            {{-- logo --}}
            <div>
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-44 h-fit" />
                </a>
            </div>

            {{-- botão do menu responsivo --}}
            <svg class="h-6 w-6 cursor-pointer lg:hidden block" xmlns="http://www.w3.org/2000/svg" id="menu-button"
                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            {{-- menu --}}
            <div class="hidden w-full lg:flex lg:items-center lg:w-auto" id="menu">
                <ul class="pt-4 text-base lg:flex lg:justify-between">
                    <li class="w-fit group">
                        <button
                            class="block relative font-normal my-2 lg:m-4 pt-1 border-b-2 border-transparent hover:border-AzulClaro">
                            SOLUÇÕES
                            <i
                                class="fa-solid fa-angle-down fa-fw fa-lg text-gray-100 group-hover:-rotate-180 transition duration-150 ease-in-out"></i>
                        </button>
                        <div class="hidden group-hover:block absolute w-content max-w-screen-sm lg:max-w-screen-md">
                            <div class="px-2 pt-2 pb-4 bg-white rounded-md shadow-lg mr-5 md:mr-0">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-0 sm:gap-1 text-AzulPrincipal">

                                    <a class="hover:bg-gray-100 group md:p-3 flex row items-center rounded"
                                        href="{{ url('/solucoes/departamento-pessoal') }}">
                                        <div class="ml-3">
                                            <p class="font-bold text-base">
                                                Departamento Pessoal
                                            </p>
                                            <P>
                                                Sistema gerenciador de folha de pagamento e informações cadastrais de
                                                colaboradores.
                                            </P>
                                        </div>
                                    </a>

                                    <a class="hover:bg-gray-100 group md:p-3 flex row items-center rounded"
                                        href="{{ url('/solucoes/escrita-fiscal-contabilidade') }}">
                                        <div class="ml-3">
                                            <p class="font-bold text-base">
                                                Escrita Fiscal e Contabilidade
                                            </p>
                                            <p>
                                                Cumpre com as principais obrigações de acessoria, contábil e tributação.
                                            </p>
                                        </div>
                                    </a>

                                    <a class="hover:bg-gray-100 group md:p-3 flex row items-center rounded"
                                        href="https://www.sfautomatus.sofolha.com.br/" target="_blank">
                                        <div class="ml-3">
                                            <p class="font-bold text-base">
                                                Automação Comercial
                                            </p>
                                            <p>
                                                Um novo conceito em Sistemas para Automação Comercial e Otimização de
                                                Processos.
                                            </p>
                                        </div>
                                    </a>

                                    <a class="hover:bg-gray-100 group md:p-3 flex row items-center rounded"
                                        href="{{ url('/solucoes/sf-converter') }}">
                                        <div class="ml-3">
                                            <p class="font-bold text-base">
                                                SFConverter
                                                <span class="font-light">2ª geração</span>
                                            </p>
                                            <P>
                                                Faz download direto do SEFAZ e armazena todos XML das NF-e (Notas
                                                Fiscais Eletrônicas) recebidas pela sua empresa.
                                            </P>
                                        </div>
                                    </a>

                                    <a class="hover:bg-gray-100 group md:p-3 flex row items-center rounded"
                                        href="{{ url('/solucoes/advocacia') }}">
                                        <div class="ml-3">
                                            <p class="font-bold text-base">
                                                Advocacia
                                            </p>
                                            <p>
                                                Cadastre ou acompanhe processos judiciais e gestão de contratos.
                                            </p>
                                        </div>
                                    </a>

                                    <a class="hover:bg-gray-100 group md:p-3 flex row items-center rounded"
                                        href="{{ url('/solucoes/pesquisa-xml') }}">
                                        <div class="ml-3">
                                            <p class="font-bold text-base">
                                                Pesquisa XML
                                            </p>
                                            <p>
                                                Busca de texto dentro de arquivos XML de NF-e, CF-e - SAT e CT-e.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="w-fit">
                        <a href="{{ route('site.download') }}"
                            class="block font-normal my-2 lg:m-4 pt-1 border-b-2 border-transparent hover:border-AzulClaro">DOWNLOAD</a>
                    </li>
                    <li class="w-fit">
                        <a href="{{ route('site.sobre') }}"
                            class="block font-normal my-2 lg:m-4 pt-1 border-b-2 border-transparent hover:border-AzulClaro">SOBRE</a>
                    </li>
                    <li class="lg:ml-8 w-fit">
                        <a href="http://sfitecnologica.mysuite1.com.br/client/chatan.php" target="_blank"
                            class="block my-3 lg:my-0 px-4 py-3 font-medium bg-AzulClaro">
                            Consulte um Especialista
                        </a>
                    </li>
                    <li class="lg:ml-3 w-fit">
                        <a href="http://www.sofolha.com.br/arearestrita.php" target="_blank"
                            class="block px-4 py-3 bg-AzulEscuro font-normal">
                            <i class="fa-regular fa-user fa-fw fa-lg text-AzulClaro"></i>
                            Área do Cliente
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
