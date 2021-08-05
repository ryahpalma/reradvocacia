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
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
    {!! SEO::generate(true) !!}
</head>

<body>
    <section class="hero is-dark is-fullheight">
        <div class="hero-body">
            <div class="container is-family-secondary has-text-centered">
                <div class="title is-size-2">Aplicativos</div>
                <div class="columns is-centered">
                    <div class="column">
                        <a href="https://accounts.zoho.com/signin?servicename=VirtualOffice&signupurl=https://www.zoho.com/mail/zohomail-pricing.html&serviceurl=https://mail.zoho.com" class="box" target="_blank" rel="noopener noreferrer">
                            <figure>
                                <img src="{{ asset('img/engine/zoho-mail.svg') }}" width="230px"
                                    alt="Zoho Mail">
                            </figure>
                            <div class="title has-text-black is-size-5 is-size-4-mobile">Zoho Mail</div>
                        </a>
                    </div>
                    <div class="column">
                        <a href="https://prev.app/login-escritorio" class="box" target="_blank" rel="noopener noreferrer">
                            <figure>
                                <img src="{{ asset('img/engine/previdenciarista-app.svg') }}"
                                    width="230px" alt="Previdenciarista App">
                            </figure>
                            <div class="title has-text-black is-size-5 is-size-4-mobile">Previdenciarista</div>
                        </a>
                    </div>
                    <div class="column">
                        <a href="https://analytics.google.com/" class="box" target="_blank" rel="noopener noreferrer">
                            <figure>
                                <img src="{{ asset('img/engine/google-analytics.svg') }}"
                                    width="230px" alt="Previdenciarista App">
                            </figure>
                            <div class="title has-text-black is-size-5 is-size-4-mobile">Google Analytics</div>
                        </a>
                    </div>
                    <div class="column">
                        <a href="https://business.google.com/u/1/dashboard/l/09693485030422617691" class="box" target="_blank" rel="noopener noreferrer">
                            <figure>
                                <img src="{{ asset('img/engine/google-business.svg') }}"
                                    width="230px" alt="Previdenciarista App">
                            </figure>
                            <div class="title has-text-black is-size-5 is-size-4-mobile">Google Business</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
