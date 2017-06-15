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
                        <h3 class="text-theme-colored font-36">Event List without Sidebar</h3>
                        <ol class="breadcrumb text-center mt-10 white">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li class="active">Event List without Sidebar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: event calendar -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @forelse($events as $event)
                    <div class="upcoming-events media maxwidth400 bg-light mb-20">


                        <div class="row equal-height">
                            <div class="col-sm-4 pr-0 pr-sm-15">
                                <div class="thumb p-15">
                                    <img class="img-fullwidth" src="{{url('uploads/imgEventos')}}/{{$event->image}}" alt="...">
                                </div>
                            </div>
                            <div class="col-sm-4 border-right pl-0 pl-sm-15">
                                <div class="event-details p-15 mt-30">
                                    <h4 class="media-heading text-uppercase font-weight-500">{{$event->title}}</h4>
                                    <p>{{ str_limit($event->descricao, $limit = 200, $end = ' ...') }}</p>
                                    <a href="{{route('eventoDetalhe', $event->id)}}" class="btn btn-flat btn-dark btn-theme-colored btn-sm mt-10">Mais Detalhe  <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="event-count p-15 mt-15">
                                    <ul class="event-date list-inline font-20 text-uppercase mt-10 mb-20">
                                        <li class="p-15 mr-5 bg-lightest">{{$event->dataInicio}}</li>
                                    </ul>
                                    <ul>
                                        <li class="mb-10 text-theme-colored"><i class="fa fa-clock-o mr-5"></i> at 5.00 pm - 7.30 pm</li>
                                        <li class="text-theme-colored"><i class="fa fa-map-marker mr-5"></i> {{$event->localizacao}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    @empty
                    <div class="upcoming-events media maxwidth400 bg-light mb-20">Sem Eventos no Momento!</div>
                    @endforelse
                    <div class="row">
                        <div class="col-sm-12">
                            <nav>
                                <ul class="pagination theme-colored pull-right xs-pull-center mb-xs-40">
                                    <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">...</a></li>
                                    <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->
@endsection