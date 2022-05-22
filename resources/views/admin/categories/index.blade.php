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
        <div class="btn-group me-2">
            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i>&nbsp;Tambah Kategori</a>
        </div>    
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Dibuat Pada</th>
                    <th scope="col"></th>
                    <th scope="col">Aksi</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
              @forelse($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>    
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td><a class="badge bg-primary text-decoration-none" href="{{ route('admin.categories.show', $category->id) }}"><i class="fas fa-eye"></i>&nbsp;lihat</a></td>
                    <td><a class="badge bg-warning text-dark text-decoration-none" href="{{ route('admin.categories.edit', $category->id) }}"><i class="fas fa-edit"></i>&nbsp;edit</a></td>
                    <td>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post">
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