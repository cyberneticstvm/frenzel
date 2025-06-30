@extends("base")
@section("content")

<!-- /header -->
<section class="wrapper image-wrapper bg-cover bg-image bg-xs-none bg-gray" data-image-src="{{ asset('assets/img/photos/bg3.jpg') }}">
    <div class="container pt-17 pb-15 py-sm-17 py-xxl-20">
        <div class="row">
            <div class="col-sm-6 col-xxl-5 text-center text-sm-start" data-cues="slideInDown" data-group="page-title" data-interval="-200" data-delay="500">
                <h2 class="display-1 fs-56 mb-4 mt-0 mt-lg-5 ls-xs pe-xl-5 pe-xxl-0">We bring solutions to make life <span class="underline-3 style-3 yellow">easier</span></h2>
                <p class="lead fs-23 lh-sm mb-7 pe-lg-5 pe-xl-5 pe-xxl-0">We are a creative company that focuses on long term relationships with customers.</p>
                <div><a href="#" class="btn btn-lg btn-primary rounded">Know More</a></div>
            </div>
            <!--/column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<section class="wrapper">
    <div class="container">
        <div class="row mt-10">
            <div class="col-md-12 col-lg-12 col-xxl-12 mx-auto text-center">
                <h2 class="fs-17 text-uppercase text-muted mb-3">Frenzel Globe Trading W.L.L</h2>
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
        <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mb-10 mb-md-12">
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
<section class="wrapper">
    <div class="container">
        <div class="card bg-soft-primary mb-8">
            <div class="card-body p-12">
                <div class="row gx-md-8 gx-xl-12 gy-10">
                    <div class="col-lg-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 395.7" data-inject-url="https://sandbox.elemisthemes.com/assets/img/icons/lineal/email.svg" class="svg-inject icon-svg icon-svg-sm mb-4">
                            <path class="lineal-stroke" d="M483.6 395.7H53.3C23.9 395.7 0 371.9 0 342.4V53.3C0 23.9 23.9 0 53.3 0h405.4C488.1 0 512 23.9 512 53.3v222.8c0 7.9-6.4 14.2-14.2 14.2s-14.2-6.4-14.2-14.2V53.3c0-13.7-11.1-24.8-24.8-24.8H53.3c-13.7 0-24.8 11.1-24.8 24.8v289.2c0 13.7 11.1 24.8 24.8 24.8h430.3c7.9.2 14.1 6.7 13.8 14.6-.2 7.5-6.3 13.6-13.8 13.8z"></path>
                            <path class="lineal-fill" d="M497.8 53.3L256 236.4 14.2 53.3c0-21.6 17.5-39.1 39.1-39.1h405.4c21.6 0 39.1 17.5 39.1 39.1z"></path>
                            <path class="lineal-stroke" d="M256 250.6c-3.1 0-6.1-1-8.6-2.9L5.6 64.6C2.1 61.9 0 57.7 0 53.3 0 23.9 23.9 0 53.3 0h405.4C488.1 0 512 23.9 512 53.3c0 4.4-2.1 8.6-5.6 11.3L264.6 247.7c-2.5 1.9-5.5 2.9-8.6 2.9zM29.3 46.8L256 218.6 482.7 46.8c-2.9-10.9-12.8-18.4-24-18.4H53.3c-11.3.1-21.1 7.6-24 18.4zm454.2 348.7c-3.1 0-6.1-1-8.6-2.9l-99.6-75.4c-6.3-4.7-7.5-13.7-2.7-19.9 4.7-6.3 13.7-7.5 19.9-2.7l99.6 75.4c6.3 4.7 7.5 13.7 2.8 19.9-2.7 3.6-6.9 5.7-11.4 5.6zm-449-4.6c-7.9 0-14.2-6.4-14.2-14.2 0-4.5 2.1-8.7 5.6-11.4l93.5-70.8c6.3-4.7 15.2-3.5 19.9 2.7 4.7 6.3 3.5 15.2-2.7 19.9L43.1 388c-2.5 1.9-5.5 2.9-8.6 2.9z"></path>
                        </svg>
                        <h2 class="display-4 mb-3 pe-lg-10">If you like what you see, let's work together.</h2>
                        <p class="lead pe-lg-12 mb-0">We bring rapid solutions to make the life of our clients easier. Have any questions? Reach out to me from this contact form and We will get back to you shortly.</p>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-6">
                        <form class="contact-form needs-validation" method="post" action="" novalidate="">
                            <div class="messages"></div>
                            <div class="row gx-4">
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_name" type="text" name="name" class="form-control border-0" placeholder="Jane" required="required" data-error="First Name is required.">
                                        <label for="form_name">Name *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your name. </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="form_email" type="email" name="email" class="form-control border-0" placeholder="jane.doe@example.com" required="required" data-error="Valid email is required.">
                                        <label for="form_email">Email *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please provide a valid email address. </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-12">
                                    <div class="form-floating mb-4">
                                        <textarea id="form_message" name="message" class="form-control border-0" placeholder="Your message" style="height: 150px" required=""></textarea>
                                        <label for="form_message">Message *</label>
                                        <div class="valid-feedback"> Looks good! </div>
                                        <div class="invalid-feedback"> Please enter your messsage. </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-12">
                                    <input type="submit" class="btn btn-outline-primary rounded-pill btn-send mb-3" value="Send message">
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </form>
                        <!-- /form -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!--/.card-body -->
        </div>
    </div>
</section>
@endsection