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
                    @forelse($products as $key => $item)
                    <div class="project item col-md-6 col-xl-4 workshop">
                        <div class="card shadow-lg">
                            <figure class="card-img-top itooltip itooltip-aqua" title="<h5 class='mb-0'>{{ $item['name'] }}</h5>"><a href="{{ route('index') }}"> <img src='{{ asset("/assets/img/products/$item[img]") }}' alt="{{ $item['name'] }}" /></a></figure>
                            <div class="card-body p-7">
                                <div class="post-header">
                                    <div class="post-category text-line mb-2 text-aqua">Product</div>
                                    <h3 class="mb-0">{{ $item['name'] }}</h3>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    @empty
                    @endforelse
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
</section>
@endsection