<?php
namespace App\Controllers;

use Core\Controller;
use App\Models\Noticia;

class SummaryController extends Controller {
    // renderizar todas as notícias
    public function index(){
       $noticiaModel = new Noticia();
       $newpaper = $noticiaModel->getAll();
        
       $this->view('newpaper',['newpaper' => $newpaper]);
    }
    // renderizar cada notícia
    public function paper($titulo){
        $noticiaModel = new Noticia();
        $paper = $noticiaModel->getByTituloUrl($titulo);

        $this->view('paper', ['paper' => $paper]);
    }
}

//OBS: newpaper se refere a TODAS as notícias, e paper se refere a CADA notícia 