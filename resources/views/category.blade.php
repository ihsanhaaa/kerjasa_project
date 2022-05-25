@extends('layouts.app')

@section('title')
    Kerjasa | Kategori: {{ $category }}
@endsection

@section('content')

<section class="judul-post">
    @if($products->count())
        <div class="container">
            <h1 class="juduldashboard text-center mb-5">Kategori: {{ $category }}</h1>
            <div class="review">
                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4">
                    @foreach($products as $product)
                    <div class="col">
                        <div class="card shadow-sm mb-4">
                            <a href="/services/{{ $product->slug }}">
                                <div class="position-absolute badge bg-info text-dark mx-2 my-2">{{ $product->category->name }}</div>
                                <img class="card-img-top"
                                    src="{{ asset('storage/' . $product->image) }}" alt="">
                                <div class="card-body">
                                    <h6 class="judul-products my-1">{{ $product->title }}</h6>
                                    <small class="text-muted">Paket: {{ $product->package }}</small>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <h6 class="price-products my-0">Rp.{{ $product->price }}</h6>
                                        <!-- <span class="badge bg-success">{{ $product->category->name }}</span> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <p class="text-center">Tidak ada Data Kategori</p>
    @endif
</section>

@endsection