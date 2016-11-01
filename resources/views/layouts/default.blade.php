<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Microbiota Control system">
        <meta name="author" content="kaige">

        <!-- App favicon -->
        <link rel="shortcut icon" href="/images/favicon.ico">
        <!-- App title -->
        <title>Control System</title>
            
        @yield('styles')

        <!-- App css -->
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/css/core.css" rel="stylesheet" type="text/css" />
        <link href="/css/components.css" rel="stylesheet" type="text/css" />
        <link href="/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="/plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="/js/modernizr.min.js"></script>

    </head>

    <body class="fixed-left">
        <div id="wrapper">

            {{-- top-start --}}
            <div class="topbar">
                <div class="topbar-left">
                    <a href="#" class="logo">
                        <span>Micro</span>biota
                        <i class="mdi mdi-layers"></i>
                    </a>
                </div>

                @include('nav.navbar')
            </div>

            {{-- topbar-end --}}

            {{-- sidebar-start --}}

            <div class="left side-menu">
                <div class="sidebar-inner slimescrollleft">
                    
                    @include("nav.sidebar")

                    <div class="clearfix"></div>

                    {{--<div class="help-box">--}}
                        {{--<h5 class="text-muted m-t-0">Need help?</h5>--}}
                        {{--<p>--}}
                            {{--<span class="text-custom">Email:</span><br />--}}
                            {{--support@microbiota.cn--}}

                        {{--</p>--}}

                        {{--<p class="m-b-0">--}}
                            {{--<span class="text-custom">Call:</span>--}}
                            {{--<br />--}}
                            {{--123123123123--}}
                        {{--</p>--}}
                    {{--</div>--}}
                </div>
            </div>

            {{-- left-sidebar --}}

            {{-- right content-start --}}

            <div class="content-page">
                
                {{-- content start --}}

                <div class="content">
                    <div class="container">
                        @yield('content')
                    </div>
                </div>

                {{-- content end --}}

                <footer class="footer text-right">
                    2016 @ microbiota
                </footer>
            </div>
         {{-- right content end --}}

         {{-- Right sidebar --}}

         @include('nav.right-bar')
            
        </div>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/detect.js"></script>
        <script src="/js/fastclick.js"></script>
        <script src="/js/jquery.blockUI.js"></script>
        <script src="/js/waves.js"></script>
        <script src="/js/jquery.slimscroll.js"></script>
        <script src="/js/jquery.scrollTo.min.js"></script>
        <script src="/plugins/switchery/switchery.min.js"></script>

       @yield('scripts')


        <!-- App js -->
        <script src="/js/jquery.core.js"></script>
        <script src="/js/jquery.app.js"></script>

    @stack('js')
    </body>