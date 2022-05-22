@extends('layouts.appdashboard')

@section('title')
Kerjasa | Halaman Freelance
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Freelance</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button onclick="window.print()" class="btn btn-sm btn-outline-secondary">Print this page</button>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <div class="btn-group me-2">
            <a href="{{ route('admin.services.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i>&nbsp;Tambah Freelance</a>
        </div>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kategori</th>
                    <th scope="col"></th>
                    <th scope="col">Harga</th>
                    <th scope="col">Nama Freelancer</th>
                </tr>
            </thead>
            <tbody>
              @forelse($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->category->name }}</td> 
                    <td>{{ $product->packet }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->name_profil }}</td>
                </tr>
              @empty
                <h4 class="text-center">Tidak ada data</h4>
              @endforelse
            </tbody>
        </table>
    </div>
</main>

@endsection