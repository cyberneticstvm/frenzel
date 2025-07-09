<header class="wrapper bg-light">
    <nav class="navbar navbar-expand-lg classic transparent position-absolute navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('/assets/img/logo1.webp') }}" srcset="{{ asset('/assets/img/logo1.webp') }}" width="50%" alt="Frenzel Globe Logo" />
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0">Frenzel Globe</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                    <div class="offcanvas-footer d-lg-none">
                        <div>
                            <a href="mailto:frenzelglobe@gmail.com" class="link-inverse">frenzelglobe@gmail.com</a>
                            <br /> <a href="callto:+97333669208" class="text-white">+973 33669208</a><br />
                            <a href="callto:+97333669207" class="text-white">+973 33669207</a><br />
                            <nav class="nav social social-white mt-4">
                                <a href="https://x.com/frenzel_globe_?t=g8Gt9_qaEdchdy7qqB09ew&s=09" target="_blank"><i class="uil uil-twitter"></i></a>
                                <a href="https://www.facebook.com/share/1J1QVbx3cn/" target="_blank"><i class="uil uil-facebook-f"></i></a>
                                <a href="https://www.instagram.com/frenzel_globe_trade/profilecard/?igsh=YWVkcWVnMDkyMXU4" target="_blank"><i class="uil uil-instagram"></i></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                    </div>
                    <!-- /.offcanvas-footer -->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other ms-lg-4">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
    <div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
        <div class="offcanvas-header">
            <h3 class="text-white fs-30 mb-0">Frenzel Globe</h3>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pb-6">
            <div class="widget mb-8">
                <p>Frenzel Globe is a leading provider of high-quality electrical consumables and sanitary solutions, dedicated to serving the needs of both residential and commercial clients.</p>
            </div>
            <!-- /.widget -->
            <div class="widget mb-8">
                <h4 class="widget-title text-white mb-3">Contact Info</h4>
                <address> Building 87, Road 326, Shaikh Hamad Avenue <br /> Block 302, Manama Center, Kingdom of Bahrain </address>
                <a href="mailto:frenzelglobe@gmail.com">frenzelglobe@gmail.com</a><br />
                <a href="callto:+97333669208">+973 33669208</a><br />
                <a href="callto:+97333669207">+973 33669207</a><br />
            </div>
            <div class="widget">
                <h4 class="widget-title text-white mb-3">Follow Us</h4>
                <nav class="nav social social-white">
                    <a href="https://x.com/frenzel_globe_?t=g8Gt9_qaEdchdy7qqB09ew&s=09" target="_blank"><i class="uil uil-twitter"></i></a>
                    <a href="https://www.facebook.com/share/1J1QVbx3cn/" target="_blank"><i class="uil uil-facebook-f"></i></a>
                    <a href="https://www.instagram.com/frenzel_globe_trade/profilecard/?igsh=YWVkcWVnMDkyMXU4" target="_blank"><i class="uil uil-instagram"></i></a>
                </nav>
                <!-- /.social -->
            </div>
            <!-- /.widget -->
        </div>
        <!-- /.offcanvas-body -->
    </div>
    <!-- /.offcanvas -->
    <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
            <form class="search-form w-100">
                <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
            </form>
            <!-- /.search-form -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.offcanvas -->
</header>