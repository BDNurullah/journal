<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Title  -->
        <title>Welcome to Hotcak Product</title>
        <!-- Favicon  -->
        <link rel="icon" href="{{ asset('assets/logo/favicon.ico')}}">
        <!-- Core Style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/portal/css/core-style.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/portal/style.css')}}">
    </head>
    <body>
        <!-- Search Wrapper Area Start -->
        <div class="search-wrapper section-padding-100">
            <div class="search-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="search-content">
                            <form action="#" method="get">
                                <input type="search" name="search" id="search" placeholder="Type your keyword...">
                                <button type="submit"><img src="{{ asset('assets/portal/img/core-img/search.png')}}" alt=""></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Wrapper Area End -->

        <!-- ##### Main Content Wrapper Start ##### -->
        <div class="main-content-wrapper d-flex clearfix">

            <!-- Mobile Nav (max width 767px)-->
            <div class="mobile-nav">
                <!-- Navbar Brand -->
                <div class="amado-navbar-brand">
                    <a href="{{route('index')}}"><img src="{{ asset('assets/logo/logo.png')}}" alt=""></a>
                </div>
                <span style="text-align: center;">
                    <button type="button" class="btn btn-info btn-xs" title="Order by a Phone Call" style="padding: 0px;">Order: 01313597212</button>

                    <button type="button" class="btn btn-warning btn-xs" title="Only for Bkash" style="padding: 0px;">Bkash: 01819896750</button>
                </span>
                <!-- Navbar Toggler -->
                <div class="amado-navbar-toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <!-- Header Area Start -->
            @include('includes.portal_header')
            <!-- Header Area End -->

            @yield('content')

        </div>
        <!-- ##### Main Content Wrapper End ##### -->

        <!-- ##### Newsletter Area Start ##### -->
        @include('includes.portal_footer')
        <!-- ##### Footer Area End ##### -->
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/5e3143d4daaca76c6fd0609e/default';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
        <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
        <script src="{{ asset('assets/portal/js/jquery/jquery-2.2.4.min.js')}}"></script>
        <!-- Popper js -->
        <script src="{{ asset('assets/portal/js/popper.min.js')}}"></script>
        <!-- Bootstrap js -->
        <script src="{{ asset('assets/portal/js/bootstrap.min.js')}}"></script>
        <!-- Plugins js -->
        <script src="{{ asset('assets/portal/js/plugins.js')}}"></script>
        <!-- Active js -->
        <script src="{{ asset('assets/portal/js/active.js')}}"></script>
        @yield('javascript')
    </body>
</html>