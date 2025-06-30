@extends("base")
@section("content")
<!-- /section -->
<section class="wrapper">
    <div class="container pt-17 py-sm-17 py-xxl-20">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xxl-12 mx-auto text-center">
                <h2 class="fs-17 text-uppercase text-muted mb-3">Frenzel Globe Trading W.L.L - Featured Products</h2>
                <p class="mb-5 px-xl-12">Power up your life with the our world class electrical consumables, designed for performance, durability, and safety. Whether you’re upgrading your home setup or working on a professional installation, this high-quality electrical device delivers reliable functionality every time.</p>
            </div>
            <div class="grid grid-view projects-masonry">
                <div class="row g-8 g-lg-10 isotope">
                    <div class="project item col-md-6 col-xl-4 workshop">
                        <div class="card shadow-lg">
                            <figure class="card-img-top itooltip itooltip-aqua" title='<h5 class="mb-0">ARMORED CABLES & SINGLE CORE WIRES</h5>'><a href="{{ route('index') }}"> <img src="{{ asset('/assets/img/products/pro1.svg') }}" alt="ARMORED CABLES & SINGLE CORE WIRES" /></a></figure>
                            <div class="card-body p-7">
                                <div class="post-header">
                                    <div class="post-category text-line mb-2 text-aqua">Product</div>
                                    <h3 class="mb-0">ARMORED CABLES & SINGLE CORE WIRES</h3>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.project -->
                    <div class="project item col-md-6 col-xl-4 product">
                        <div class="card shadow-lg">
                            <figure class="card-img-top itooltip itooltip-purple" title='<h5 class="mb-0">CABLE LUGS, GLANDS AND ACCESSORIES</h5>'><a href="{{ route('index') }}"> <img src="{{ asset('/assets/img/products/pro2.svg') }}" alt="CABLE LUGS, GLANDS AND ACCESSORIES" /></a></figure>
                            <div class="card-body p-7">
                                <div class="post-header">
                                    <div class="post-category text-line mb-2 text-purple">Product</div>
                                    <h3 class="mb-0">CABLE LUGS, GLANDS AND ACCESSORIES</h3>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.project -->
                    <div class="project item col-md-6 col-xl-4 product">
                        <div class="card shadow-lg">
                            <figure class="card-img-top itooltip itooltip-yellow" title='<h5 class="mb-0">NETWORK CABLE (CAT6)</h5>'><a href="{{ route('index') }}"> <img src="{{ asset('/assets/img/products/pro3.svg') }}" alt="NETWORK CABLE (CAT6)" /></a></figure>
                            <div class="card-body p-7">
                                <div class="post-header">
                                    <div class="post-category text-line mb-2 text-yellow">Product</div>
                                    <h3 class="mb-0">NETWORK CABLE<br />(CAT6)</h3>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.project -->
                    <div class="project item col-md-6 col-xl-4 workshop">
                        <div class="card shadow-lg">
                            <figure class="card-img-top itooltip itooltip-red" title='<h5 class="mb-0">CABLE MARKER</h5>'><a href="{{ route('index') }}"> <img src="{{ asset('/assets/img/products/pro4.svg') }}" alt="CABLE MARKER" /></a></figure>
                            <div class="card-body p-7">
                                <div class="post-header">
                                    <div class="post-category text-line mb-2 text-red">Product</div>
                                    <h3 class="mb-0">CABLE MARKER</h3>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.project -->
                    <div class="project item col-md-6 col-xl-4 still-life">
                        <div class="card shadow-lg">
                            <figure class="card-img-top itooltip itooltip-orange" title='<h5 class="mb-0">PVC COATED GI FLEXIBLE PIPE</h5>'><a href="{{ route('index') }}"> <img src="{{ asset('/assets/img/products/pro5.svg') }}" alt="PVC COATED GI FLEXIBLE PIPE" /></a></figure>
                            <div class="card-body p-7">
                                <div class="post-header">
                                    <div class="post-category text-line mb-2 text-orange">Product</div>
                                    <h3 class="mb-0">PVC COATED GI FLEXIBLE PIPE</h3>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.project -->
                    <div class="project item col-md-6 col-xl-4 product">
                        <div class="card shadow-lg">
                            <figure class="card-img-top itooltip itooltip-leaf" title='<h5 class="mb-0">LUGS AND FERRULES</h5>'><a href="{{ route('index') }}"> <img src="{{ asset('/assets/img/products/pro6.svg') }}" alt="LUGS AND FERRULES" /></a></figure>
                            <div class="card-body p-7">
                                <div class="post-header">
                                    <div class="post-category text-line mb-2 text-leaf">Product</div>
                                    <h3 class="mb-0">LUGS AND FERRULES</h3>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.project -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
</section>
@endsection