<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="author" content="elemis">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('/assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/colors/aqua.css') }}">
</head>

<body>
    <div class="content-wrapper">
        @include("nav")
        @yield("content")
    </div>
    <footer class="bg-gray">
        <div class="container py-13 py-md-15">
            <!--/div -->
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-4">
                    <div class="widget">
                        <img class="mb-4" src="{{ asset('/assets/img/logo1.webp') }}" srcset="{{ asset('/assets/img/logo1.webp') }}" width="70%" alt="Frenzel Globe Logo" />
                        <p class="mb-4">© <script>
                                document.write(new Date().getUTCFullYear());
                            </script> Frenzel Globe. <br class="d-none d-lg-block" />All rights reserved.</p>
                        <nav class="nav social social-muted">
                            <a href="https://x.com/frenzel_globe_?t=g8Gt9_qaEdchdy7qqB09ew&s=09" target="_blank"><i class="uil uil-twitter"></i></a>
                            <a href="https://www.facebook.com/share/1J1QVbx3cn/" target="_blank"><i class="uil uil-facebook-f"></i></a>
                            <a href="https://www.instagram.com/frenzel_globe_trade/profilecard/?igsh=YWVkcWVnMDkyMXU4" target="_blank"><i class="uil uil-instagram"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="widget">
                        <h4 class="widget-title ls-sm mb-3">Quick Links</h4>
                        <ul class="list-unstyled text-reset mb-0">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('products', 'general') }}">Products</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-4">
                    <div class="widget">
                        <h4 class="widget-title ls-sm mb-3">Get in Touch</h4>
                        <address class="pe-xl-15 pe-xxl-17">Building 87, Road 326, Shaikh Hamad Avenue, Block 302, Manama Center, Kingdom of Bahrain</address>
                        <a href="mailto:frenzelglobe@gmail.com" class="link-body">frenzelglobe@gmail.com</a><br /> <a href="callto:+97333669208">+973 33669208</a><br />
                        <a href="callto:+97333669207">+973 33669207</a><br />
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{ asset('/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('/assets/js/theme.js') }}"></script>
</body>

</html>