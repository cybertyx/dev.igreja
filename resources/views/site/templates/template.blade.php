<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>

        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="CharityFund - Charity & Crowdfunding HTML Template" />
        <meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
        <meta name="author" content="ThemeMascot" />

        <!-- Page Title -->
        <title>{{$title or 'Santuário Santo Antônio'}}</title>

        <!-- Favicon and Touch Icons -->
        <link href="{{url('assets/images/favicon.png')}}" rel="shortcut icon" type="image/png">
        <link href="{{url('assets/images/apple-touch-icon.png')}}" rel="apple-touch-icon">
        <link href="{{url('assets/images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
        <link href="{{url('assets/images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
        <link href="{{url('assets/images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">

        <!-- Stylesheet -->
        <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets/css/animate.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('assets/css/css-plugin-collections.css')}}" rel="stylesheet"/>
        <!-- CSS | menuzord megamenu skins -->
        <link id="menuzord-menu-skins" href="{{url('assets/css/menuzord-skins/menuzord-boxed.css')}}" rel="stylesheet"/>
        <!-- CSS | Main style file -->
        <link href="{{url('assets/css/style-main.css')}}" rel="stylesheet" type="text/css">
        <!-- CSS | Preloader Styles -->
        <link href="{{url('assets/css/preloader.css')}}" rel="stylesheet" type="text/css">
        <!-- CSS | Custom Margin Padding Collection -->
        <link href="{{url('assets/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
        <!-- CSS | Responsive media queries -->
        <link href="{{url('assets/css/responsive.css')}}" rel="stylesheet" type="text/css">
        <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
        <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

        <!-- Revolution Slider 5.x CSS settings -->
        <link  href="{{url('assets/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
        <link  href="{{url('assets/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
        <link  href="{{url('assets/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

        <!-- CSS | Theme Color -->
        <link href="{{url('assets/css/colors/theme-skin-brown.css')}}" rel="stylesheet" type="text/css">

        <!-- external javascripts -->
        <script src="{{url('assets/js/jquery-2.2.0.min.js')}}"></script>
        <script src="{{url('assets/js/jquery-ui.min.js')}}"></script>
        <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
        <!-- JS | jquery plugin collection for this theme -->
        <script src="{{url('assets/js/jquery-plugin-collection.js')}}"></script>

        <!-- Revolution Slider 5.x SCRIPTS -->
        <script src="{{url('assets/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{url('assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script type="text/javascript" src="{{url('/js/app.js')}}"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="has-side-panel side-panel-right fullwidth-page side-push-panel">
        <div id="wrapper" class="clearfix">
            <!-- preloader -->
            <div id="preloader">
                <div id="spinner">
                    <div class="preloader-dot-loading">
                        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
                    </div>
                </div>
                <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
            </div>

            <!-- Header -->
            <header class="header">
                <div class="header-top bg-theme-colored sm-text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="widget no-border m-0">
                                    <ul class="list-inline sm-text-center mt-5">
                                        <li>
                                            <a href="#" class="text-white">FAQ</a>
                                        </li>
                                        <li class="text-white">|</li>
                                        <li>
                                            <a href="#" class="text-white">Suporte</a>
                                        </li>
                                        <li class="text-white">|</li>
                                        <li>
                                            <a href="{{ route('login') }}" class="text-white">Logar</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="widget no-border m-0">
                                    <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-right sm-pull-none sm-text-center mt-sm-15">
                                        <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-middle p-0 bg-lightest xs-text-center">
                    <div class="container pt-0 pb-0">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-5">
                                <div class="widget no-border m-0">
                                    <a class="xs-pull-center" href="javascript:void(0)"><img src="{{url('assets/images/logo-wide.png')}}" alt="Logo Santo Antonio"></a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="widget no-border m-0">
                                    <div class="mt-10 mb-10 text-right sm-text-center">
                                        <div class="font-20 text-black-333 text-uppercase mb-5 font-weight-600"><i class="fa fa-phone-square text-theme-colored font-24"></i> (062) 3324-8677</div>
                                        <a class="font-12 text-gray" href="#">Ligue e nós conheça!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <div class="widget no-border m-0">
                                    <div class="mt-10 mb-10 text-right sm-text-center">
                                        <div class="font-20 text-black-333 text-uppercase mb-5 font-weight-600"><i class="fa fa-envelope text-theme-colored font-24"></i> E-Mail da Igreja</div>
                                        <a class="font-12 text-gray" href="#"> secretaria@santuariosantoantonio.com.br</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-nav">
                    <div class="header-nav-wrapper navbar-scrolltofixed bg-light">
                        <div class="container">
                            <nav id="menuzord" class="menuzord orange bg-light">
                                <ul class="menuzord-menu">
                                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="#">O Santuário</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('ondefica')}}">Onde Fica</a></li>
                                            <li><a href="{{route('historia')}}">História</a></li>
                                            <li><a href="{{route('administracao')}}">Administração</a></li>
                                            <li><a href="#">Imagens</a>
                                                <ul class="dropdown">
                                                    <li><a href="features-header-style1.html">Header Style1</a></li>
                                                    <li><a href="features-header-vertical-nav.html">Vertical Header <span class="label label-success">New</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('eventos')}}">Eventos</a></li>
                                    <li><a href="{{route('galeria')}}">Galerias de Fotos</a></li>
                                    <li><a href="{{route('contato')}}">Contato</a></li>
                                </ul>
                                <ul class="pull-right hidden-sm hidden-xs">
                                    <li>
                                        <a class="btn btn-colored btn-flat btn-theme-colored mt-15 ajaxload-popup" href="ajax-load/donation-form.html" >Doações</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Start main-content -->
            <div class="main-content">
                <!-- Section: home -->
                @yield('content')
                <!-- End Section: home -->
            </div>
            <!-- end main-content -->

            <!-- Footer -->
            <footer id="footer" class="footer pb-0" data-bg-img="{{url('assets/images/footer-bg.png')}}">
                <div class="container pb-10">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="widget mb-20"> <img alt="" src="{{url('assets/images/logo-wide.png')}}">
                                <p class="font-12 mt-15 mb-10">Berço, Raiz, Fonte. Palavras que servem para evocar uma história repleta de simplicidade, beleza e porque não dizer, da graça de Deus. Este é o início da Paróquia Santo Antônio,</p>
                                <a class="btn btn-default btn-transparent btn-xs btn-flat mt-5" href="#">Leia mais</a>
                            </div>
                            <div class="widget">
                                <div class="widget-subscribe mt-20">
                                    <h5 class="subscribe-title font-13 text-gray">Por favor, insira seu endereço de e-mail e fique por dentro de novidades.</h5>
                                    <form id="mailchimp-subscription-form" class="newsletter-form mt-10">
                                        <div class="input-group">
                                            <input type="email" id="mce-EMAIL" data-height="34px" class="form-control input-sm" placeholder="Seu E-mail" name="EMAIL" value="">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-colored btn-theme-colored btn-xs m-0" data-height="34px">Increver-se</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget">
                                <h5 class="widget-title line-bottom">Archives</h5>
                                <ul class="list-divider list-border">
                                    <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Vehicle Accidents</a></li>
                                    <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Family Law</a></li>
                                    <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Personal Injury</a></li>
                                    <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Case Investigation</a></li>
                                    <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Personal Injury</a></li>
                                    <li><a href="#"><i class="fa fa-check-square-o mr-10 text-black-light"></i> Business Taxation</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget">
                                <h5 class="widget-title line-bottom">Twitter Feed</h5>
                                <a class="twitter-timeline" data-lang="pt" data-width="262" data-height="349" data-dnt="true" data-link-color="#8D6E63" href="https://twitter.com/PixelsquareMobi">Tweets by PixelsquareMobi</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="widget">
                                <h5 class="widget-title line-bottom">Horário de funcionamento</h5>
                                <div class="opening-hourse">
                                    <ul class="list-border">
                                        <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Segunda-Feira :</span>
                                            <div class="value pull-right"> 9.00 am - 10.00 pm </div>
                                        </li>
                                        <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Terça-Feira :  </span>
                                            <div class="value pull-right"> 10.00 am - 8.00 pm </div>
                                        </li>
                                        <li class="clearfix"> <span class="text-theme-colored"><i class="fa fa-clock-o mr-5"></i> Quarta-Feira : </span>
                                            <div class="value pull-right text-theme-colored"> 10.00 am - 8.00 pm </div>
                                        </li>
                                        <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Quinta-Feira :</span>
                                            <div class="value pull-right"> 10.00 am - 6.00 pm </div>
                                        </li>
                                        <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Sexta-Feira : </span>
                                            <div class="value pull-right"> 2.00 pm - 8.00 pm </div>
                                        </li>
                                        <li class="clearfix"> <span><i class="fa fa-clock-o mr-5"></i> Sábado :</span>
                                            <div class="value pull-right"> <span class="text-highlight bg-theme-colored text-white-333">Colsed</span>  </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid bg-theme-colored p-20">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <p class="text-white font-11 m-0">Copyright &copy;2017 Santo Antonio. Todos os Direitos Reservados</p>
                        </div>
                    </div>
                    <div class="row text-center">
                    <div class="col-md-12">
                        <a href="http://www.pixelsquaremarketing.com"><img alt="" style="width: 200px;" src="{{url('assets/images/slide/pixelsquare.png')}}"></a>
                    </div>
                    </div>

                </div>
            </footer>
            <!-- End Footer -->
            <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- end wrapper -->

        <!-- Footer Scripts -->
        <!-- JS | Custom script for all pages -->
        <script src="{{url('assets/js/custom.js')}}"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
              (Load Extensions only on Local File Systems ! 
               The following part can be removed on Server for On Demand Loading) -->
        <script type="text/javascript" src="{{url('assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
        

    </body>
</html>