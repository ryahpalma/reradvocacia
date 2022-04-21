<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#e13f3f">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="theme-color" content="#ffffff">
    @stack('custom-css')
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
    {!! SEO::generate(true) !!}
</head>

<body class="main">
    <nav class="navbar is-danger is-family-primary has-text-weight-regular is-spaced" role="navigation"
        aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item logo" href="/">
                <img src="{{ asset('img/engine/logo.svg') }}" width="100" height="28" alt="Logotipo">
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                data-target="toggleMenu" onclick="toggleMenu()">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="toggleMenu" class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item" href="/">
                    Início
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Áreas de Atuação
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/atividades/areas-de-atuacao#previdencia">
                            Previdência
                        </a>
                        <a class="navbar-item" href="/atividades/areas-de-atuacao#trabalhista">
                            Trabalhista
                        </a>
                        <a class="navbar-item" href="/atividades/areas-de-atuacao#ambiental">
                            Ambiental
                        </a>
                        <a class="navbar-item" href="/atividades/areas-de-atuacao#civel">
                            Cível
                        </a>
                        <a class="navbar-item" href="/atividades/areas-de-atuacao#criminal">
                            Criminal
                        </a>
                        <a class="navbar-item" href="/atividades/areas-de-atuacao#consumidor">
                            Consumidor
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="/atividades/areas-de-atuacao">
                            Outros
                        </a>
                    </div>
                </div>
                <a class="navbar-item" href="/contato">
                    Contato
                </a>

            </div>
        </div>
    </nav>

    <div class="page-content">
        @yield('content')
    </div>

    <footer
        class="FooterComponent__container has-background-light is-widescreen is-family-primary has-text-weight-regular has-text-dark px-6 py-5">
        <div class="brand left is-hidden-mobile">
            <span>
                <img class="logo" src="{{ asset('img/engine/logo.svg') }}" alt="Logo">
            </span>
        </div>

        <div class="developer right">
            <a href="https://github.com/ryahpalma" target="_blank" rel="noopener noreferrer">
                <img class="logo" src="{{ asset('img/engine/developer-logo.svg') }}" style="filter: invert(30%)" alt="Desenvolvedor">
            </a>
        </div>

        <div class="blank left">
        </div>

        <div class="social right">
            <a href="tel:1238832803" rel="noopener noreferrer">
                <span class="icon is-medium"><i class="fas fa-lg fa-phone-alt">
                    </i>
                </span>
            </a>
            <a href="https://bnorivalrodrigues.jusbrasil.com.br" target="_blank" rel="noopener noreferrer">
                <span class="icon is-medium"><i class="fas fa-lg fa-gavel">
                    </i>
                </span>
            </a>
            <a href="mailto:contato@reradvocacia.com" target="_blank" rel="noopener noreferrer">
                <span class="icon is-medium">
                    <i class="fas fa-lg fa-envelope"></i>
                </span>
            </a>
        </div>

        <div class="copyright left">
            <span>
                &copy; R & R Advocacia e Assessoria, {{ date('Y') }}
                <br>CEP: 11661-050
                <br>Praça José Rebello da Cunha, 48, Sala 06, Sumaré, Caraguatatuba/SP
            </span>
        </div>

        <div class="links right">
            <a href="/privacidade">Privacidade</a>
            <a href="/contato">Contato</a>
            <a href="/sobre">Sobre</a>
        </div>
    </footer>
    <script src="{!! mix('js/app.js') !!}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179544915-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-179544915-1"');

        function toggleMenu() {
            var element = document.getElementById("toggleMenu");
            element.classList.toggle("is-active");
        }

    </script>
</body>

</html>
