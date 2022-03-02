<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla</title>
    <meta name="keywords" content="Lorem ipsum">
    <meta name="description" content="Lorem ipsum">
    <meta name="author" content="Lorem ipsum">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="frontend/assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="frontend/assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="frontend/assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="frontend/assets/images/icons/site.html">
    <link rel="mask-icon" href="frontend/assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="frontend/assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Lorem ipsum">
    <meta name="application-name" content="Lorem ipsum">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="frontend/assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="frontend/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="frontend/assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="frontend/assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="frontend/assets/css/style.css">
    <link rel="stylesheet" href="frontend/assets/css/skins/skin-demo-2.css">
    <link rel="stylesheet" href="frontend/assets/css/demos/demo-2.css">

    @stack('css')
    @yield('css')

</head>

<body>
    <div class="page-wrapper">
        <!-- Header -->

		@include('frontend.component.header')

        <!-- Header -->

        <!-- Start .main -->

        <main class="main">

            @yield('content')

        </main>

        <!-- End .main -->

        <!-- Start .icon-boxes-container -->

        @include('frontend.component.boxes-container')

        <!-- End .icon-boxes-container -->

        <!-- footer Subscribe bg-image -->

        @include('frontend.component.subscribe')

        <!-- footer Subscribe bg-image -->

        <!-- Footer Start-->

        @include('frontend.component.footer')

        <!-- Footer End -->

        </div><!-- End .page-wrapper -->
        <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

        <!-- Mobile Menu -->

        @include('frontend.component.mobile-Menu')

        <!-- End .mobile-menu-container -->

        <!-- Sign in / Register Modal -->

        @include('frontend.component.sign_in_sign_up')

        <!-- End .modal -->

        <!-- Newsletter Popup Container Start-->

        @include('frontend.component.newsletter_popup_container')

        <!-- Newsletter Popup Container End -->


    <!-- Plugins JS File -->
    <script src="frontend/assets/js/jquery.min.js"></script>
    <script src="frontend/assets/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/assets/js/jquery.hoverIntent.min.js"></script>
    <script src="frontend/assets/js/jquery.waypoints.min.js"></script>
    <script src="frontend/assets/js/superfish.min.js"></script>
    <script src="frontend/assets/js/owl.carousel.min.js"></script>
    <script src="frontend/assets/js/jquery.plugin.min.js"></script>
    <script src="frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="frontend/assets/js/jquery.countdown.min.js"></script>
    <!-- Main JS File -->
    <script src="frontend/assets/js/main.js"></script>
    <script src="frontend/assets/js/demos/demo-2.js"></script>

    @stack('js')
    @yield('js')

</body>


</html>
