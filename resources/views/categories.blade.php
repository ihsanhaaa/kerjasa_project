@extends('layouts.app')

@section('title')
    Kerjasa | Semua Kategori
@endsection

@section('content')

<section class="judul-post">
    @if($categories->count())
        <div class="container">
            <h1 class="juduldashboard text-center mb-5">Semua Kategori</h1>
            <!-- produk -->
            <div class="review">
                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4">
                    @foreach($categories as $category)
                    <div class="col">
                        <div class="card shadow-sm mb-4">
                            <a href="/categories/{{ $category->slug }}">
                                
                                <img class="card-img-top"
                                    src="{{ asset('storage/' . $category->image) }}" alt="">
                                <div class="card-body">
                                    <h6 class="judul-products my-1 text-center">{{ $category->name }}</h6>
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