@extends('layouts.app')

@section('title')
    Kerjasa | Berita
@endsection

@section('content')
    
<section class="judul-post">
    <h2 class="judul text-center mb-4">Berita Terkini</h2>
    @if($posts->count())
        <div class="container">
            <div class="review">
                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3">
                    @foreach($posts as $post)
                    <div class="col">
                        <div class="card shadow-sm mb-4">
                            <a href="/posts/{{ $post->slug }}">
                                <img class="card-img-top"
                                    src="{{ asset('storage/' . $post->image) }}" alt="">
                                <div class="card-body">
                                    <h6 class="judul-products my-1">{{ $post->title }}</h6>
                                    <small class="text-muted"><i class="fas fa-user"></i>&nbsp;Admin&nbsp; • &nbsp;<i class="far fa-calendar-alt"></i>&nbsp;{{ $post->created_at->format('M d Y') }}</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <p class="text-center">Tidak ada Data</p>
    @endif
    </section>

@endsection