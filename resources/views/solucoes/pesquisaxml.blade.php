@extends('layouts.master')

@section('titulo', 'SÓFOLHA Soluções Corporativas | Pesquisa XML')

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
                        PESQUISA XML <span class="font-barlow font-normal text-3xl">| SÓFOLHA Soluções Corporativas</span>
                    </h2>
                    <p class="pt-3 text-lg text-AzulPrincipal">
                        O sistema de <span class="font-bold">Pesquisa XML</span>, verifica e faz uma busca no diretorio de uma pasta em arquivos do tipo XML que sejam pertencentes a NF-e (Nota Fiscal Eletrônica), CF-e (Cupom Fiscal Eletrônico) - SAT e CT-e (Conhecimento de Transporte Eletrônico) e que possuem o texto pesquisado dentro do arquivo XML.
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
                    Versão: <span class="font-light">01/2021</span>
                </p>
                <p class="pt-3 font-normal text-right">
                    Edição: <span class="font-light">20/01/21</span>
                </p>
            </div>
        </div>
    </section>

@endsection
