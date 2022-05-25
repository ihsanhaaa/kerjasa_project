@extends('layouts.app')

@section('title')
    Kerjasa | {{$post->title}}
@endsection

@section('content')
    
<section>
    
    <div class="container">
        <!-- infol yanan dan slide -->
                <div class="row g-5 detailproduct">
                    <!-- slide gambar -->
                    <div class="col-md-12 col-lg-12">
                        <h4 class="judul mb-3 text-uppercase">{{ $post->title }}</h4>
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('storage/' . $post->image) }}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- detail produk -->
                <div class="row g-5">
                    <!-- deskripsi -->
                    <div class="col-md-12 col-lg-12">
                        <h4 class="judul mt-4"><strong>DESKRIPSI</strong></h4>
                        <small class="text-muted"><i class="fas fa-user"></i>&nbsp;Ditulis oleh: Admin&nbsp; • &nbsp;<i class="far fa-calendar-alt"></i>&nbsp;{{ $post->created_at->format('M d Y') }}</small>
                        <hr class="my-3">
                        {!! $post->description !!}                        
                    </div>
                </div>
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
</section>

@endsection