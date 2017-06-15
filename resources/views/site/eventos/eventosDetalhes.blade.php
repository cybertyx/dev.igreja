@extends('site.templates.template')

@section('content')
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="http://placehold.it/1920x1280">
        <div class="container pt-30 pb-30">
            <!-- Section Content -->
            <div class="section-content text-center">
                <div class="row"> 
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h2 class="text-theme-colored font-36">Evento: <span style="color: #fff;">{{$evento->title}}</span></h2>
                        <ol class="breadcrumb text-center mt-10 white">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li class="active">Event Details 2</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>      
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <li>
                            <h5>Título:</h5>
                            <p>{{$evento->title}}</p>
                        </li>
                        <li title="Local de realização do evento">
                            <h5>Local do Evento:</h5>
                            <p>{{$evento->localizacao}}</p>
                        </li>
                        <li title="Data de início do evento">
                            <h5>Início do Evento:</h5>
                            <p>{{$evento->dataInicio}}</p>
                        </li>
                        <li title="Data de encerramento do evento">
                            <h5>Encerramento do Evento:</h5>
                            <p>{{$evento->dataFinal}}</p>
                        </li>
                        <li>
                            <h5>Redes Sociais:</h5>
                            <div class="styled-icons icon-sm icon-gray icon-circled">
                                <a href="{{$evento->linkFacebook}}" title="Facebook Santuário Santo Antônio"><i class="fa fa-facebook"></i></a>
                                <a href="{{$evento->linkTwitter}}" title="Twitter Santuário Santo Antônio"><i class="fa fa-twitter"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="featured-project">
                        <div class="item">
                            <img style="width: 755px; height: 480px;" src="{{url('uploads/imgEventos/'.$evento->image)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-md-6">
                    <h4 class="mt-0">Descrição do Evento</h4>
                    <p>{{$evento->descricao}}</p>
                </div>
                <div class="col-md-6">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row mt-30">
                <div class="col-md-12">
                    <h4 class="mb-20">Outros Eventos</h4>
                    <div class="recent-project">
                        @foreach($events as $event)
                        <div class="item">
                            <a class="text-theme-colored" href="{{route('eventoDetalhe', $event->id)}}"><img src="{{url('uploads/imgEventos/'.$event->image)}}" alt=""></a>
                            <div class="content text-center">
                                <h5 class="author mb-0"><a class="text-theme-colored" href="{{route('eventoDetalhe', $event->id)}}">{{$event->title}}</a></h5>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->
@endsection
