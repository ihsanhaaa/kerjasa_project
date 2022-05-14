@extends('layouts.appdashboard')

@section('title')
    Kerjasa | Dashboard Admin
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Histori Transaksi</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button onclick="window.print()" class="btn btn-sm btn-outline-secondary">Print this page</button>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No. Hp</th>
                    <th scope="col">Layanan</th>
                    <th scope="col">Status Pembayaran</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tanggal Transaksi</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody>
              @forelse($checkouts as $checkout)
                <tr>
                    <td>1</td>    
                    <td>{{ $checkout->User->name }}</td>
                    <td><a href="https://wa.me/+{{$checkout->User->phone}}?text=Hi, saya Randa admin dari kerjasa.id" target="_blank">{{$checkout->User->phone}}</a></td>
                    <td>{{ $checkout->Product->title }}</td>
                    <td>{{$checkout->payment_status}}</td>
                    <td>{{ $checkout->User->email }}</td>
                    <td>{{ $checkout->User->created_at }}</td>
                    <td>Rp.{{ $checkout->Product->price }}</td>
                </tr>
              @empty
                <h1>Tidak ada data</h1>
              @endforelse
            </tbody>
        </table>
    </div>
</main>

@endsection