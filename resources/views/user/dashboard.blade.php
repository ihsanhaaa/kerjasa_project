@extends('layouts.app')

@section('title')
    Kerjasa | Dashboard User
@endsection

@section('content')
    
<section class="userdashboard">
        <div class="container">
            <div class="bg-light p-5 rounded">
                <h1>Histori Pembelian</h1>
                <p class="lead">Halo {{Auth::user()->name}}, semua histori pembelian anda akan tampil disini. Setelah melakukan pembayaran admin akan memproses layanan yang anda beli, terima kasih.</p>
            </div>
        </div>
    </section>

    <main class="container">

    <div class="table-responsive bg-light rounded shadow-sm mt-4">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Layanan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Bayar</th>
                    <th scope="col">Kontak Admin</th>
                </tr>
            </thead>
            <tbody>
                @include('components.alert')
              @forelse($checkouts as $checkout)
                <tr>
                    <td>1</td>    
                    <td>
                        <strong class="text-gray-dark">{{ $checkout->Product->title }}</strong>
                    </td>
                    <td>
                        <strong class="text-gray-dark">Rp.{{ $checkout->Product->price }}</strong>
                    </td>
                    <td>
                        <strong>{{$checkout->payment_status}}</strong>
                    </td>
                    <td>
                        <span class="d-block">{{ $checkout->created_at->format('M d, Y') }}</span>
                    </td>
                    <td>
                        @if ($checkout->payment_status == 'waiting')
                                <a href="{{$checkout->midtrans_url}}" class="btn btn-primary">Bayar Sekarang</a>
                        @endif
                    </td>
                    <td>
                        <a href="https://wa.me/+6285754812451?text=Hi, saya ingin bertanya layanan {{$checkout->Product->title}}" class="btn btn-primary" target="_blank">Hubungi Admin</a>
                    </td>
                </tr>
              @empty
                <h3 class="text-center">Tidak ada histori pembelian</h3>
              @endforelse
            </tbody>
        </table>
    </div>

    </main>

@endsection