@extends("base")
@section("content")
<section class="wrapper">
    <div class="container pt-17 mb-10">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xxl-12 mx-auto text-center">
                <h2 class="fs-17 text-uppercase text-muted mb-3">Frenzel Globe Trading W.L.L - About Us</h2>
                <p class="mb-5 px-xl-12">Frenzel Globe is a leading provider of high-quality electrical consumables and sanitary solutions, dedicated to serving the needs of both residential and commercial clients. With a commitment to innovation, reliability, and customer satisfaction, we offer a comprehensive range of products that meet the highest standards of quality and performance.</p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<section class="wrapper bg-white">
    <div class="container">
        <div class="row gx-md-8 gx-xl-12 align-items-center mb-10 mb-md-12">
            <div class="col-lg-6">
                <div class="row gx-md-5 gy-5">
                    <div class="col-md-6">
                        <figure class="rounded"><img src="{{ asset('/assets/img/photos/g14.jpg') }}" srcset="./assets/img/photos/g14@2x.jpg 2x') }}" alt="Our Values"></figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 align-self-end">
                        <figure class="rounded"><img src="{{ asset('/assets/img/photos/g15.jpg') }}" srcset="{{ asset('/assets/img/photos/g15@2x.jpg 2x') }}" alt="Our Mission"></figure>
                    </div>
                    <!--/column -->
                    <div class="col-12">
                        <figure class="rounded mx-md-5"><img src="{{ asset('/assets/img/photos/g16.jpg') }}" srcset="{{ asset('/assets/img/photos/g16@2x.jpg 2x') }}" alt="Our Vision"></figure>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="fs-15 text-uppercase text-muted mb-3">OUR VALUES</h2>
                <p>Innovation: We thrive on pushing boundaries and exploring new frontiers. Innovation is at the core of everything we do, driving us to create products that not only meet but exceed expectations.</p>
                <h2 class="fs-15 text-uppercase text-muted mb-3">CUSTOMER FOCUS</h2>
                <p class="mb-6">Your satisfaction is our priority. We are dedicated to providing exceptional customer experiences trough reliable products, transparent communication, and responsive support.</p>
                <h2 class="fs-15 text-uppercase text-muted mb-3">OUR VISION</h2>
                <p class="mb-6">Frenzel Globe Trading W.L.L envisions a connected, sustainable tomorrow. We strive to redefine connectivity, embrace sustainable practices, empower communities, and uphold a standard of excellence that sets new benchmarks in the industry.</p>
                <h2 class="fs-15 text-uppercase text-muted mb-3">OUR MISSION</h2>
                <p class="mb-6">Our mission is to illuminate lives and empower futures. Through innovation, sustainability, and customer- centric practices, Frenzel Globe Trading W.L.L is committed to providing smart solutions that enhance the way you live and work.</p>
            </div>
            <!--/column -->
        </div>
    </div>
    <!-- /.container -->
</section>
@endsection