@extends('layouts.app')

@section('title')
    Kerjasa | Dashboard User
@endsection

@section('content')
    
<section class="userdashboard">
        <div class="container">
            <div class="bg-light p-5 rounded mt-3">
                <h1>Histori Pembelian</h1>
                <p class="lead">Semua histori pembelian anda akan tampil disini.</p>
            </div>
        </div>
    </section>

    <main class="container">

        <div class="my-3 p-3 bg-light rounded shadow-sm">
            @include('components.alert')
            <h6 class="border-bottom pb-2 mb-0">Suggestions</h6>
            @forelse($checkouts as $checkout)
                <div class="d-flex text-muted pt-3">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff"
                            dy=".3em">32x32</text>
                    </svg>

                    <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                        <div class="d-flex justify-content-between">
                            <strong class="text-gray-dark">{{ $checkout->Product->title }}</strong>
                            <strong class="text-gray-dark">Rp.{{ $checkout->Product->price }}</strong>
                            <!-- <a href="#"><span class="badge bg-primary">{{ $checkout->Product->price }}</span></a> -->
                            <a href="#">Follow</a>
                            <a href="https://wa.me/089602461010?text=Hi, saya ingin bertanya layanan {{$checkout->Product->title}}" class="btn btn-primary" target="_blank">Hubungi Freelancer</a>
                        </div>
                        <span class="d-block">{{ $checkout->created_at->format('M d, Y') }}</span>
                    </div>
                </div>
            @empty
                <h1>Tidak ada data</h1>
            @endforelse
            
        </div>
    </main>

@endsection