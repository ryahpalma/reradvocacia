@extends('layouts.template')

@section('content')
<section class="hero is-small is-danger">
    <div class="hero-body is-paddingless-bottom">
        <div class="container">
            <div class="columns is-touch">
                <div class="column is-6">
                    <div
                        class="box fly-about is-family-secondary has-text-left px-5 py-6 has-background-black is-borderless">
                        <h1 class="title is-2 is-size-4-touch has-text-white">
                            Somos profissionais no que fazemos.
                        </h1>
                        <p class="is-size-5 is-size-6-touch has-text-white block">
                            Desenvolvemos diversas estratégias para representar nossos clientes, isso graças a nossa
                            constante atualização em questão das jurisprudências e leis que fazem parte do ordenamento
                            jurídico.
                        </p>
                        <a href="/contato" class="button is-size-6-touch is-white has-text-weight-bold">
                            Entrar em contato
                        </a>
                    </div>
                </div>
                <div class="column block is-6 is-paddingless-bottom mt-5" style="margin-bottom: 0.2rem;">
                    <img src="{{ asset('img/content/team.webp')}}" alt="Advogados" width="450px">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="hero is-medium is-white">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="is-centered is-max-width-lg is-family-secondary">
                <h1 class="title is-size-3 has-text-dark">
                    R & R Advocacia e Assessoria
                </h1>
                <h2 class="subtitle is-size-6 has-text-dark">
                    Fundada com o intuito de resolver e auxiliar questões jurídicas de forma prática e rápida. Nós 
                    acreditamos que com as métodos corretos é possível solucionar qualquer caso com sucesso. Estamos 
                    no mercado há mais de 20 anos, nossa experiência é vasta e somos referência na área de Direito 
                    Criminal e Direito Previdenciário.
                </h2>
            </div>
        </div>
    </div>
</section>
@endsection