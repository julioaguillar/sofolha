<footer class="w-full">
    <section class="w-full mx-auto bg-CinzaClaro">

        <div class="flex flex-col md:flex-row justify-center container mx-auto py-14">
            <div class="px-6 py-4">
                <h3 class="font-semibold">SOLUÇÕES</h3>
                <ul>
                    <li class="font-normal text-sm">
                        <a href="{{ url('/solucoes/departamento-pessoal') }}">Departamento Pessoal</a>
                    </li>
                    <li class="font-normal text-sm">
                        <a href="{{ url('/solucoes/escrita-fiscal-contabilidade') }}">Escrita Fiscal e Contabilidade</a>
                    </li>
                    <li class="font-normal text-sm">
                        <a href="https://www.sfautomatus.sofolha.com.br/" target="_blank">Automação Comercial</a>
                    </li>
                    <li class="font-normal text-sm">
                        <a href="{{ url('/solucoes/sf-converter') }}">SFConverter</a>
                    </li>
                    <li class="font-normal text-sm">
                        <a href="{{ url('/solucoes/advocacia') }}">Advocacia</a>
                    </li>
                    <li class="font-normal text-sm">
                        <a href="{{ url('/solucoes/pesquisa-xml') }}">Pesquisa XML</a>
                    </li>
                </ul>
            </div>
            <div class="px-6 py-4 w-44">
                <h3 class="font-semibold">SOBRE</h3>
                <ul>
                    <li class="font-normal text-sm">
                        <a href="{{ route('site.sobre') }}">Contato</a>
                    </li>
                    <li class="font-normal text-sm">
                        <a href="{{ route('site.sobre') }}">Quem Somos</a>
                    </li>
                    <li class="font-normal text-sm">
                        <a href="#">Trabalhe Conosco</a>
                    </li>
                </ul>
            </div>
            <div class="px-6 py-4">
                <h3 class="font-semibold">TELEFONES</h3>
                <ul>
                    <li class="font-normal text-sm">
                        Marília e região <a href="tel:+551421025500">(14)2105-5500</a>
                    </li>
                    <li class="font-normal text-sm">
                        Presidente Prudente e região <a href="tel:+551836009899">(18)3600-9899</a> / <a href="tel:+551836009980">(18)3600-9980</a>
                    </li>
                    <li class="font-normal text-sm">
                        S. José dos Campos e região <a href="tel:+551236009666">(12)3600-9666</a> / <a href="tel:+551236009678">(12)3600-9678</a>
                    </li>
                    <li class="font-normal text-sm">
                        São Paulo e região <a href="tel:+551130101210">(11)3010-1210</a> / <a href="tel:+551130101211">(11)3010-1211</a>
                    </li>
                    <li class="font-normal text-sm">
                        Sorocaba e região <a href="tel:+5535009763">(15)3500-9763</a>
                    </li>
                </ul>
            </div>
            <div class="px-6 py-4 w-72">
                <a href="https://www.youtube.com/channel/UCOzhj_qmLflQWO9VmF2gO0Q" target="_blank" class="group">
                    <h3 class="font-semibold">INSCREVA-SE no nosso canal,</h3>
                    <p class="font-normal text-sm">
                        ative as notificações e acompanhe nossas transmissões
                    </p>
                    <i class="fa-brands fa-youtube fa-3x group-hover:text-red-700"></i>
                </a>
            </div>
        </div>

        <div class="bg-AzulPrincipal py-8 px-4">
            <div class="container mx-auto flex flex-col md:flex-row justify-around md:items-end">
                <div class="flex flex-col md:flex-row justify-start md:items-end">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-44 h-fit" />
                    </a>
                    <div class="text-CinzaClaro py-4 md:py-0 md:px-20">
                        <a href="https://goo.gl/maps/xcT3ekf4vgzseTd36" target="_blank">
                            <i class="fa-solid fa-location-dot fa-2xl pb-6"></i>
                        </a>
                        <p>
                            Rua São Luiz, 238 &bull; Marília SP
                        </p>
                        <p class="text-white">
                            Todos os direitos reservados<span class="text-CinzaClaro"> | Copyright</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
