<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Events;
use Auth;
use App\Http\Requests\EventoRequest;

class AdminController extends Controller
{
    public function index() {
        $title = 'Dashboard Santuário Santo Antônio.';
        return view('admin.home.index', compact('title'));
    }
    
    /**********  CRIA FORMULARIO PARA CADASTRO DE EVENTOS   **********/
    public function createEventos() {
        $title = 'Cadastrar um Evento.';
        return view('admin.events.cadevent', compact('title'));
    }
    
    /**********  CRIA FORMULARIO PARA EDIÇÃO DE EVENTOS   **********/
    public function editarEventos(Events $event, $id) {
        $title = 'Editar Evento.';
        $evento = $event->find($id);
        
        return view('admin.events.updevent', compact('title', 'evento'));
    }
    
    /**********  RECEBE DO FORMULARIO OS DADOS PARA CADASTRO DE EVENTOS   **********/
    public function storeEventos(EventoRequest $request) {
        $dataForm = $request->all();
        
        $dataForm['published'] = isset($dataForm['published']);
        
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $nameImage = uniqid(date('YmdHis') . time()) . '.' . $image->getClientOriginalExtension();

            $dataForm['image'] = $nameImage;

            $upload = $image->storeAs('imgEventos', $nameImage);

            if (!$upload) {
                return redirect()->back()->with(['errors' => 'Falha no Upload da Imagem.']);
            }
        }
        $user = Auth::id();
        
        $dataForm['user_id']= $user;
        
        $insert = Events::create($dataForm);
        
        if ($insert) {
            return redirect()->route('create.evento')->with('success', "Evento Cadastrado com Sucesso.");
        } else {
            return redirect()->back()->with('errors', "Falha ao Cadastrado Evento.");
        }
        
    }
        
    /**********  EDITAÇÃO DE EVENTOS   **********/
    public function updateEventos(EventoRequest $request, $id) {
        $evento = Events::find($id);

        $dataForm = $request->all();
        $dataForm['published'] = isset($dataForm['published']);
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            if ($evento->image == null) {
                $nameImage = $portifolio->image;
            } else {
                $nameImage = uniqid(date('YmdHis') . time()) . '.' . $image->getClientOriginalExtension();
            }

            $dataForm['image'] = $nameImage;

            $upload = $image->storeAs('imgportifolio', $nameImage);

            if (!$upload) {

                return redirect()->back()->with(['errors' => 'Falha no Upload da Imagem.']);
            }
        }
        
        $update = $evento->update($dataForm);

        if ($update) {
            return redirect()->route('store.evento')->with('success', "Evento Editado com Sucesso.");
        } else {
            return redirect()->back()->with('errors', "Falha ao Editar Evento.");
        }
    }
        
    /**********  MOSTRA TODOS OS EVENTOS REALIZADOS E QUE VÃO SER REALIZADOS   **********/
    public function eventos() {
        $title = "Eventos da Igreja";
        $eventos = Events::all();

        return view('admin.events.event', compact('title', 'eventos'));
    }
    
    
    
}
