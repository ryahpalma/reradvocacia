@extends('layouts.template')

@section('content')

@php
    $request = Request::get('interno');
    $urlTitle = strtoupper(str_replace("-", " ", $request));
@endphp

<section class="hero-contact is-small is-danger block">
    <div class="hero-body">
        <div class="container is-widescreen has-text-left">
            <h1 class="title is-size-2 is-family-secondary has-text-weight-bold mx-3 my-5">
                <?=$urlTitle?></h1>
        </div>
    </div>
</section>

{{-- Request URL and show content --}}
@switch(Request::get('interno'))
    @case('tribunais-superiores')
        <section class="hero is-medium is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <a href="http://portal.stf.jus.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    STF – Supremo Tribunal Federal
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.stj.jus.br/portal/site/STJ" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    STJ – Superior Tribunal de Justiça
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.tst.jus.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TST – Tribunal Superior do Trabalho
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.tse.jus.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TSE – Tribunal Superior Eleitoral
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.stm.jus.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    STM – Superior Tribunal Militar
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @case('tribunais-regionais-do-trabalho')
        <section class="hero is-medium is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <a href="https://www.trt1.jus.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TRT1 – Tribunal Regional do Trabalho da 1ª Região (Rio de Janeiro)
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.trt2.jus.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TRT2 – Tribunal Regional do Trabalho da 2ª Região (São Paulo)
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.trt3.jus.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TRT3 – Tribunal Regional do Trabalho da 3ª Região (Minas Gerais)
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.trt4.jus.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TRT4 – Tribunal Regional do Trabalho da 4ª Região (Rio Grande do Sul)
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.trt15.jus.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TRT15 – Tribunal Regional do Trabalho da 15ª Região (Campinas)
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @case('tribunais-regionais-eleitorais')
        <section class="hero is-medium is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <a href="https://www.tre-sp.jus.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TRE-SP – Tribunal Regional Eleitoral de São Paulo
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.tre-rj.gov.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TRE-RJ – Tribunal Regional Eleitoral do Rio de Janeiro 
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.tre-pr.jus.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TRE-PR – Tribunal Regional Eleitoral do Paraná
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.tre-df.jus.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TRE-DF – Tribunal Regional Eleitoral do Distrito Federal
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.tre-go.jus.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TRE-GO – Tribunal Regional Eleitoral de Goiás
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @case('ordem-dos-advogados')
        <section class="hero is-medium is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <a href="https://www.oab.org.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    Conselho Federal da OAB
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://eticaedisciplina.oab.org.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    Ética e Disciplina
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.prerrogativas.org.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    Canal Prerrogativas
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.oabsp.org.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    OAB/SP – Ordem dos Advogados do Brasil Seccional de São Paulo
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.oabrj.org.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    OAB/RJ – Ordem dos Advogados do Brasil Seccional do Rio de Janeiro
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.oabdf.org.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    OAB/DF – Ordem dos Advogados do Brasil Seccional do Distrito Federal
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @case('legislacao')
        <section class="hero is-medium is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <a href="https://www12.senado.leg.br/hpsenado" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    Senado Federal
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www2.camara.leg.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    Câmara dos Deputados
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @case('tribunais-de-justica')
        <section class="hero is-medium is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <a href="https://www.tjsp.jus.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TJSP – Tribunal de Justiça de São Paulo
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.tjrj.jus.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TJRJ – Tribunal de Justiça do Rio de Janeiro
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.tjrs.jus.br/site" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TJRS – Tribunal de Justiça do Rio Grande do Sul
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.tjdft.jus.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TJDFT – Tribunal de Justiça do Distrito Federal e dos Territórios
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @case('tribuinais-regionais-federais')
        <section class="hero is-medium is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <a href="https://portal.trf1.jus.br/portaltrf1/pagina-inicial.htm" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TRF1 – Tribunal Regional Federal da 1ª
                                    Região (AC/AM/AP/BA/DF/GO/MA/MG/MT/PA/PI/RO/RR/TO)
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www10.trf2.jus.br/portal" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TRF2 – Tribunal Regional Federal da 2ª Região (RJ/ES)
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.trf3.jus.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TRF3 – Tribunal Regional Federal da 3ª Região (SP/MS)
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www2.trf4.jus.br/trf4" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TRF4 – Tribunal Regional Federal da 4ª Região (RS/SC/PR)
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @case('tribunais-administrativos')
        <section class="hero is-medium is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <a href="https://carf.economia.gov.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    Conselho Administrativo de Recursos Fiscais – CARF
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.fazenda.sp.gov.br/tit" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    TIT – Tribunal de Impostos e Taxas
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @case('orgaos-publicos')
        <section class="hero is-medium is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <a href="https://www.receita.fazenda.gov.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    Receita Federal do Brasil
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.fazenda.sp.gov.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    Secretaria da Fazenda do Estado de São Paulo
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.cetesb.sp.gov.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    CETESB – Cia da Tecnologia de Saneamento Ambiental
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.ibama.gov.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    IBAMA – Instituto Brasileiro do Meio Ambiente
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.inpi.gov.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    INPI – Instituto Nacional da Propriedade Industrial
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.jucesp.fazenda.sp.gov.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    JUCESP – Junta Comercial do Estado de São Paulo
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.anatel.gov.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    ANATEL – Agência Nacional de Telecomunicações
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @case('sites-juridicos')
        <section class="hero is-medium is-white">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-family-secondary is-multiline">
                        <div class="column is-6">
                            <a href="https://www.ibet.com.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    IBET – Instituto Brasileiro de Estudos Tributários
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.ibdt.com.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    IBDT – Instituto Brasileiro de Direito Tributário
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.ibpt.com.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    IBPT- Instituto Brasileiro de Planejamento Tributário
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.idec.org.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    Idec – Instituto Brasileiro de Defesa do Consumidor
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://jus.com.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    Jus Navigandi
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.detran.sp.gov.br" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    DETRAN/SP – Departamento de Trânsito de São Paulo
                                </div>
                            </a>
                        </div>
                        <div class="column is-6">
                            <a href="https://www.centraljuridica.com" target="_blank" 
                            rel="noopener noreferrer" class="has-text-white is-size-6">
                                <div class="box has-background-dark has-text-white">
                                    Central Jurídica
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @break
    @default
@endswitch

@endsection
