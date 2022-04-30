@extends('layouts.app')

@section('title')
    Kerjasa | Layanan
@endsection

@section('content')

<!-- banner -->
<section>
        <div class="banner py-5 text-center container mt-5">
            <div class="p-5 mb-4 bg-light rounded-3" id="pages">
                <div class="container-fluid py-5">

                    <!-- <h1 class="display-5 fw-bold">Custom jumbotron</h1> -->
                    <!-- <p>Halaman Produk</p> -->
                    <button class="btn btn-primary btn-lg" type="button">Example button</button>
                </div>
            </div>
        </div>
</section>
    
<!-- produk -->
<section>
        <div class="container">
            <!-- breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
            <!-- produk -->
            <div class="review">
                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4">
                    @foreach($products as $product)
                    <div class="col">
                        <div class="card shadow-sm mb-4">
                            <a href="/services/{{ $product->slug }}">
                                <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    src="img/product-details-3.jpg" alt="">
                                <div class="card-body">
                                    <h6 class="my-2">{{ $product->title }}</h6>
                                    <small class="text-muted">Paket: {{ $product->package }}</small>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <h6 class="my-0">Rp.{{ $product->price }}</h6>
                                        <span class="badge bg-success">{{ $product->category->name }}</span>
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