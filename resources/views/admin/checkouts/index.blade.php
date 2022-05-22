@extends('layouts.appdashboard')

@section('title')
    Kerjasa | Halaman Histori Transaksi
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
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
              @forelse($checkouts as $checkout)
                <tr>
                    <td>{{ $checkout->id }}</td>
                    <td>{{ $checkout->User->name }}</td>
                    <td><a href="https://wa.me/+{{$checkout->User->phone}}?text=Hi, saya Randa admin dari kerjasa.id" target="_blank">{{$checkout->User->phone}}</a></td>
                    <td>{{ $checkout->Product->title }}</td>
                    <td>{{$checkout->payment_status}}</td>
                    <td><a href="mailto:{{ $checkout->User->email }}" target="_blank">{{ $checkout->User->email }}</a></td>
                    <td>{{ $checkout->User->created_at }}</td>
                    <td>Rp.{{ $checkout->Product->price }}</td>
                    <td>
                        <form action="{{ route('admin.checkouts.destroy', $checkout->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="badge bg-danger"><i class="fas fa-trash-alt"></i>&nbsp;Hapus</button>
                        </form>
                    </td>
                </tr>
              @empty
                <h4 class="text-center">Tidak ada data</h4>
              @endforelse
            </tbody>
        </table>
    </div>
</main>

@endsection