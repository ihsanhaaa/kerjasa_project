@extends('layouts.app')

@section('title')
    Kerjasa | Acara
@endsection

@section('content')
    
<!-- produk -->
<section class="eventpage">
    @if($events->count())
        <div class="container">
            
            <!-- produk -->
            <div class="review">
                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4">
                    @foreach($events as $event)
                    <div class="col">
                        <div class="card shadow-sm mb-4">
                            <a href="/services/{{ $event->slug }}">
                                <div class="position-absolute badge bg-info text-dark mx-2 my-2">{{ $event->category->name }}</div>
                                <img class="card-img-top"
                                    src="{{ asset('storage/' . $event->banner) }}" alt="">
                                <div class="card-body">
                                    <h6 class="judul-events my-1">{{ $event->title }}</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <p class="text-center">Tidak ada acara dalam waktu dekat</p>
    @endif
    </section>

@endsection