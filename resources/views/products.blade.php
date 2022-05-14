@extends('layouts.app')

@section('title')
    Kerjasa | Layanan
@endsection

@section('content')

<!-- banner -->
<section>
        <div class="product py-5 text-center container">
            <div class="p-5 mb-0 bg-light rounded-3" id="pages">
                <div class="container-fluid py-5">

                    <!-- <h1 class="display-5 fw-bold">Custom jumbotron</h1> -->
                    <!-- <p>Halaman Produk</p> -->
                    <!-- <button class="btn btn-primary btn-lg" type="button">Example button</button> -->

                    <div class="modal fade" id="pencarian" aria-hidden="true"
                        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalToggleLabel">Pencarian</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/services" method="get">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Cari apasaja" name="search"
                                                value="{{ request('search') }}">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i>&nbsp;Cari</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary" data-bs-toggle="modal" href="#pencarian"><i class="fas fa-search"></i>&nbsp; Pencarian</a>

                </div>
            </div>
        </div>
</section>
    
<!-- produk -->
<section>
    @if($products->count())
        <div class="container">
            
            <!-- produk -->
            <div class="review">
                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4">
                    @foreach($products as $product)
                    <div class="col">
                        <div class="card shadow-sm mb-4">
                            <a href="/services/{{ $product->slug }}">
                                <img class="card-img-top"
                                    src="{{ asset('storage/' . $product->image) }}" alt="">
                                <div class="card-body">
                                    <h6 class="my-2">{{ $product->title }}</h6>
                                    <small class="text-muted">Paket: {{ $product->package }}</small>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <h6 class="my-0">Rp.{{ $product->price }}</h6>
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
        <p class="text-center">Tidak ada Post</p>
    @endif
    </section>

@endsection