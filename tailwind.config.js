module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                barlow: "'Barlow', 'sans-serif'",
                open: "'Open Sans', 'sans-serif'"
            },
            colors: {
                AzulPrincipal: '#104778',
                AzulEscuro: '#012840',
                AzulClaro: '#0f9ebc',
                VerdeAguaEscuro: '#0367a6',
                CinzaClaro: '#c9d6e0',
                CinzaBranco: '#f2f2f2',
                VermelhoEscuro: '#c33838',
                Bege: '#f1ece4',
                BegeEscuro: '#d7cfc2',
                RoxoEscuro: '#341d31'
            },
            backgroundImage: {
                'carousel-1': "url('/img/carousel/destaque-1.png')",
                'carousel-mobile-1': "url('/img/carousel/destaque-mobile.png')",
                'carousel-tablet-1': "url('/img/carousel/destaque-tablet.png')",

                'carousel-2': "url('/img/carousel/trabalhe-conosco.png')",
                'carousel-mobile-2': "url('/img/carousel/trabalhe-conosco-mobile.png')",
                'carousel-tablet-2': "url('/img/carousel/trabalhe-conosco-tablet.png')",

                'carousel-3': "url('/img/carousel/sfautomatus.png')",
                'carousel-tablet-3': "url('/img/carousel/sfautomatus-tablet.png')",

                'carousel-4': "url('/img/carousel/integracao.png')",
                'carousel-mobile-4': "url('/img/carousel/integracao-mobile.png')",
                'carousel-tablet-4': "url('/img/carousel/integracao-tablet.png')",

                'carousel-5': "url('/img/carousel/integracao-sienge.png')",
                'carousel-mobile-5': "url('/img/carousel/integracao-sienge-mobile.png')",
                'carousel-tablet-5': "url('/img/carousel/integracao-sienge-tablet.png')",

                'gestao-publica': "url('/img/gestao-publica.png')",
                'barra-lateral-bege': "url('/img/barra-lateral-bege.png')"
            },
            height: {
                '720': '45rem',
                '600': '37.5rem'
            },
            maxWidth: {
                '60': '15rem'
            },
            margin: {
                '50px': '3.125rem'
            },
            borderWidth: {
                '18': '18px'
            },
            listStyleType: {
                square: 'square'
            }
        },
    },
    plugins: [],
}
