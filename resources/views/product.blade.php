@extends('layouts.app')

@section('title')
    Kerjasa | Detail Layanan
@endsection

@section('content')
    
<section>
        <div class="container">
            <main>

                <!-- infol yanan dan slide -->
                <div class="row g-5 detailproduct">
                    <!-- slide gambar -->
                    <div class="col-md-7 col-lg-8">
                        <h4 class="judul mb-3 text-uppercase">{{ $product->title }}</h4>
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/' . $product->image) }}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- info Layanan -->
                    <div class="col-md-5 col-lg-4 order-md-last">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="story">Info Layanan</span>
                        </h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Nama Layanan:</h6>
                                    <small class="text-muted">{{ $product->title }}</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Paket:</h6>
                                    <small class="text-muted">
                                    {{ $product->package }}
                                    </small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">Benefit:</h6>
                                    <small class="text-muted">
                                        {{ $product->benefit }}
                                    </small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <h6 class="my-0">Harga:</h6>
                                <strong>Rp.{{ $product->price }}</strong>
                            </li>
                        </ul>
                        
                        <a href="{{ route('checkout.create', $product->slug) }}" class="w-100 btn btn-primary" target="_blank">
                            Checkout
                        </a>

                        <ul class="list-group mt-3">
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div class="text-center">
                                    <small class="text-muted">Tim support siap membantu untuk menindaklanjuti pekerjaan
                                        dan jaminan uang kembali. </small>
                                </div>
                            </li>
                        </ul>

                        <ul class="share list-group mt-3">
                            <hr class="my-3">
                            <p class="text-center">Bagikan Halaman Ini :</p>
                            <li class="d-flex justify-content-center lh-sm">
                                <a class="btn" href="https://api.whatsapp.com/send?text={{ urlencode(url()->current()) }}" target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- detail produk -->
                <div class="row g-5">
                    <!-- deskripsi -->
                    <div class="col-md-7 col-lg-8">
                        <h4 class="judul my-3"><strong>DESKRIPSI</strong></h4>
                        <hr class="my-3">
                        {!! $product->description !!}
                        <h4 class="judul mt-5"><strong>PROFIL FREELANCER</strong></h4>
                        <div class="list-group my-3">
                            <div class="profil list-group-item">
                                <div class="row">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="{{ asset('img/person.png') }}" class="photo-profile rounded" alt="">
                                        </div>
                                        <div class="col-9 mx-auto">
                                            <p class="text-muted my-2"><strong>{{ $product->name_profil }}</strong></p>
                                            <small class="text-muted">{{ $product->bio_profil }}</small>
                                            <p class="text-muted mt-1"><strong>Follow:</strong>
                                                <a class="btn" href="https://web.facebook.com/{{ $product->fb_profil }}"
                                                    target="_blank">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                                <a class="btn" href="https://www.instagram.com/{{ $product->ig_profil }}"
                                                    target="_blank">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </section>

@endsection