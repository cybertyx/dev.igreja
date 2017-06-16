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
                        <h2 class="text-theme-colored font-36">História do Santuário Santo Antônio</h2>
                        <ol class="breadcrumb text-center mt-10 white">
                            <li><a href="#">Home</a></li>
                            <li class="active">História</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>      
    </section>

    <!-- Section: About -->
    <section> 
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <h3 class="text-theme-colored text-uppercase mt-0">História da Igreja</h3>
                    <p>Berço, Raiz, Fonte. Palavras que servem para evocar uma história repleta de simplicidade, beleza e porque não dizer, da graça de Deus. Este é o início da Paróquia Santo Antônio, nascida de uma linda história de amor, entre o povo simples do bairro e os frades franciscanos, recém-chegados da América.
                        Pessoas de uma simplicidade encantadora, ansiosas por um local onde pudessem louvar e agradecer a Deus pólo dom da vida e frades igualmente simples em suas batinas franciscanas, se encontraram, em 1947 e deram início ao que viria ser o Santuário de Santo Antônio.
                    </p><p>Os frades, da paróquia de Sant´Ana, que atendiam ao bairro, movidos pelo desejo de favorecer a educação das crianças construíram no terreno doado delo Sr. Antonio Xavier Nunes, uma Capela e ao lado, uma Escola.
                        Frei Celso Hayes, à frente, pedreiro cisterneiro e outros. Começaram a cavar buracos e levantar paredes. E no dia 1º de junho de 1947 a capela, que recebeu como padroeiro o grande santo franciscano, Antônio de Pádua, estava sendo inaugurada. </p>
                    <!--                    <div class="row mt-30 mb-30 ml-20">
                                            <div class="col-xs-6">
                                                <ul class="mt-10">
                                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;Education</li>
                                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;Community</li>
                                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;Education</li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6">
                                                <ul class="mt-10">
                                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;Education</li>
                                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;Teamwork</li>
                                                    <li class="mb-10"><i class="fa fa-check-circle text-theme-colored"></i>&emsp;Creativity</li>
                                                </ul>
                                            </div>
                                        </div>-->
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="image-carousel">
                        <div class="item">
                            <div class="thumb" style="width: 653px; height: 400px;">
                                <img src="{{url('assets/images/historia/fotos_antigas07.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb" style="width: 653px; height: 400px;">
                                <img src="{{url('assets/images/historia/fotos_antigas10.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb" style="width: 653px; height: 400px;">
                                <img src="{{url('assets/images/historia/fotos_antigas11.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb" style="width: 653px; height: 400px;">
                                <img src="{{url('assets/images/historia/fotos_antigas15.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb" style="width: 653px; height: 400px;">
                                <img src="{{url('assets/images/historia/fotos_antigas19.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb" style="width: 653px; height: 400px;">
                                <img src="{{url('assets/images/historia/fotos_antigas21.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb" style="width: 653px; height: 400px;">
                                <img src="{{url('assets/images/historia/fotos_antigas23.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb" style="width: 653px; height: 400px;">
                                <img src="{{url('assets/images/historia/fotos_antigas25.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- divider: Emergency Services -->
    <section>
        <div class="container" style="padding-top: 0px;">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-7">
                        <p>E a 22 de março do ano seguinte a Escola Paroquial abria suas portas tendo à frente as valorosas irmãs franciscanas, também americanas, Irmãs Rosalima e Verônica.
                            Grandes franciscanos passaram por ali e deixaram a marca de sua luta amorosa na criação de uma comunidade viva: Freis Benedito, Domingos, Inácio, Cormac Finnegan estiveram à frente. Tantos outros os auxiliaram!
                            A Capela tornou-se Paróquia em 11 de fevereiro de 1961, por decreto do arcebispo de Goiânia, Dom Fernando Gomes dos Santos.</p>
                        <p>Comunidade adulta, paroquianos nobres e engajados, frutos de boa semente, agora já possui quatro capelas na cidade: N. Sra de Fátima, S. Pedro e S. Paulo, S. Lourenço e S. Luzia e várias no interior.
                            Tendo os franciscanos passado a Paróquia para a diocese, Dom. Apaminondas José de Araújo a entregou aos padres espiritanos, João Verbeek e Tiago Roothans. Também outros sacerdotes espiritanos deixaram aí o seu legado.
                        </p>
                    </div>
                    <div class="col-md-5">
                        <p>Mais uma vez entregue a Diocese, a apróquia passa as mãos de outros vários pastores. O Atual vigário, Pe. Joaquim Pinto Magalhães Filho, tomado de amor pela Paróquia, a assumiu e com braço valoroso e zelo de pastor reconstruiu a Igreja que foi elevada a condição de Santuário.
                            A cerimônia de dedicação do Santuário de Santo Antônio foi realizada por D. Manoel Pestana Filho no dia 15 de julho de 2000.
                            Por tudo, demos graças.</p>
                    </div>
                </div>
            </div>
        </div>      
    </section>

    <!-- divider: Became a Volunteers -->
    <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.5" data-bg-img="http://placehold.it/1920x1280">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-7">
                        <h3 class="line-bottom">Became a Volunteer</h3>
                        <p class="mt-30 mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, et placeat ipsam, officiis fugiat doloremque ducimus tempore aliquid nihil soluta, quia similique veritatis! Quidem, repellendus exit placeat ipsam, officiis fugiat doloremque ducimus tempore aliquid nihil soluta, quia similique veritatis.</p>
                        <a class="btn btn-dark btn-theme-colored btn-lg btn-flat pull-left pl-30 pr-30" href="#">Join Us</a>
                    </div>
                    <div class="col-md-5">
                        <div class="fluid-video-wrapper">
                            <iframe src="//player.vimeo.com/video/22029657?title=0&amp;byline=0&amp;portrait=0" width="640" height="360"  title="Creative" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>

    <!-- Divider: Partners & Donors -->
    <section class="">
        <div class="container pt-30 pb-30">
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-logo carousel">
                        <div class="item"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
                        <div class="item"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
                        <div class="item"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
                        <div class="item"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
                        <div class="item"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
                        <div class="item"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
                        <div class="item"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
                        <div class="item"> <a href="#"><img src="http://placehold.it/150x120" alt=""></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->
@endsection