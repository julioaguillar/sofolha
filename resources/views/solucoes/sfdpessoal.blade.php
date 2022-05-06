@extends('layouts.master')

@section('titulo', 'SÓFOLHA Soluções Corporativas | Departamento Pessoal')

@section('conteudo')

    {{-- DESCRIÇÃO --}}
    <section class="w-full bg-Bege lg:bg-barra-lateral-bege bg-auto bg-left bg-no-repeat">
        <div class="container mx-auto my-14 md:my-20 py-5 md:py-14">
            <div class="flex flex-col xl:flex-row justify-around items-center py-10 px-3">
                <div class="border-t-18 border-VerdeAguaEscuro max-w-lg">
                    <img src="{{ asset('img/sfdpessoal.png') }}" width="593" height="359" alt="" class="w-fill mt-3">
                </div>
                <div class="max-w-2xl font-normal mt-5">
                    <h2 class="font-barlow text-3xl font-semibold text-AzulPrincipal">
                        DEPARTAMENTO PESSOAL <span class="font-barlow font-normal text-3xl">| SÓFOLHA Soluções
                            Corporativas</span>
                    </h2>
                    <p class="pt-3 text-lg text-AzulPrincipal">
                        O sistema de gerenciamento do <span class="font-bold">Departamento Pessoal (DP)</span>, fornece
                        uma ampla variedade de funções e rotinas de cálculo para gerar e processar folhas de pagamento e
                        disponibiliza um controle das informações cadastrais dos colaboradores.
                    </p>

                    <p class="pt-8">SISTEMAS COMPLETOS e elaborados conforme nossa legislação.</p>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center mx-auto lg:items-end lg:ml-auto lg:mr-0 max-w-sm px-4">
                <button class="bg-VermelhoEscuro w-11/12 py-4">
                    <a href="#" class="text-2xl text-white">
                        <i class="fa-solid fa-download fa-fw fa-xl"></i>
                        ATUALIZAR
                    </a>
                </button>
                <p class="pt-3 font-normal text-right">
                    Versão: <span class="font-light">112/2022</span>
                </p>
                <p class="pt-3 font-normal text-right">
                    Edição: <span class="font-light">29/03/22</span>
                </p>
            </div>
        </div>
    </section>

    {{-- PRINCIPAIS FUNÇÕES --}}
    <section class="w-full">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="max-w-5xl font-normal mt-5 mb-20">
                    <h2 class="font-barlow text-3xl font-semibold text-AzulPrincipal mx-3">
                        DEPARTAMENTO PESSOAL <span class="font-barlow font-normal text-3xl">| Principais Funções</span>
                    </h2>

                    <div class="pt-10 mx-7 md:mx-3">
                        {{-- <h3 class="font-barlow text-xl font-semibold text-AzulPrincipal"></h3> --}}
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 py-4">
                            {{-- CARD --}}
                            <div class="bg-Bege shadow p-4 rounded">
                                <p>
                                    Permite o acesso Simultâneo de Múltiplos Usuários na mesma Empresa,
                                    assim como a troca de Empresa sem necessidade de fechar o Sistema.
                                </p>
                            </div>
                            {{-- CARD --}}
                            <div class="bg-Bege shadow p-4 rounded">
                                <p>
                                    Possui opção para atualização das tabelas de encargos trabalhistas
                                    automaticamente, sem a necessidade de digitação.
                                </p>
                            </div>
                            {{-- CARD --}}
                            <div class="bg-Bege shadow p-4 rounded">
                                <p>
                                    Controla as informações cadastrais pessoais e funcionais do
                                    pessoal ativo e inativo na data de sua ocorrência, através do
                                    Controle e Vigência, registrando a evolução histórica.
                                </p>
                            </div>
                            {{-- CARD --}}
                            <div class="bg-Bege shadow p-4 rounded">
                                <p>
                                    Possui cadastro de beneficiários de pensão judicial e das verbas
                                    para pagamento por ocasião de férias, 13º e folha de pagamento, com suas respectivas
                                    fórmulas, conforme determinação judicial.
                                </p>
                            </div>
                            {{-- CARD --}}
                            <div class="bg-Bege shadow p-4 rounded">
                                <p>
                                    Possui rotinas que permitem administrar salários, possibilitando reajustes globais e
                                    parciais.
                                </p>
                            </div>
                            {{-- CARD --}}
                            <div class="bg-Bege shadow p-4 rounded">
                                <p>
                                    Permite o controle automático do valor relativo ao benefício de salário-família dos
                                    dependentes.
                                </p>
                            </div>
                            {{-- CARD --}}
                            <div class="bg-Bege shadow p-4 rounded">
                                <p>
                                    Permite a inclusão de valores variáveis na folha, como os provenientes de horas extras, periculosidade, insalubridade, faltas, descontos diversos e ações judiciais.
                                </p>
                            </div>
                            {{-- CARD --}}
                            <div class="bg-Bege shadow p-4 rounded">
                                <p>
                                    Possui rotina de cálculo de benefícios tais como: Vale-transporte e Auxílio-Alimentação.
                                </p>
                            </div>
                            {{-- CARD --}}
                            <div class="bg-Bege shadow p-4 rounded">
                                <p>
                                    Possui rotina para programação e cálculo do Décimo Terceiro (Adiantamento, Anual e
                                    Complemento Final Dezembro), assim como cálculo de Férias normais e coletivas e rotina para programação e cálculo de rescisões de contrato de trabalho e demissões.
                                </p>
                            </div>
                            {{-- CARD --}}
                            <div class="bg-Bege shadow p-4 rounded">
                                <p>
                                    Emite cálculo e emissão de Rescisão Complementar, a partir do lançamento do valor complementar via movimento de rescisão pela competência do pagamento, gerando automaticamente o registro destes valores na Ficha Financeira do mês, para integração contábil e demais rotinas.
                                </p>
                            </div>
                            {{-- CARD --}}
                            <div class="bg-Bege shadow p-4 rounded">
                                <p>
                                    Gerenciamento da Folha de Pagamento por Centro de Custo e/ou Tomador de Serviço/Obra de Construção Civil.
                                </p>
                            </div>
                            {{-- CARD --}}
                            <div class="bg-Bege shadow p-4 rounded">
                                <p>
                                    Opção para Lançamento da Folha Complementar para apuração das diferenças salarias decorrentes de Acordo Coletivo, Convenção Coletiva e Dissidio Coletivo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
