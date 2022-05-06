<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;600&family=Open+Sans:wght@300;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css"
        integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="font-open font-light">

    @include('layouts.header')

    <main>
        @yield('conteudo')
    </main>

    @include('layouts.footer')

    {{-- Swiper JS --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    {{-- PRECISA DO JQUERY PARA FUNCIONAR O SCRIPT DE GALERIA E POR ORDEM ESSE DEVE EXECUTAR PRIMEIRO --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- SCRIPT PARA FUNCIONAR A GALERIA --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"
        integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    {{-- SCRIPTS --}}
    <script>
        // RESPONSAVEL PELO MENU RESPONSIVEL
        const button = document.querySelector('#menu-button');
        const menu = document.querySelector('#menu');

        button.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // FECHA A NOTIFICAÇÃO DO ENVIO DE CONTATO
        var alert_del = document.querySelectorAll('.alert-del');
        alert_del.forEach((x) =>
            x.addEventListener('click', function() {
                x.parentElement.classList.add('hidden');
            })
        );

        // swiper js controlador
        var swiper = new Swiper('.carousel', {
            spaceBetween: 0,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 8000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        //lightbox js controlador
        lightbox.option({
            wrapAround: true,
            showImageNumberLabel: false
        })

        // Inicio mySuite Chat Script
        // window.$mysuite || function(t, e) {
        //     var c = $mysuite = function(t) {
        //             c._.push(t)
        //         },
        //         s = c.s = t.createElement(e),
        //         a = t.getElementsByTagName(e)[0];
        //     c.set = function(t) {
        //             c.set._.push(t)
        //         }, c._ = [], c.set._ = [], s.async = !0, s.setAttribute("charset", "utf-8"), s.src =
        //         "http://sfitecnologica.mysuite1.com.br/client/cf/?h=26678af789faab9efa9d0c3da378bac9", c.t = +new Date,
        //         s.type = "text/javascript", a.parentNode.insertBefore(s, a)
        // }(document, "script");
        // Fim mySuite Chat Script
    </script>
</body>

</html>
