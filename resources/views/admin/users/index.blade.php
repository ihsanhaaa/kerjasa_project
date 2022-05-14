@extends('layouts.appdashboard')

@section('title')
Kerjasa | Dashboard Admin
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman User</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button onclick="window.print()" class="btn btn-sm btn-outline-secondary">Print this page</button>
            </div>
        </div>
    </div>

    <form action="" method="get">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="cari user..." name="search" value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">No. Hp</th>
                    <th scope="col">Bergabung Sejak</th>
                </tr>
            </thead>
            <tbody>
              @forelse($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="https://wa.me/+{{ $user->phone }}?text=Hi, saya Randa admin dari kerjasa.id" target="_blank">{{ $user->phone }}</a></td>
                    <td>{{ $user->created_at }}</td>
                </tr>
              @empty
                <h1>Tidak ada data</h1>
              @endforelse
            </tbody>
        </table>
    </div>
</main>

@endsection