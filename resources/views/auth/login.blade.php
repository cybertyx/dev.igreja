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
        <title>{{$title or 'Login | Santuário Santo Antônio'}}</title>

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

        <!-- CSS | Theme Color -->
        <link href="{{url('assets/images/favicon.png')}}css/colors/theme-skin-yellow.css" rel="stylesheet" type="text/css">

        <!-- external javascripts -->
        <script src="{{url('assets/js/jquery-2.2.0.min.js')}}"></script>
        <script src="{{url('assets/js/jquery-ui.min.js')}}"></script>
        <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
        <!-- JS | jquery plugin collection for this theme -->
        <script src="{{url('assets/js/jquery-plugin-collection.js')}}"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="">
        <div id="wrapper">
            <!-- preloader -->
            <div id="preloader">
                <div id="spinner">
                    <div class="preloader-dot-loading">
                        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
                    </div>
                </div>
                <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
            </div>

            <!-- start main-content -->
            <div class="main-content">
                <!-- Section: home -->
                <section id="home" class="divider parallax fullscreen layer-overlay" data-bg-img="{{url('assets/images/slide/slide1.png')}}">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 col-md-push-4" style="background: #fff;">
                                        <div class="text-center mb-30"><a href="#" class=""><img alt="" src="{{url('assets/images/logo-wide.png')}}"></a></div>
                                        <h4 class="text-theme-colored mt-0 pt-5"> Logar</h4>
                                        <p>Entre com seu email e senha cadastrados.</p>

                                        <form name="login-form" class="form-transparent clearfix" method="POST" action="{{ route('login') }}">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="form-group col-md-12{{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <label for="form_username_email">Username/Email</label>
                                                    <input name="email" value="{{ old('email') }}" class="form-control" type="email" style="color:#666">
                                                    @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label for="form_password">Password</label>
                                                    <input id="form_password" name="password" class="form-control" type="password" style="color:#666">
                                                </div>
                                            </div>
                                            <div class="form-group pull-right mt-10">
                                                <button type="submit" value="login" class="btn btn-dark btn-lg2">Logar</button>
                                            </div>
                                            <div class="clear text-center pt-10">
                                                <a class="text-theme-colored font-weight-600 font-12" href="{{ route('password.request') }}">Esqueceu Senha?</a>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- end main-content --> 

            <!-- Footer -->
            <footer id="footer" class="footer text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="mb-0">Copyright ©2015 CharityFund. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </footer>
            <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- end wrapper -->

        <!-- Footer Scripts -->
        <!-- JS | Custom script for all pages -->
        <script src="{{url('assets/js/custom.js')}}"></script>

    </body>
</html>


