@extends('layouts.app')

@section('title')
    Kerjasa | Product
@endsection

@section('content')
    
    <section class="banner" id="home">
        <div class="px-4 pt-5 my-5 text-center">
            <!-- <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button> -->
            <div class="col-lg-6 mx-auto">

                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button>
                    <!-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> -->
                </div>
            </div>
        </div>
    </section>

    <section>
      <h1>Halaman Kategori: {{ $category }}</h1>
        <div class="container">
            <div class="row g-5">

                <div class="review col-md-7 col-lg-8">
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach($products as $product)
                            <div class="col">
                                <div class="card shadow-sm">
                                    <a href="/products/{{ $product->slug }}">
                                        <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                            src="img/product-details-3.jpg" alt="">
                                        <div class="card-body">
                                            <h6 class="my-2">{{ $product->title }}</h6>
                                            <small class="text-muted">Paket: {{ $product->package }}</small><br>
                                            <small class="text-muted">Kategori: {{ $product->category->name }}</small>
                                            <div class="d-flex justify-content-between align-items-center mt-2">
                                                <h6 class="my-0">Rp.{{ $product->price }}</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>

@endsection