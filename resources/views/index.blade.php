@extends('layouts.template')

@push('custom-css')
<link rel="stylesheet" href="{{asset('css/flickity.min.css')}}">
@endpush

@section('content')

<section class="hero-index is-medium is-danger">
    <div class="hero-body">
        <div class="container has-text-centered">
            <figure class="mb-6">
                <img src="{{ asset('img/content/logo-presentation.svg')}}" alt="Apresentação" width="530px">
            </figure>
            <h2 class="subtitle is-size-5-desktop is-family-primary has-text-weight-light 
            is-max-width-lg is-centered">
                Nossa ambição fundamental é o sucesso dos nossos clientes, e isso se reflete em tudo o que fazemos. Para 
                alcançar este objetivo nós trabalhamos com diferentes estratégias para solucionar diversos problemas. 
                Acreditamos que o único jeito de realizar um ótimo trabalho é amando o que você faz, e nós amamos o que 
                fazemos.
            </h2>
            <a href="/contato" class="button is-danger is-size-5-desktop is-size-6-mobile
             has-text-weight-medium">
                Entre em contato conosco
            </a>
        </div>
    </div>
</section>
<section class="hero is-medium is-white">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title is-size-2 is-uppercase is-family-secondary has-text-weight-bold mb-6">
                Quem Somos
            </h1>
            <h2 class="subtitle is-family-primary has-text-weight-light is-max-width-lg is-centered">
                Somos profissionais na área do direito, possuímos mais de 20 anos de experiência no ramo. Estamos sempre 
                buscando oferecer aos nossos clientes soluções seguras, práticas e eficientes. O nosso escritório tem sua 
                atuação dedicada a cinco áreas: Direito Previdenciário, Direito do Consumidor, Direito do Trabalho, 
                Direito Criminal, Direito Civel e Direito Ambiental.
            </h2>
            {{-- Request array and show multiple data from Controller --}}
            <div class="columns is-multiline">
                @foreach($names as $index => $name)
                <div class="column is-3 is-half-tablet is-family-secondary">
                    <div class="card is-clickable toggle-modal" data-modal="{{$index}}">
                        <div class="card-image">
                            <figure class="image 4by3">
                                <img src="{{ asset("img/profiles/$pictures[$index].webp") }}" alt="{{$name}}">
                            </figure>
                            <div class="card-content is-overlay" style="top: auto;">
                                <h1 class="title is-size-5 is-size-3-mobile has-text-white">
                                    {{$name}}
                                </h1>
                                <h2 class="subtitle is-size-7 is-size-6-mobile has-text-white">
                                    Especialista em {{$activitys[$index]}}
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Create multiple modals and show content from array --}}
                <div class="modal has-text-left" id="{{$index}}">
                    <div class="modal-background toggle-modal" data-modal="{{$index}}">
                    </div>
                    <div class="modal-card">
                        <header class="modal-card-head">
                            <p class="modal-card-title has-text-weight-bold">
                                Especializações
                            </p>
                            <button class="delete toggle-modal" data-modal="{{$index}}"
                             aria-label="close"></button>
                        </header>
                        <section class="modal-card-body">
                            <div class="columns">
                                <div class="column is-5">
                                    <figure>
                                        <img src="{{ asset("img/profiles/$pictures[$index].webp") }}" 
                                        alt="{{$name}}">
                                    </figure>
                                </div>
                                <div class="column is-7">
                                    <h1 class="title is-family-secondary 
                                    has-text-weight-bold is-size-4">
                                        {{$name}}
                                    </h1>
                                    <h2 class="subtitle is-size-6">{{$description[$index]}}</h2>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container is-fullhd has-text-centered mb-6">
        <div class="columns box-border px-3 py-3">
            <div class="column">
                <figure class="mb-3">
                    <img src="{{ asset('img/icons/gavel.svg')}}" alt="Eficientes" width="60px">
                </figure>
                <h1 class="title is-size-5">Eficientes</h1>
                <h2 class="subtitle is-size-6 has-text-dark">
                    Possuímos um serviço simpático e cortês.
                </h2>
            </div>

            <span class="is-divider-vertical"></span>

            <div class="column">
                <figure class="mb-3">
                    <img src="{{ asset('img/icons/diamond.svg')}}" alt="Profissionais" width="60px">
                </figure>
                <h1 class="title is-size-5">Profissionais</h1>
                <h2 class="subtitle is-size-6 has-text-dark">
                    Sempre estamos superando as expectativas.
                </h2>
            </div>

            <span class="is-divider-vertical"></span>

            <div class="column">
                <figure class="mb-3">
                    <img src="{{ asset('img/icons/attention.svg')}}" alt="Comunicativos" width="60px">
                </figure>
                <h1 class="title is-size-5">Comunicativos</h1>
                <h2 class="subtitle is-size-6 has-text-dark">
                    Sempre atentos e descritivos a cada situação.
                </h2>
            </div>

            <span class="is-divider-vertical"></span>

            <div class="column">
                <figure class="mb-3">
                    <img src="{{ asset('img/icons/balance-scale-solid.svg')}}" alt="Honestos" width="60px">
                </figure>
                <h1 class="title is-size-5">Honestos</h1>
                <h2 class="subtitle is-size-6 has-text-dark">
                    Temos ética e conduta empresarial.
                </h2>
            </div>
        </div>
    </div>
</section>
<section class="hero is-small is-white">
    <div class="hero-body">
        <div class="container">
            <div class="columns my-5">
                <div class="column">
                    <h1 class="title is-size-2 is-uppercase is-family-secondary has-text-weight-bold mb-6">
                        Áreas de Atuação
                    </h1>
                    <h2 class="subtitle is-family-primary has-text-weight-light">
                        Temos profundo conhecimento, experiência e prática do 
                        funcionamento do sistema trabalhista, criminal, previdenciário, 
                        ambiental, cível e dentre outros do setor judiciário.
                    </h2>
                    <div class="columns is-mobile has-text-centered">
                        <div class="column is-4">
                            <h1 class="title is-family-secondary is-size-6 is-size-7-touch">
                                Previdência (INSS)
                            </h1>
                            <figure>
                                <img src="{{ asset('img/activity/previdencia.webp')}}" alt="Direito Previdenciário"
                                    width="80px">
                            </figure>
                        </div>
                        <div class="column is-4">
                            <h1 class="title is-family-secondary is-size-6 is-size-7-touch">Trabalhista</h1>
                            <figure>
                                <img src="{{ asset('img/activity/trabalhista.webp')}}" alt="Direito Trabalhista"
                                    width="55px">
                            </figure>
                        </div>
                        <div class="column is-4">
                            <h1 class="title is-family-secondary is-size-6 is-size-7-touch">Ambiental</h1>
                            <figure>
                                <img src="{{ asset('img/activity/ambiental.webp')}}" alt="Direito Ambiental"
                                    width="75px">
                            </figure>
                        </div>
                    </div>
                    <div class="columns is-mobile has-text-centered">
                        <div class="column is-4">
                            <h1 class="title is-family-secondary is-size-6 is-size-7-touch">Cível</h1>
                            <figure>
                                <img src="{{ asset('img/activity/civel.webp')}}" alt="Direito Cível" width="75px">
                            </figure>
                        </div>
                        <div class="column is-4">
                            <h1 class="title is-family-secondary is-size-6 is-size-7-touch">Criminal</h1>
                            <figure>
                                <img src="{{ asset('img/activity/criminal.webp')}}" alt="Direito Criminal" width="65px">
                            </figure>
                        </div>
                        <div class="column is-4">
                            <h1 class="title is-family-secondary is-size-6 is-size-7-touch">Saúde</h1>
                            <figure>
                                <img src="{{ asset('img/activity/saude.webp')}}" alt="Direito Saúde" width="65px">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="column px-6">
                    <figure class="is-pulled-right">
                        <img src="{{ asset('img/content/office-temis.webp')}}" alt="Escritório Temis" width="390px">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="hero is-small is-white">
    <div class="hero-body">
        <div class="container mb-5">
            <div class="columns box-border px-5 py-5">
                @foreach(array_slice($items, 0, 3) as $item)
                <div class="column">
                    <p><small>{{ $item->get_date('j/m/Y') }}</p></small>
                    <a class="title is-size-5 has-text-black" target="_blank" rel="noopener noreferrer"
                        href="{{ $item->get_permalink() }}">{{ $item->get_title() }}</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="hero is-medium is-danger">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title is-size-2 is-uppercase is-family-secondary has-text-weight-bold mb-6">
                O Escritório
            </h1>
            <h2 class="subtitle is-family-primary has-text-weight-light is-max-width-lg is-centered">
                Nosso escritório é imperado sobre três pilares fundamentais, qualidade, confiança e ética. Procuramos 
                mesclar a dinâmica moderna de um escritório de advocacia capaz de atender a uma série de demandas, com 
                a atenção particular a cada caso, o que individualiza o atendimento do profissional ao cliente, otimizando 
                resultados.
            </h2>
            <div class="carousel">
                <div class="carousel-cell">
                    <img data-flickity-lazyload="{{ asset('img/content/office-1.webp') }}" 
                    class="carousel-cell-image" alt="Escritório 1">
                </div>
                <div class="carousel-cell">
                    <img data-flickity-lazyload="{{ asset('img/content/office-2.webp') }}" 
                    class="carousel-cell-image" alt="Escritório 2">
                </div>
                <div class="carousel-cell">
                    <img data-flickity-lazyload="{{ asset('img/content/office-3.webp') }}" 
                    class="carousel-cell-image" alt="Escritório 3">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="hero is-size-4 is-white">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title is-size-2 is-uppercase is-family-secondary has-text-weight-bold mb-6">
                Links Úteis
            </h1>
            <div class="columns">
                <div class="column">
                    <a href="/links?interno=tribunais-superiores" class="subtitle">
                        Tribunais Superiores
                    </a>
                </div>
                <div class="column">
                    <a href="/links?interno=tribunais-regionais-do-trabalho" class="subtitle">
                        Tribunais Regionais do Trabalho
                    </a>
                </div>
                <div class="column">
                    <a href="/links?interno=tribunais-regionais-eleitorais" class="subtitle">
                        Tribunais Regionais Eleitorais
                    </a>
                </div>
                <div class="column">
                    <a href="/links?interno=ordem-dos-advogados" class="subtitle">
                        Ordem dos Advogados do Brasil
                    </a>
                </div>
                <div class="column">
                    <a href="/links?interno=legislacao" class="subtitle">
                        Legislação
                    </a>
                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <a href="/links?interno=tribunais-de-justica" class="subtitle">
                        Tribunais de Justiça
                    </a>
                </div>
                <div class="column">
                    <a href="/links?interno=tribuinais-regionais-federais" class="subtitle">
                        Tribunais Regionais Federais</a>
                </div>
                <div class="column">
                    <a href="/links?interno=tribunais-administrativos" class="subtitle">
                        Tribunais Administrativos
                    </a>
                </div>
                <div class="column">
                    <a href="/links?interno=orgaos-publicos" class="subtitle">
                        Órgãos Públicos
                    </a>
                </div>
                <div class="column">
                    <a href="/links?interno=sites-juridicos" class="subtitle">
                        Sites Jurídicos
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="hero is-small is-white">
    <figure class="image is-3by1">
        <iframe title="Google Maps" class="has-ratio"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14622.241319460998!2d-45.4034463!3d-23.6200962!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc888b8ab78cdb56a!2sR%20%26%20R%20Advocacia%20E%20Assessoria!5e0!3m2!1sen!2sbr!4v1601916030437!5m2!1sen!2sbr"
            frameborder="0" scrolling="no" aria-hidden="false" tabindex="0"></iframe>
    </figure>
</section>

@endsection