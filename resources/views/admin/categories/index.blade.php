@extends('layouts.appdashboard')

@section('title')
Kerjasa | Halaman Kategori
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Kategori</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Dibuat Pada</th>
                </tr>
            </thead>
            <tbody>
              @forelse($categories as $category)
                <tr>
                    <td>1</td>    
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at }}</td>
                </tr>
              @empty
                <h1>Tidak ada data</h1>
              @endforelse
            </tbody>
        </table>
    </div>
</main>

@endsection