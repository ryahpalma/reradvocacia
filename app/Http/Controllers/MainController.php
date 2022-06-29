<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Artesaos\SEOTools\Facades\SEOTools;
use willvincent\Feeds\Facades\FeedsFacade;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEOTools::setTitle('Soluções Jurídicas em Caraguatatuba');
        SEOTools::setDescription('Escritório de Advocacia na Rua José Rebello da Cunha, Caraguatatuba. Especialistas em Direto Previdenciario. Ambiental, Criminal, Cível, Trabalhista, Tributário.');
        SEOTools::opengraph()->setUrl('https://www.reradvocacia.com/');
        SEOTools::setCanonical('https://www.reradvocacia.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        $feed = FeedsFacade::make('http://feeds.feedburner.com/Stj-InformativosDeJurisprudencia');
        $data = array(
            'title'     => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items'     => $feed->get_items(),
        );

        $profiles = array(
            'names'      => ["Dr. Benedito N. Rodrigues", "Dra. Claudia Amable F. Rodrigues", "Dr. Marcos Lopes Couto", "Dra. Luci Machado Pinto"],
            'activitys'  => ["Direito Previdenciário", "Direito Criminal", "Direito Ambiental", "Direito do Consumidor"],
            'pictures'    => ["benedito", "claudia", "marcos", "luci"],
            'description'    => ["É especialista em Direito Previdenciário
             e possui amplo conhecimento na área.
            Já solucionou diversos casos na região do Litoral
             e assim ganhou notoriedade no mercado da Região.
             Suas técnicas e estratégias garantem que seu serviço
              seja volátil e de ótima qualidade", "É especialista em 
            Tribunal do Júri tendo participados de vários juris
            em nossa Região do Litoral e Vale do Paraíba. Nosso
             escritório, devido à tamanha importância do instituto
              do Tribunal do Júri em nosso ordenamento jurídico,
               direciona uma atenção diferenciada para esse segmento
                da justiça que cuida da apreciação e julgamento das
                 questões mais delicadas e penosas do meio jurídico-social.", "É especialista em Direito Ambiental
                 e possui amplo conhecimento na área.
                Já solucionou diversos casos na região do Litoral
                 e assim ganhou notoriedade no mercado da Região.
                 Suas técnicas e estratégias garantem que seu serviço
                  seja volátil e de ótima qualidade", "É especialista em Direito do Consumidor
                  e possui amplo conhecimento na área.
                 Já solucionou diversos casos na região do Litoral
                  e assim ganhou notoriedade no mercado da Região.
                  Suas técnicas e estratégias garantem que seu serviço
                   seja volátil e de ótima qualidade"],
        );

        return View::make('index')->with($data)->with($profiles);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function activity()
    {
        SEOTools::setTitle('Áreas de Atuação');
        SEOTools::setDescription('Escritório de Advocacia na Rua José Rebello da Cunha, Caraguatatuba. Especialistas em Direto Previdenciario. Ambiental, Criminal, Cível, Trabalhista, Tributário.');
        SEOTools::opengraph()->setUrl('https://www.reradvocacia.com/areas-de-atuacao');
        SEOTools::setCanonical('https://www.reradvocacia.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('activity');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        SEOTools::setTitle('Contato');
        SEOTools::setDescription('Escritório de Advocacia na Rua José Rebello da Cunha, Caraguatatuba. Especialistas em Direto Previdenciario. Ambiental, Criminal, Cível, Trabalhista, Tributário.');
        SEOTools::opengraph()->setUrl('https://www.reradvocacia.com/contato');
        SEOTools::setCanonical('https://www.reradvocacia.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('contact');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        SEOTools::setTitle('Privacidade');
        SEOTools::setDescription('Escritório de Advocacia na Rua José Rebello da Cunha, Caraguatatuba. Especialistas em Direto Previdenciario. Ambiental, Criminal, Cível, Trabalhista, Tributário.');
        SEOTools::opengraph()->setUrl('https://www.reradvocacia.com/privacidade');
        SEOTools::setCanonical('https://www.reradvocacia.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('privacy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        SEOTools::setTitle('Sobre');
        SEOTools::setDescription('Escritório de Advocacia na Rua José Rebello da Cunha, Caraguatatuba. Especialistas em Direto Previdenciario. Ambiental, Criminal, Cível, Trabalhista, Tributário.');
        SEOTools::opengraph()->setUrl('https://www.reradvocacia.com/sobre');
        SEOTools::setCanonical('https://www.reradvocacia.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('about');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function link(Request $request)
    {
        SEOTools::setTitle('Links Úteis');
        SEOTools::setDescription('Escritório de Advocacia na Rua José Rebello da Cunha, Caraguatatuba. Especialistas em Direto Previdenciario. Ambiental, Criminal, Cível, Trabalhista, Tributário.');
        SEOTools::opengraph()->setUrl('https://www.reradvocacia.com/links');
        SEOTools::setCanonical('https://www.reradvocacia.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('link');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function app()
    {
        SEOTools::setTitle('Aplicativos');
        SEOTools::setDescription('Escritório de Advocacia na Rua José Rebello da Cunha, Caraguatatuba. Especialistas em Direto Previdenciario. Ambiental, Criminal, Cível, Trabalhista, Tributário.');
        SEOTools::opengraph()->setUrl('https://www.reradvocacia.com/app');
        SEOTools::setCanonical('https://www.reradvocacia.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://www.reradvocacia.com/img/engine/rradvocacia-open-graph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('app');
    }
}
