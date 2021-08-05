@extends('layouts.template')

@section('content')

<section class="hero-contact is-small is-danger block">
    <div class="hero-body">
        <div class="container is-widescreen has-text-left">
            <h1 class="title is-size-2 is-uppercase is-family-secondary has-text-weight-bold mx-3 my-5">
                Fale Conosco
            </h1>
        </div>
    </div>
</section>

<div class="section">
    <div class="container">
        <div class="columns is-family-secondary">
            <div class="column is-6">
                <div class="has-background-danger">
                    <div class="columns py-5 px-5 is-family-primary is-multiline">
                        <div class="column is-12">
                            <h1 class="title has-text-white is-size-5-mobile">DR. BENEDITO N. RODRIGUES</h1>
                            <div class="subtitle has-text-white">
                                <p class="is-size-6-mobile"> 
                                    <span class="icon is-medium">
                                        <i class="fas fa-md fa-phone-alt"></i>
                                    </span>
                                    (12) 99717-7239
                                </p>
                                <p class="is-size-6-mobile"> 
                                    <span class="icon is-medium">
                                        <i class="fas fa-md fa-envelope"></i>
                                    </span>
                                    Rodrigues@reradvocacia.com
                                </p>
                            </div>
                        </div>
                        <div class="column is-12 mb-6">
                            <h1 class="title has-text-white is-size-5-mobile">DRA. CLAUDIA AMABLE F. RODRIGUES</h1>
                            <div class="subtitle has-text-white">
                                <p class="is-size-6-mobile">
                                    <span class="icon is-medium">
                                        <i class="fas fa-md fa-phone-alt"></i>
                                    </span>
                                    (12) 99769-6941
                                </p>
                                <p class="is-size-6-mobile">
                                    <span class="icon is-medium">
                                        <i class="fas fa-md fa-envelope"></i>
                                    </span>
                                    Claudiaamable@reradvocacia.com
                                </p>
                            </div>
                        </div>
                        <div class="column is-12">
                            <h1 class="title is-size-5 has-text-white has-text-centered is-size-5-mobile">
                                PRAÇA JOSÉ REBELLO DA CUNHA,
                                48,
                                SALA 06, SUMARÉ
                                CARAGUATATUBA/SP<br>
                                <span>
                                    <span class="icon is-medium">
                                        <i class="fas fa-md fa-envelope"></i>
                                    </span>
                                    contato@reradvocacia.com
                                </span>
                                <span>
                                    <span class="icon is-medium">
                                        <i class="fas fa-md fa-phone-alt"></i>
                                    </span>
                                    3883-2803
                                </span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-5">
                <form method="post" action="{{ url('api/sendemail') }}">
                    @csrf
                    <div class="field">
                        <label class="label is-size-5">Seu Nome</label>
                        <div class="control">
                            <input class="input" type="text" name="name" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label is-size-5">Seu Email</label>
                        <div class="control">
                            <input class="input" type="email" name="email" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label is-size-5">Sua Mensagem</label>
                        <div class="control">
                            <textarea class="textarea has-fixed-size" type="text" name="message" required></textarea>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            @if($message = Session::get('success'))
                                <a href="/contato" class="button is-size-5 is-size-6-mobile is-success is-fullwidth">
                                    {{ $message }}
                                </a>
                            @else
                                <button type="submit" name="submit"
                                    class="button is-size-5 is-size-6-mobile is-danger is-fullwidth">Enviar
                                    Mensagem
                                </button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container is-fullhd has-text-centered">
        <div class="columns box-border px-3 py-3">
            <div class="column">
                <figure class="mb-3">
                    <img src="{{ asset('img/icons/gavel.svg') }}" alt="Eficientes" width="60px">
                </figure>
                <h1 class="title is-size-5">Eficientes</h1>
                <h2 class="subtitle is-size-6 has-text-dark">Possuímos um serviço simpático e cortês.</h2>
            </div>

            <span class="is-divider-vertical"></span>

            <div class="column">
                <figure class="mb-3">
                    <img src="{{ asset('img/icons/diamond.svg') }}" alt="Profissionais"
                        width="60px">
                </figure>
                <h1 class="title is-size-5">Profissionais</h1>
                <h2 class="subtitle is-size-6 has-text-dark">Sempre estamos superando as expectativas.</h2>
            </div>

            <span class="is-divider-vertical"></span>

            <div class="column">
                <figure class="mb-3">
                    <img src="{{ asset('img/icons/attention.svg') }}" alt="Comunicativos"
                        width="60px">
                </figure>
                <h1 class="title is-size-5">Comunicativos</h1>
                <h2 class="subtitle is-size-6 has-text-dark">Sempre atentos e descritivos a cada situação.</h2>
            </div>

            <span class="is-divider-vertical"></span>

            <div class="column">
                <figure class="mb-3">
                    <img src="{{ asset('img/icons/balance-scale-solid.svg') }}" alt="Honestos"
                        width="60px">
                </figure>
                <h1 class="title is-size-5">Honestos</h1>
                <h2 class="subtitle is-size-6 has-text-dark">Temos ética e conduta empresarial.</h2>
            </div>
        </div>
    </div>
</div>


@endsection
