<?php

/* * *******************************************************************************************************************
 * GESTÃO DOS PAINEIS ADMINISTRATIVOS DA PIXELSQUARE
 * ****************************************************************************************************************** */
$this->group(['middleware' => 'auth'], function() {
    
    $this->get('/', 'AdminController@index')->name('homeAdmin');

    /*     * *******************************************************************************************************************
     * ROTA PARA CADASTRO DE EVENTOS
     * ****************************************************************************************************************** */
    $this->get('cadastrar-eventos', 'AdminController@createEventos')->name('create.evento');
    $this->post('cadastrar-eventos', 'AdminController@storeEventos')->name('store.evento');

    //EDITAR E RETORNO DO FORM PARA EDITAR UM CLIENTE CADASTRADO
    $this->get('editar-eventos/{id}', 'AdminController@editarEventos')->name('editar.evento');
    $this->post('atualizar-eventos/{id}', 'AdminController@updateEventos')->name('update.evento');

    //RETORNO DOS CLIENTES
    $this->get('adminEventos', 'AdminController@eventos')->name('adminEventos');


    /*     * *******************************************************************************************************************
     * ROTA PARA CADASTRO DE CLIENTES DO SISTEMA ADMINISTRATIVO
     * ****************************************************************************************************************** */
    $this->get('cadastrar-clientes', 'AdminController@createClientes')->name('create.cliente');
    $this->post('cadastrar-clientes', 'AdminController@storeClientes')->name('store.cliente');

    //EDITAR E RETORNO DO FORM PARA EDITAR UM CLIENTE CADASTRADO
    $this->get('editar-clientes/{id}', 'AdminController@editarClientes')->name('editar.cliente');
    $this->post('atualizar-clientes/{id}', 'AdminController@updateClientes')->name('update.cliente');

    //RETORNO DOS CLIENTES
    $this->get('clientes', 'AdminController@clientes')->name('clientes');

    /*     * *******************************************************************************************************************
     * ROTA PARA CADASTRO DE PORTIFOLIO DA PIXELSQUARE
     * ****************************************************************************************************************** */
    $this->get('cadastrar-portifolio', 'AdminController@createPortifolio')->name('create.portifolio');
    $this->post('cadastrar-portifolio', 'AdminController@storePortifolio')->name('store.portifolio');

    //EDITAR E RETORNO DO FORM PARA EDITAR UM PORTIFOLIO CADASTRADO
    $this->get('editar-portifolio/{id}', 'AdminController@editarPortifolio')->name('editar.portifolio');
    $this->post('atualizar-portifolio/{id}', 'AdminController@updatePortifolio')->name('update.portifolio');

    //RETORNO DOS PORTIFOLIOS
    $this->get('portifolios', 'AdminController@portifolio')->name('portifolio');

    /*     * *******************************************************************************************************************
     * ROTA PARA CADASTRO DE MEMBROS DO SISTEMA ADMINISTRATIVO
     * ****************************************************************************************************************** */
    $this->get('cadastrar-membros', 'UserController@createMembros')->name('create.membro');
    $this->post('cadastrar-membros', 'UserController@storeMembros')->name('store.membro');

    //EDITAR E RETORNO DO FORM PARA EDITAR UM PORTIFOLIO CADASTRADO
    $this->get('editar-membro/{id}', 'UserController@editarMembro')->name('editar.membro');
    $this->post('atualizar-membro/{id}', 'UserController@updateMembro')->name('update.membro');

    //RETORNO DOS MEMBROS
    $this->get('membros', 'UserController@member')->name('membro');

    /*     * *******************************************************************************************************************
     * ROTA PARA CADASTRO DE TESTEMUNHOS DE CLIENTES DA PIXELSQUARE
     * ****************************************************************************************************************** */
    $this->get('cadastrar-testemunhos', 'AdminController@createTestemunhos')->name('create.testemunho');
    $this->post('cadastrar-testemunhos', 'AdminController@storeTestemunhos')->name('store.testemunho');

    //EDITAR E RETORNO DO FORM PARA EDITAR UM TESTEMUNHOS CADASTRADO
    $this->get('editar-testemunho/{id}', 'AdminController@editarTestemunho')->name('editar.testemunho');
    $this->post('atualizar-testemunho/{id}', 'AdminController@updateTestemunho')->name('update.testemunho');

    //RETORNO DOS TESTEMUNHOS
    $this->get('testemunhos', 'AdminController@testemunho')->name('testemunho');

    /*     * *******************************************************************************************************************
     * ROTA PARA CADASTRO DE FAQ'S DA PIXELSQUARE
     * ****************************************************************************************************************** */
    $this->get('cadastrar-faqs', 'AdminController@createFaq')->name('create.faq');
    $this->post('cadastrar-faqs', 'AdminController@storeFaq')->name('store.faq');

    //EDITAR E RETORNO DO FORM PARA EDITAR UM FAQs CADASTRADO
    $this->get('editar-faq/{id}', 'AdminController@editarFaq')->name('editar.faq');
    $this->post('atualizar-faq/{id}', 'AdminController@updateFaq')->name('update.faq');

    //RETORNO DOS FAQs
    $this->get('duvidas', 'AdminController@faq')->name('faq');

    /*     * *******************************************************************************************************************
     * ROTA PARA CADASTRO DE TAGs DA PIXELSQUARE
     * ****************************************************************************************************************** */
    $this->get('cadastrar-tags', 'AdminController@createTags')->name('create.tag');
    $this->post('cadastrar-tags', 'AdminController@storeTags')->name('store.tag');

    //EDITAR E RETORNO DO FORM PARA EDITAR UM FAQs CADASTRADO
    $this->get('editar-tag/{id}', 'AdminController@editarTag')->name('editar.tag');
    $this->post('atualizar-tag/{id}', 'AdminController@updateTag')->name('update.tag');

    //RETORNO DOS FAQs
    $this->get('tags', 'AdminController@tag')->name('tag');

    /*     * *******************************************************************************************************************
     * ROTA PARA RECUPERAR SERVIÇOS DA PIXELSQUARE TABELA
     * ****************************************************************************************************************** */
    $this->get('servicosprestados', 'AdminController@servicosPixel')->name('servicosprestados');
//    $this->post('cadastrar-servprestados', 'AdminController@storeServPrestados')->name('store.servicosprestados');

    /*     * *******************************************************************************************************************
     * ROTA PARA PAINEL ADMINISTRATIVO DA PIXELSQUARE
     * ****************************************************************************************************************** */
    $this->get('adminpixel', 'SiteController@admin')->name('adminpixel');

    $this->get('register', 'UserController@register')->name('register');

    $this->get('/listnewsletter', 'SiteController@listNewsletter')->name('list.newsletter');

    $this->get('adminigreja', 'SiteController@admin')->name('adminigreja');
});



$this->get('/', 'SiteController@index')->name('home');

//ROTAS "O SANTUARIO"
$this->get('/ondefica', 'SiteController@f_Ondefica')->name('ondefica');
$this->get('/historia', 'SiteController@f_Historia')->name('historia');
$this->get('/administracao', 'SiteController@f_Administracao')->name('administracao');

//ROTAS "EVENTOS"
$this->get('/eventos', 'SiteController@f_Eventos')->name('eventos');
$this->get('evento/{id}', 'SiteController@f_EventosDetalhes')->name('eventoDetalhe');

//ROTA "GALERIA DE FOTOS"
$this->get('/galeria', 'SiteController@f_Galeria')->name('galeria');

//ROTA "GALERIA DE FOTOS"
$this->get('/contato', 'SiteController@f_Contato')->name('contato');

Auth::routes();

$this->get('register', 'UserController@register')->name('register');

Auth::routes();



$this->get('logout', 'UserController@logout');
