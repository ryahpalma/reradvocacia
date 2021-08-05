@extends('layouts.template')

@section('content')

<section class="hero-contact is-small is-danger block">
    <div class="hero-body">
        <div class="container is-widescreen has-text-left">
            <h1 class="title is-size-2 is-uppercase is-family-secondary has-text-weight-bold mx-3 my-5">
                {{-- Request URL and replace string --}}
                @php
                    $request = Request::get('interno');
                    echo str_replace("-", " ", $request);
                @endphp
            </h1>
        </div>
    </div>
</section>

{{-- Request URL and show content --}}
@switch(Request::get('interno'))
    @case('tribunais-superiores')
        <section class="hero is-small is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.stf.jus.br/portal/cms/listarNoticiaUltima.asp" target="_blank"
                                    rel="noopener noreferrer" class="has-text-white is-size-6">
                                    STF – Supremo Tribunal Federal
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.stj.jus.br/portal/site/STJ" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    STJ – Superior Tribunal de Justiça
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.tst.jus.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    TST – Tribunal Superior do Trabalho
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.tse.jus.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    TSE – Tribunal Superior Eleitoral
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.stm.jus.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    STM – Superior Tribunal Militar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @case('tribunais-regionais-do-trabalho')
        <section class="hero is-small is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.trt1.jus.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    TRT1 – Tribunal Regional do Trabalho da 1ª Região (Rio de Janeiro)
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.trt2.jus.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    TRT2 – Tribunal Regional do Trabalho da 2ª Região (São Paulo)
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.trt3.jus.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    TRT3 – Tribunal Regional do Trabalho da 3ª Região (Minas Gerais)
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.trt4.jus.br/portal/portal/trt4/home" target="_blank"
                                    rel="noopener noreferrer" class="has-text-white is-size-6">
                                    TRT4 – Tribunal Regional do Trabalho da 4ª Região (Rio Grande do Sul)
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.trt15.jus.br" target="_blank"
                                    rel="noopener noreferrer" class="has-text-white is-size-6">
                                    TRT15 – Tribunal Regional do Trabalho da 15ª Região (Campinas)
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @case('tribunais-regionais-eleitorais')
        <section class="hero is-small is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.tre-sp.jus.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    TRE-SP – Tribunal Regional Eleitoral de São Paulo
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.tre-rj.gov.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    TRE-RJ – Tribunal Regional Eleitoral do Rio de Janeiro
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.tre-pr.jus.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    TRE-PR – Tribunal Regional Eleitoral do Paraná
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.tre-df.jus.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    TRE-DF – Tribunal Regional Eleitoral do Distrito Federal
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.tre-go.jus.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    TRE-GO – Tribunal Regional Eleitoral de Goiás
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @case('ordem-dos-advogados')
        <section class="hero is-small is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.oab.org.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    Conselho Federal da OAB
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://eticaedisciplina.oab.org.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    Ética e Disciplina
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.prerrogativas.org.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    Canal Prerrogativas
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.oabsp.org.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    OAB/SP – Ordem dos Advogados do Brasil Seccional de São Paulo
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.oabrj.org.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    OAB/RJ – Ordem dos Advogados do Brasil Seccional do Rio de Janeiro
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.oabdf.org.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    OAB/DF – Ordem dos Advogados do Brasil Seccional do Distrito Federal
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @case('legislacao')
        <section class="hero is-small is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www12.senado.leg.br/hpsenado" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    Senado Federal
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www2.camara.leg.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    Câmara dos Deputados
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @case('tribunais-de-justica')
        <section class="hero is-small is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.tjsp.jus.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    TJSP – Tribunal de Justiça de São Paulo
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.tjrj.jus.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    TJRJ – Tribunal de Justiça do Rio de Janeiro
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.tjrs.jus.br/site/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    TJRS – Tribunal de Justiça do Rio Grande do Sul
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.tjdft.jus.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    TJDFT – Tribunal de Justiça do Distrito Federal e dos Territórios
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @case('tribuinais-regionais-federais')
        <section class="hero is-small is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://portal.trf1.jus.br/portaltrf1/pagina-inicial.htm" target="_blank"
                                    rel="noopener noreferrer" class="has-text-white is-size-6">
                                    TRF1 – Tribunal Regional Federal da 1ª
                                    Região (AC/AM/AP/BA/DF/GO/MA/MG/MT/PA/PI/RO/RR/TO)
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www10.trf2.jus.br/portal/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    TRF2 – Tribunal Regional Federal da 2ª Região (RJ/ES)
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.trf3.jus.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    TRF3 – Tribunal Regional Federal da 3ª Região (SP/MS)
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www2.trf4.jus.br/trf4/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    TRF4 – Tribunal Regional Federal da 4ª Região (RS/SC/PR)
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @case('tribunais-administrativos')
        <section class="hero is-small is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://carf.economia.gov.br" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    Conselho Administrativo de Recursos Fiscais – CARF
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.fazenda.sp.gov.br/tit/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    TIT – Tribunal de Impostos e Taxas
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @case('orgaos-publicos')
        <section class="hero is-small is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.receita.fazenda.gov.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    Receita Federal do Brasil
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.fazenda.sp.gov.br" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    Secretaria da Fazenda do Estado de São Paulo
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.cetesb.sp.gov.br" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    CETESB – Cia da Tecnologia de Saneamento Ambiental
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.ibama.gov.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    IBAMA – Instituto Brasileiro do Meio Ambiente
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.inpi.gov.br" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    INPI – Instituto Nacional da Propriedade Industrial
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.jucesp.fazenda.sp.gov.br" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    JUCESP – Junta Comercial do Estado de São Paulo
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.anatel.gov.br" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    ANATEL – Agência Nacional de Telecomunicações
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @case('sites-juridicos')
        <section class="hero is-small is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.ibet.com.br" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    IBET – Instituto Brasileiro de Estudos Tributários
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.ibdt.com.br" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    IBDT – Instituto Brasileiro de Direito Tributário
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.ibpt.com.br" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    IBPT- Instituto Brasileiro de Planejamento Tributário
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.idec.org.br/" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    Idec – Instituto Brasileiro de Defesa do Consumidor
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://jus.com.br" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    Jus Navigandi
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.detran.sp.gov.br" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    DETRAN/SP – Departamento de Trânsito de São Paulo
                                </a>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-dark">
                                <a href="https://www.centraljuridica.com" target="_blank" rel="noopener noreferrer"
                                    class="has-text-white is-size-6">
                                    Central Jurídica
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @default
@endswitch

@endsection
