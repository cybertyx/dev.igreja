<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Events;

class SiteController extends Controller
{
    public function admin() {
        return view('admin.home.index');
    }
    
    public function index() {
        $events = Events::all();
        $title = 'Santuário Santo Antonio';
        return view('site.home.index', compact('title', 'events'));
    }
    
    public function f_Ondefica() {
        $title = 'Onde Fica o Santuário de Santo Antonio';
        return view('site.home.index', compact('title'));
    }
    
    public function f_Historia() {
        $title = 'Santuário Santo Antonio';
        return view('site.historia.historia', compact('title'));
    }
    
    public function f_Administracao() {
        $title = 'Setores Administrativos da Igreja';
        return view('site.home.index', compact('title'));
    }
    
    public function f_Eventos() {
        $events = Events::all();
        $title = 'Eventos na Igreja';
        return view('site.eventos.eventos', compact('title', 'events'));
    }
    
    
    public function f_EventosDetalhes($id) {
        $evento = Events::find($id);
        $events = Events::all();
        $title = 'Detalhes de eventos realizados na Igreja.';
        return view('site.eventos.eventosDetalhes', compact('title','evento', 'events'));
    }
    
    public function f_Galeria() {
        $title = 'Galeria de Fotos da Igreja e Eventos';
        return view('site.galeria.galeria', compact('title'));
    }
    
    public function f_Contato() {
        $title = 'Entre em Contato Conosco';
        return view('site.contato.index', compact('title'));
    }
    
}
