@extends('layouts.app')
@section('title', 'Welcome')
@section('content')

<!-- start hero section -->
<div class="hero-image">
    <div class="hero-content">
        <div class="col-md-4 hero-text">
            <h3>
                Welcome to the site
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, assumenda. Culpa, libero.</p>
            <button class="btn custom-border my-2 my-sm-0">Shop</button>
            <button class="btn custom-border my-2 my-sm-0">Contact Us</button>
        </div>
    </div>
</div>
<!-- end hero section -->
<!-- start page content -->
<div class="container">
    <div class="content-head">
        <h2 style="text-align:center; font-weight: bold">Ecommerce</h2>
        <p style="text-align: center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam accusamus eos quibusdam, esse voluptates voluptatibus id corporis facere neque amet alias molestias itaque ex porro architecto blanditiis distinctio maxime laboriosam.</h2>
    </div>
    <section class="featured-products-section">
        <h2 class="header text-center">Featured Products</h2>

        <!-- start products row -->
        <div class="row">
            @foreach ($products as $product)
                <!-- start single product -->
                <div class="col-md-6 col-sm-12 col-lg-4 product">
                    <a href="{{ route('shop.show', $product->slug) }}" class="custom-card">
                        <div class="card view overlay zoom">
                            <img src="{{ productImage($product->image) }}" class="card-img-top img-fluid product-frame" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ \Illuminate\Support\Str::limit($product->name, 15, '...') }}
                                    <span class="float-right">$ {{ format($product->price) }}</span>
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single product -->
            @endforeach
        </div>
    </section>

    {{-- <style>

    </style> --}}

    <!-- end products row -->
    <div class="show-more">
        <a href="{{ route('shop.index') }}">
            <button class="btn custom-border-n">Show more</button>
        </a>
    </div>
    <hr>
    <h2 class="header text-center">Hot Sales</h2>
        <!-- start products row -->
        <div class="row hot-deals">
            @foreach ($hotProducts as $product)
                <!-- start single product -->
                <div class="col-md-6 col-sm-12 col-lg-4 product">
                    <a href="{{ route('shop.show', $product->slug) }}" class="custom-card">
                        <div class="card view overlay zoom">
                            <img src="{{ productImage($product->image) }}" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 style="color: black" class="card-title">{{ $product->name }}<span class="float-right">$ {{ format($product->price) }}</span></h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- end single product -->
            @endforeach
        </div>

    <!-- end products row -->
    <br>
</div>
<!-- end page content -->

@endsection
