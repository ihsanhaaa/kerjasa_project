@extends('layouts.app')

@section('title')
    Kerjasa | Detail Layanan
@endsection

@section('content')
    
<section>
        <div class="container">
            <main>
                <!-- breadcrumb -->
                <nav class="detailproduct" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>

                <!-- infol yanan dan slide -->
                <div class="row g-5">
                    <!-- slide gambar -->
                    <div class="col-md-7 col-lg-8">
                        <h4 class="judul mb-3">{{ $product->title }}</h4>
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/product-details-3.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/product-details-4.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/product-details-3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
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

                        <a href="{{ route('checkout.create', $product->slug) }}" class="w-100 btn btn-primary btn-lg">Pesan Sekarang</a>

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
                            <div class="text-center">
                                <p>Bagikan Halaman Ini</p>
                            </div>
                            <li class="d-flex justify-content-center lh-sm">
                                <a class="btn" href="whatsapp://send?text=The text to share!"
                                    data-action="share/whatsapp/share">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                                <a class="btn" href="#">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a class="btn" href="instagram://user?username={USERNAME}" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>



                <!-- detail produk -->
                <div class="row g-5">


                    <!-- deskripsi -->
                    <div class="col-md-7 col-lg-8">
                        <h4 class="mb-3">Deskripsi</h4>
                        {!! $product->description !!}

                        <h4 class="mt-4">Profil Freelancer</h4>
                        <div class="list-group my-3">
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="img/fanny_photo.png" class="photo-profile rounded" alt="">
                                        </div>
                                        <div class="col-9 mx-auto">
                                            <p class="text-muted my-2"><strong>{{ $product->name_profil }}</strong></p>
                                            <small class="text-muted">{{ $product->bio_profil }}</small>
                                            <p class="text-muted mt-1"><strong>Follow:</strong>
                                                <a class="btn" href="#">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                                <a class="btn" href="instagram://user?username={USERNAME}"
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

            </main>
        </div>
    </section>

@endsection