@extends('site.templates.template')

@section('content')
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark-5" data-bg-img="{{url('assets/images/slide/contactfundo.png')}}">
        <div class="container pt-30 pb-30">
            <!-- Section Content -->
            <div class="section-content text-center">
                <div class="row"> 
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h2 class="text-white font-36">Contato</h2>
                        <ol class="breadcrumb text-center mt-10 white">
                            <li title="Ir para Home"><a href="#">Home</a></li>
                            <li title="Ir para Contato" class="active">Contato</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>      
    </section>

    <!-- Section: Have Any Question -->
    <section class="divider">
        <div class="container pt-60 pb-60">
            <div class="section-title mb-60">
                <div class="row">
                    <div class="col-md-12">
                        <div class="esc-heading small-border text-center">
                            <h3>Tem alguma pergunta?</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12 col-md-4" title="Telefone de contato Igreja Santo Antônio - (062) 3324-8677">
                        <div class="contact-info text-center">
                            <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                            <h4>Ligue para Nós</h4>
                            <h6 class="text-gray font-14">Telefone: (062) 3324-8677</h6>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="contact-info text-center">
                            <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                            <h4>Endereço</h4>
                            <h6 class="text-gray font-14" title="Endereço do Igreja Santo Antônio - Av. Tiradentes - St. Central, Anápolis - GO">Av. Tiradentes - St. Central, Anápolis - GO</h6>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="contact-info text-center">
                            <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                            <h4>E-mail</h4>
                            <h6 class="text-gray font-14" title="Email de contato Igreja Santo Antônio - secretaria@santuariosantoantonio.com.br">secretaria@santuariosantoantonio.com.br</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="divider bg-lighter">
        <div class="container-fluid pt-0 pb-0">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="contact-wrapper">
                            <h3 class="mt-100 mb-30">Entre em contato conosco.</h3>
                            <p class="mb-30">Existe alguma dúvida onde você deseja tirar conosco? Digite os dados no formulário e aguarde nossa resposta, logo mais entraremos em contato.</p>

                            <!-- Contact Form -->
                            <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form_name">Nome <small>*</small></label>
                                            <input name="form_name" class="form-control valid" type="text" placeholder="Entre com o seu Nome" title="Seu Nome aqui.">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="form_email">Email <small>*</small></label>
                                            <input name="form_email" class="form-control required email" type="email" placeholder="Entre com seu Email" title="Seu E-Mail aqui.">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="form_name">Mensagem</label>
                                    <textarea name="form_message" class="form-control required" rows="5" placeholder="Entre com sua Mensagem" title="Sua Mensagem para a Igreja Santo Antônio."></textarea>
                                </div>
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                                    <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Aguarde..." title="Enviar Mensagem agora.">Enviar sua Mensagem</button>
                                    <button type="reset" class="btn btn-default btn-flat btn-theme-colored" title="Cancelar Mensagem agora.">Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 bg-img-center bg-img-cover p-0" data-bg-img="http://placehold.it/1920x1280">

                        <!-- Google Map HTML Codes -->
                        <div 
                            data-address="Av. Tiradentes - St. Central, Anápolis - GO, 75043-044"
                            data-popupstring-id="#popupstring1"
                            class="map-canvas autoload-map"
                            data-mapstyle="style"
                            data-height="800"
                            data-latlng="-16.3194586,-48.9570"
                            data-title="sample title"
                            data-zoom="18"
                            data-marker="{{url('assets/images/map-marker.png')}}">
                        </div>
                        <!--<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:800px;width:952px;'><div id='gmap_canvas' style='height:800px;width:952px;'></div><div><small><a href="http://embedgooglemaps.com">embed google map</a></small></div><div><small><a href="http://www.proxysitereviews.com /lime-proxies/">lime proxies</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(-16.30667485132787,-48.959524240197766),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-16.30667485132787,-48.959524240197766)});infowindow = new google.maps.InfoWindow({content:'<strong>Santuário Santo Antonio</strong><br>Av. Tiradentes - St. Central, Anápolis - GO, 75043-044<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>-->
                        <div class="map-popupstring hidden" id="popupstring1">
                            <div class="text-center">
                                <h3>Santuário Santo Antonio</h3>
                                <p>Av. Tiradentes - St. Central, Anápolis - GO</p>
                            </div>
                        </div>
                        <!-- Google Map Javascript Codes -->
                        <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
                        <script src="{{url('assets/js/google-map-init.js')}}"></script>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->
@endsection