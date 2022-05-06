@extends('layouts.master')

@section('titulo', 'SÓFOLHA Soluções Corporativas | Download')

@section('conteudo')

    {{-- SFAtalho --}}
    <section class="w-full bg-Bege bg-barra-lateral-bege bg-auto bg-left bg-no-repeat">
        <div class="container mx-auto my-20">
            <div class="flex flex-col lg:flex-row justify-around items-center py-10 px-3 relative">
                <div class="absolute bottom-14 left-4">
                    <img src="{{ asset('img/SFBege.png') }}" width="800" height="461" alt="">
                </div>
                <div class="text-AzulPrincipal max-w-lg ">
                    <div class="relative z-20">
                        <h2 class="font-barlow text-3xl font-semibold">
                            DOWNLOAD <span class="font-barlow font-normal text-3xl">| SFAtalho</span>
                        </h2>
                        <p class="font-normal pt-3">
                            Ferramenta de Acesso aos Aplicativos SÓFOLHA Licença Gratuita. Oferece integração à todos os
                            Sistemas SÓFOLHA utilizados em seu escritório, disponibilizando as principais funcionalidades de
                            rotina do seu dia-a-dia.
                        </p>

                        <div class="py-8 text-RoxoEscuro font-normal">
                            <h3 class="text-2xl">FUNCIONALIDADES:</h3>

                            <ul class="pt-3">
                                <li>Atualização dos Sistemas Windows</li>
                                <li>Consulta de senhas dos Aplicativos</li>
                                <li>Liberação automática de Senha</li>
                                <li>Reestruturação da Interface proporcionando maior eficiência</li>
                                <li>Facilidade e Dinamismo na Instalação</li>
                                <li>Acesso ao Chat ON-LINE!</li>
                                <li>Reestruturação do sistema de Backups (Windows e DOS)</li>
                                <li>Acesso ao Suporte SÓFOLHA via email</li>
                                <li>Maior velocidade nas atualizações dos Sistemas</li>
                                <li>Consulta de senha de liberação do mês.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="max-w-md">
                    <img src="{{ asset('img/SFAtalho.png') }}" alt="SFAtalho" class="pb-10">

                    <button class="bg-VermelhoEscuro w-full py-4">
                        <a href="#" class="text-2xl text-white">
                            <i class="fa-solid fa-download fa-fw fa-xl"></i>
                            INSTALAR
                        </a>
                    </button>
                    <p class="pt-3 font-normal text-right">
                        Número de Downloads efetuatos: <span class="font-light">1600</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- DOWNLOADS DIVERSOS --}}
    <section class="w-full">
        <div class="container mx-auto px-4 pb-20">
            <div class="flex max-w-5xl mx-auto">
                <h3 class="font-barlow text-xl">EXCETO O <span class="font-normal">SFATALHO</span> ACIMA, OS SOFTWARES
                    ABAIXO DISPONIBILIZADOS <span class="font-normal">NÃO SÃO DE AUTORIA DA SÓFOLHA E</span> PORTANTO NÃO
                    PODERÁ SER ATRIBUÍDA NENHUMA RESPONSABILIDADE AO MESMO, ASSIM COMO QUALQUER <span
                        class="font-normal">FORNECIMENTO DE SUPORTE</span></h3>
            </div>

            <div class="pt-8 w-full">
                <div class="flex flex-col lg:flex-row justify-center items-center lg:items-start">
                    <div class="max-w-xs w-full lg:mr-7 lg:mb-0 mb-7">
                        <div class="flex items-center justify-center pb-6 bg-Bege p-6 border-b-8 border-AzulClaro">
                            <img width="64" height="64" src="{{ asset('img/teamviewer-icon.png') }}" alt="teamviewer">
                        </div>
                        <div class="px-2">
                            <h4 class="py-3 font-normal">TEAMVIEWER</h4>
                            <p class="text-sm">
                                Aplicativo para Suporte Remoto <span class="font-normal">| Licença gratuita</span>
                            </p>
                            <p class="py-4">
                                Através da internet, nossa equipe de suporte acessa seu computador e soluciona o problema de
                                maneira rápida, garantindo a satisfação no atendimento. O cliente apenas acompanha pela tela
                                do computador o que está sendo executado, podendo interagir com a equipe do <span
                                    class="font-normal">Suporte Técnico</span> utilizando o Chat do próprio Software.
                            </p>
                        </div>
                    </div>
                    <div class="max-w-xs w-full lg:mr-7 lg:mb-0 mb-7">
                        <div class="flex items-center justify-center pb-6 bg-Bege p-6 border-b-8 border-AzulClaro">
                            <i class="fa-solid fa-screwdriver-wrench fa-4x text-AzulClaro"></i>
                        </div>
                        <div class="px-2">
                            <h4 class="py-3 font-normal">FERRAMENTAS UTILITÁRIAS</h4>
                            <p class="text-sm font-normal">
                                Licença gratuita
                            </p>

                            <ul class="py-3 font-normal">
                                <li>Firebird <span class="font-light">1.5 (2,96 MB)</span></li>
                                <li>Firebird <span class="font-light">2.5 (6,50 MB)</span></li>
                                <li>Interbase <span class="font-light">(2,44 MB)</span></li>
                                <li>SFVisualizador <span class="font-light">(Autoria SÓFOLHA)</span></li>
                                <li>Filezip <span class="font-light">- Compactadores para Backup interno</span></li>
                                <li>Acrobat Reader <span class="font-light">(36,8 MB) 10</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="max-w-xs w-full lg:mr-7 lg:mb-0 mb-7">
                        <div class="flex items-center justify-center pb-6 bg-Bege p-6 border-b-8 border-AzulClaro">
                            <i class="fa-solid fa-screwdriver-wrench fa-4x text-AzulClaro"></i>
                        </div>
                        <div class="px-2">
                            <h4 class="py-3 font-normal">FERRAMENTAS UTILITÁRIAS</h4>
                            <p class="text-sm font-normal">
                                Licença gratuita
                            </p>

                            <ul class="py-3 font-normal">
                                <li>Firebird <span class="font-light">1.5 (2,96 MB)</span></li>
                                <li>Firebird <span class="font-light">2.5 (6,50 MB)</span></li>
                                <li>Interbase <span class="font-light">(2,44 MB)</span></li>
                                <li>SFVisualizador <span class="font-light">(Autoria SÓFOLHA)</span></li>
                                <li>Filezip <span class="font-light">- Compactadores para Backup interno</span></li>
                                <li>Acrobat Reader <span class="font-light">(36,8 MB) 10</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row justify-center items-center lg:items-start">
                    <div class="max-w-xs w-full lg:mr-7 lg:mb-0 mb-7">
                        <div class="flex items-center justify-center pb-6 bg-Bege p-6 border-b-8 border-AzulClaro">
                            <i class="fa-solid fa-screwdriver-wrench fa-4x text-AzulClaro"></i>
                        </div>
                        <div class="px-2">
                            <h4 class="py-3 font-normal">FERRAMENTAS UTILITÁRIAS</h4>
                            <p class="text-sm font-normal">
                                Licença gratuita
                            </p>

                            <ul class="py-3 font-normal">
                                <li>Firebird <span class="font-light">1.5 (2,96 MB)</span></li>
                                <li>Firebird <span class="font-light">2.5 (6,50 MB)</span></li>
                                <li>Interbase <span class="font-light">(2,44 MB)</span></li>
                                <li>SFVisualizador <span class="font-light">(Autoria SÓFOLHA)</span></li>
                                <li>Filezip <span class="font-light">- Compactadores para Backup interno</span></li>
                                <li>Acrobat Reader <span class="font-light">(36,8 MB) 10</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
