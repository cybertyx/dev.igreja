<!-- AUI Framework -->
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>{{$title or "Administrativo Pixelsquare"}}</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Favicons -->

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('assets/images/icons/apple-touch-icon-144-precomposed.png')}}" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('assets/images/icons/apple-touch-icon-114-precomposed.png')}}" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('assets/images/icons/apple-touch-icon-72-precomposed.png')}}" />
        <link rel="apple-touch-icon-precomposed" href="{{url('assets/images/icons/apple-touch-icon-57-precomposed.png')}}" />

        <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" />

        <!--[if lt IE 9]>
          <script src="{{url('assetsAdmin/js/minified/core/html5shiv.min.js')}}"></script>
          <script src="{{url('assetsAdmin/js/minified/core/respond.min.js')}}"></script>
        <![endif]-->

        <!-- Fides Admin CSS Core -->

        <link rel="stylesheet" type="text/css" href="{{url('/assets/css/minified/aui-production.min.css')}}" />

        <!-- Theme UI -->

        <link id="layout-theme" rel="stylesheet" type="text/css" href="{{url('/assets/themes/minified/fides/color-schemes/testecss.css')}}" />

        <!-- Fides Admin Responsive -->

        <link rel="stylesheet" type="text/css" href="{{url('/assets/themes/minified/fides/common.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{url('/assets/themes/minified/fides/responsive.min.css')}}" />

        <!-- Fides Admin JS -->

        <script type="text/javascript" src="{{url('/assets/js/minified/aui-production.min.js')}}"></script>

        <script>
        jQuery(window).load(
        function () {

            var wait_loading = window.setTimeout(function () {
                $('#loading').slideUp('fast');
                jQuery('body').css('overflow', 'auto');
            }, 1000
                    );

        });

        </script>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body style="overflow: hidden;">


        <div id="loading" class="ui-front loader ui-widget-overlay bg-white opacity-100">
            <img src="{{url('assetsAdmin/images/loader-dark.gif')}}" alt="" />
        </div>

        <div id="page-wrapper" class="demo-example">

            <!--HEADER (PERFIL E ICONES TOP)-->                
            <div id="page-header" class="clearfix">

                <!--LOGO AREA ADMINISTRATIVA-->
                <div id="header-logo">
                    <a href="javascript:;" class="tooltip-button" data-placement="bottom" title="Close sidebar" id="close-sidebar">
                        <i class="glyph-icon icon-caret-left"></i>
                    </a>
                    <a href="javascript:;" class="tooltip-button hidden" data-placement="bottom" title="Open sidebar" id="rm-close-sidebar">
                        <i class="glyph-icon icon-caret-right"></i>
                    </a>
                    <a href="javascript:;" class="tooltip-button hidden" title="Navigation Menu" id="responsive-open-menu">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                    Área Admin <i class="opacity-80">1.1</i>
                </div>
                <!--FIM LOGO AREA ADMINISTRATIVA-->

                <!--MENU PERFIL AREA ADMINISTRATIVA-->
                <div class="user-profile dropdown">
                    <a href="javascript:;" title="" class="user-ico clearfix" data-toggle="dropdown">
                        <img width="36" src="{{url('uploads/imgmembers/'.auth()->user()->image)}}" alt="" />
                        <span>{{auth()->user()->name}}</span>
                        <i class="glyph-icon icon-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu float-right">
                        <li>
                            <a href="javascript:;" title="">
                                <i class="glyph-icon icon-user mrg5R"></i>
                                Detalhes da Conta
                            </a>
                        </li>
                        <li>
                            <a href="{{route('register')}}" title="">
                                <i class="glyph-icon icon-cog mrg5R"></i>
                                Editar Perfil
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="">
                                <i class="glyph-icon icon-flag mrg5R"></i>
                                Notificações
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}">
                                <i class="glyph-icon icon-signout font-size-13 mrg5R"></i>
                                <span class="font-bold">Sair</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-submenu float-left">
                            <a href="javascript:;" data-toggle="dropdown" title="">
                                Dropdown menu
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="javascript:;" title="">
                                        Submenu 1
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" title="">
                                        Submenu 2
                                    </a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:;" title="">
                                        Submenu 3
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:;" title="">
                                                Submenu 2-1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" title="">
                                                Submenu 2-2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('/')}}" title="">
                                Ir para Área do Site
                            </a>
                        </li>

                    </ul>
                </div>
                <!--FIM MENU PERFIL AREA ADMINISTRATIVA-->

                <!--MENU RAPIDO AREA ADMINISTRATIVA-->
                <div class="dropdown dash-menu">
                    <a href="javascript:;" data-toggle="dropdown" data-placement="left" class="medium btn primary-bg float-right popover-button-header hidden-mobile tooltip-button" title="Example menu">
                        <i class="glyph-icon icon-th"></i>
                    </a>
                    <div class="dropdown-menu float-right">
                        <div class="small-box">
                            <div class="pad10A dashboard-buttons clearfix">
                                <p class="font-gray-dark font-size-11 pad0B">Menu Rápido.</p>
                                <div class="divider mrg10T mrg10B"></div>
                                <a href="javascript:;" class="btn vertical-button hover-blue-alt" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Dashboard</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button hover-green" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Widgets</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button hover-orange" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-reorder opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Tables</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button hover-orange" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-bar-chart opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Charts</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button hover-purple" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Buttons</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button hover-azure" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Panels</span>
                                </a>
                            </div>

                            <div class="bg-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A">Dashboard menu</div>
                            <div class="pad10A dashboard-buttons clearfix">
                                <a href="javascript:;" class="btn vertical-button remove-border bg-blue" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Dashboard</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button remove-border bg-red" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Widgets</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button remove-border bg-purple" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-reorder opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Tables</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button remove-border bg-azure" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-bar-chart opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Charts</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button remove-border bg-yellow" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Buttons</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button remove-border bg-orange" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Panels</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--FIM MENU RAPIDO AREA ADMINISTRATIVA-->

                <!--ICONES TOP AREA ADMINISTRATIVA-->
                <div class="top-icon-bar">
                    <div class="dropdown">

                        <a data-toggle="dropdown" href="javascript:;" title="">
                            <span class="badge badge-absolute bg-blue">8</span>
                            <i class="glyph-icon icon-lightbulb"></i>
                        </a>
                        <div class="dropdown-menu">

                            <div class="small-box">
                                <div class="popover-title">Boxed layout options</div>
                                <div class="pad10A clearfix">
                                    <a class="fluid-layout-btn hidden bg-blue-alt medium btn" href="javascript:;" title=""><span class="button-content">Full width layout</span></a>
                                    <a class="boxed-layout-btn bg-blue-alt medium btn" href="javascript:;" title=""><span class="button-content">Boxed layout</span></a>
                                </div>
                                <div class="popover-title">Boxed backgrounds</div>
                                <div class="pad10A clearfix">
                                    <a href="javascript:;" class="choose-bg" boxed-bg="#000" style="background: #000;" title=""></a>
                                    <a href="javascript:;" class="choose-bg" boxed-bg="#333" style="background: #333;" title=""></a>
                                    <a href="javascript:;" class="choose-bg" boxed-bg="#666" style="background: #666;" title=""></a>
                                    <a href="javascript:;" class="choose-bg" boxed-bg="#888" style="background: #888;" title=""></a>
                                    <a href="javascript:;" class="choose-bg" boxed-bg="#383d43" style="background: #383d43;" title=""></a>
                                    <a href="javascript:;" class="choose-bg" boxed-bg="#fafafa" style="background: #fafafa; border: #ccc solid 1px;" title=""></a>
                                    <a href="javascript:;" class="choose-bg" boxed-bg="#fff" style="background: #fff; border: #eee solid 1px;" title=""></a>
                                </div>
                                <div class="popover-title">Color schemes</div>
                                <div class="pad10A clearfix change-layout-theme">
                                    <p class="font-gray-dark font-size-11 pad0B">Mais cores aqui para você escolher!</p>
                                    <div class="divider mrg10T mrg10B"></div>
                                    <a href="javascript:;" class="choose-theme" layout-theme="dark-blue" title="">
                                        <span style="background: #2381E9;"></span>
                                    </a>
                                    <a href="javascript:;" class="choose-theme opacity-30 mrg15R" layout-theme="white-blue" title="">
                                        <span style="background: #2381E9;"></span>
                                    </a>
                                    <a href="javascript:;" class="choose-theme" layout-theme="dark-green" title="D">
                                        <span style="background: #78CE12;"></span>
                                    </a>
                                    <a href="javascript:;" class="choose-theme opacity-30 mrg15R" layout-theme="white-green" title="D">
                                        <span style="background: #78CE12;"></span>
                                    </a>
                                    <a href="javascript:;" class="choose-theme" layout-theme="dark-orange" title="">
                                        <span style="background: #FF6041;"></span>
                                    </a>
                                    <a href="javascript:;" class="choose-theme opacity-30 mrg15R" layout-theme="white-orange" title="">
                                        <span style="background: #FF6041;"></span>
                                    </a>
                                </div>

                                <div class="pad10A button-pane button-pane-alt text-center">
                                    <a href="javascript:;" class="btn medium bg-black">
                                        <span class="button-content text-transform-upr font-bold font-size-11">View all</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="dropdown">

                        <a data-toggle="dropdown" href="javascript:;" title="">
                            <span class="badge badge-absolute bg-orange">4</span>
                            <i class="glyph-icon icon-envelope-alt"></i>
                        </a>
                        <div class="dropdown-menu">

                            <div class="scrollable-content medium-box scrollable-small">

                                <ul class="no-border messages-box">
                                    <li>
                                        <div class="messages-img">
                                            <img width="32" src="assets/images/gravatar.jpg" alt="" />
                                        </div>
                                        <div class="messages-content">
                                            <div class="messages-title">
                                                <i class="glyph-icon icon-warning-sign font-red"></i>
                                                <a href="javascript:;" title="Message title">Important message</a>
                                                <div class="messages-time">
                                                    3 hr ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </div>
                                            <div class="messages-text">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="messages-img">
                                            <img width="32" src="assets/images/gravatar.jpg" alt="" />
                                        </div>
                                        <div class="messages-content">
                                            <div class="messages-title">
                                                <i class="glyph-icon icon-tag font-blue"></i>
                                                <a href="javascript:;" title="Message title">Some random email</a>
                                                <div class="messages-time">
                                                    3 hr ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </div>
                                            <div class="messages-text">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="messages-img">
                                            <img width="32" src="assets/images/gravatar.jpg" alt="" />
                                        </div>
                                        <div class="messages-content">
                                            <div class="messages-title">
                                                <a href="javascript:;" class="font-orange" title="Message title">Another received message</a>
                                                <div class="messages-time">
                                                    3 hr ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </div>
                                            <div class="messages-text">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="messages-img">
                                            <img width="32" src="assets/images/gravatar.jpg" alt="" />
                                        </div>
                                        <div class="messages-content">
                                            <div class="messages-title">
                                                <i class="glyph-icon icon-warning-sign font-red"></i>
                                                <a href="javascript:;" title="Message title">Important message</a>
                                                <div class="messages-time">
                                                    3 hr ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </div>
                                            <div class="messages-text">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="messages-img">
                                            <img width="32" src="assets/images/gravatar.jpg" alt="" />
                                        </div>
                                        <div class="messages-content">
                                            <div class="messages-title">
                                                <i class="glyph-icon icon-tag font-blue"></i>
                                                <a href="javascript:;" title="Message title">Some random email</a>
                                                <div class="messages-time">
                                                    3 hr ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </div>
                                            <div class="messages-text">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="messages-img">
                                            <img width="32" src="assets/images/gravatar.jpg" alt="" />
                                        </div>
                                        <div class="messages-content">
                                            <div class="messages-title">
                                                <a href="javascript:;" class="font-orange" title="Message title">Another received message</a>
                                                <div class="messages-time">
                                                    3 hr ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </div>
                                            <div class="messages-text">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                </ul>

                            </div>
                            <div class="pad10A button-pane button-pane-alt">
                                <a href="messaging.html" class="btn small float-left bg-white">
                                    <span class="button-content text-transform-upr font-size-11">All messages</span>
                                </a>
                                <div class="button-group float-right">
                                    <a href="javascript:;" class="btn small primary-bg">
                                        <i class="glyph-icon icon-star"></i>
                                    </a>
                                    <a href="javascript:;" class="btn small primary-bg">
                                        <i class="glyph-icon icon-random"></i>
                                    </a>
                                    <a href="javascript:;" class="btn small primary-bg">
                                        <i class="glyph-icon icon-map-marker"></i>
                                    </a>
                                </div>
                                <a href="javascript:;" class="small btn bg-red float-right mrg10R tooltip-button" data-placement="left" title="Remove comment">
                                    <i class="glyph-icon icon-remove"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="dropdown">

                        <a data-toggle="dropdown" href="javascript:;" title="">
                            <span class="badge badge-absolute bg-green">9</span>
                            <i class="glyph-icon icon-bell"></i>
                        </a>
                        <div class="dropdown-menu">

                            <div class="popover-title display-block clearfix form-row pad10A">
                                <div class="form-input">
                                    <div class="form-input-icon">
                                        <i class="glyph-icon icon-search transparent"></i>
                                        <input type="text" placeholder="Search notifications..." class="radius-all-100" name="" id="" />
                                    </div>
                                </div>
                            </div>
                            <div class="scrollable-content medium-box scrollable-small">

                                <ul class="no-border notifications-box">
                                    <li>
                                        <span class="btn bg-purple icon-notification glyph-icon icon-user"></span>
                                        <span class="notification-text">This is an error notification</span>
                                        <div class="notification-time">
                                            a few seconds ago
                                            <span class="glyph-icon icon-time"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="btn bg-orange icon-notification glyph-icon icon-user"></span>
                                        <span class="notification-text">This is a warning notification</span>
                                        <div class="notification-time">
                                            <b>15</b> minutes ago
                                            <span class="glyph-icon icon-time"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="bg-green btn icon-notification glyph-icon icon-user"></span>
                                        <span class="notification-text font-green font-bold">A success message example.</span>
                                        <div class="notification-time">
                                            <b>2 hours</b> ago
                                            <span class="glyph-icon icon-time"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="btn bg-purple icon-notification glyph-icon icon-user"></span>
                                        <span class="notification-text">This is an error notification</span>
                                        <div class="notification-time">
                                            a few seconds ago
                                            <span class="glyph-icon icon-time"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="btn bg-orange icon-notification glyph-icon icon-user"></span>
                                        <span class="notification-text">This is a warning notification</span>
                                        <div class="notification-time">
                                            <b>15</b> minutes ago
                                            <span class="glyph-icon icon-time"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="bg-blue btn icon-notification glyph-icon icon-user"></span>
                                        <span class="notification-text font-blue">Alternate notification styling.</span>
                                        <div class="notification-time">
                                            <b>2 hours</b> ago
                                            <span class="glyph-icon icon-time"></span>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <div class="pad10A button-pane button-pane-alt text-center">
                                <a href="notifications.html" class="btn medium primary-bg">
                                    <span class="button-content">View all notifications</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="dropdown">

                        <a data-toggle="dropdown" href="javascript:;" title="">
                            <span class="badge badge-absolute bg-red">2</span>
                            <i class="glyph-icon icon-tasks"></i>
                        </a>
                        <div class="dropdown-menu" id="progress-dropdown">

                            <div class="scrollable-content small-box scrollable-small">

                                <ul class="no-border progress-box">
                                    <li>
                                        <div class="progress-title">
                                            Finishing uploading files
                                            <b>23%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="23">
                                            <div class="progressbar-value bg-blue">
                                                <div class="progressbar-overlay"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="progress-title">
                                            Roadmap progress
                                            <b>91%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="91">
                                            <div class="progressbar-value primary-bg">
                                                <div class="progressbar-overlay"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="progress-title">
                                            Images upload
                                            <b>58%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="58">
                                            <div class="progressbar-value bg-blue-alt"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="progress-title">
                                            WordPress migration
                                            <b>74%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="74">
                                            <div class="progressbar-value bg-purple"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="progress-title">
                                            Agile development procedures
                                            <b>91%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="91">
                                            <div class="progressbar-value primary-bg">
                                                <div class="progressbar-overlay"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="progress-title">
                                            Systems integration
                                            <b>58%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="58">
                                            <div class="progressbar-value bg-blue-alt"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="progress-title">
                                            Code optimizations
                                            <b>97%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="97">
                                            <div class="progressbar-value bg-yellow"></div>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <div class="pad10A button-pane button-pane-alt text-center">
                                <a href="notifications.html" class="btn medium font-normal bg-green">
                                    <span class="button-content">View all</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--FIM ICONES TOP AREA ADMINISTRATIVA-->
            </div>
            <!--FIM HEADER (PERFIL E ICONES TOP)-->

            <!--COMEÇO DO MENU-->
            <div id="page-sidebar" class="scrollable-content">

                <div id="sidebar-menu">
                    <ul>
                        <li>
                            <a href="{{url('/')}}" title="Help &amp; Support">
                                Ir para o Site
                                <i class="glyph-icon icon-signout"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('adminigreja')}}" title="Dashboard">
                                <i class="glyph-icon icon-dashboard"></i>
                                Dashboard Pixel
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="Clientes">
                                <i class="glyph-icon icon-group"></i>
                                Eventos
                            </a>
                            <ul>
                                <li>
                                    <a href="{{route('create.evento')}}" title="Cadastrar Eventos">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Cadastrar Eventos
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('adminEventos')}}" title="Eventos Cadastrados">
                                        <i class="glyph-icon icon-chevron-right"></i>
                                        Eventos Cadastrados
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="javascript:;" title="Help &amp; Support">
                                <i class="glyph-icon icon-book"></i>
                                Ajuda &amp; Suporte
                            </a>
                        </li>

                    </ul>
                    <div class="divider mrg5T mobile-hidden"></div>
                    <div class="text-center mobile-hidden">
                        <div class="button-group display-inline">
                            <a href="javascript:;" class="btn medium bg-green tooltip-button" data-placement="top" title="Mensagens">
                                <i class="glyph-icon icon-flag"></i>
                            </a>
                            <a href="javascript:;" class="btn medium bg-green tooltip-button" data-placement="top" title="Mailbox">
                                <i class="glyph-icon icon-inbox"></i>
                            </a>
                            <a href="javascript:;" class="btn medium bg-green tooltip-button" data-placement="top" title="Conteúdo">
                                <i class="glyph-icon icon-hdd"></i>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
            <!--FIM DO MENU-->

            <!--SUB-HEADER + CONTEUDO-->
            <div id="page-content-wrapper">

                <!--SUB-HEADER-->

                <!--FIM SUB-HEADER-->

                <!--CONTEUDO DO ADMIN-->
                @yield('content')
                <!--FIM CONTEUDO DO ADMIN-->

            </div>
            <!--FIM SUB-HEADER + CONTEUDO-->
        </div>

    </body>
</html>