@extends('layouts.appdashboard') 

@section('title') 
Kerjasa | Tampil Kategori
@endsection 

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Detail Kategori: {{ $category->name }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button onclick="window.print()" class="btn btn-sm btn-outline-secondary">
                    Print this page
                </button>
            </div>
        </div>
    </div>

    <ul class="list-group mt-3">
        <li class="list-group-item d-flex justify-content-center lh-sm">
            <div class="text-center">
                <small class="text-muted">
                    <img src="{{ asset('storage/' . $category->image) }}" style="width: 18rem" alt="..." />
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name" class="form-label">Nama Kategori</label>
                            <input name="slug" type="text" class="form-control" value="{{ $category->name }}" disabled/>
                        </div>
                        <div class="col-12">
                            <label for="slug" class="form-label">Slug</label>
                            <input name="slug" type="text" class="form-control" value="{{ $category->slug }}" disabled/>
                        </div>
                        <div class="col-12">
                            <label for="slug" class="form-label">Dibuat Pada</label>
                            <input name="slug" type="text" class="form-control" value="{{ $category->created_at }}" disabled/>
                        </div>
                        <div class="col-12">
                            <label for="slug" class="form-label">Diubah Pada</label>
                            <input name="slug" type="text" class="form-control" value="{{ $category->updated_at }}" disabled/>
                        </div>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-primary"><i class="fas fa-angle-left"></i>&nbsp;Kembali</a>
                    </div>
                </small>
            </div>
        </li>
    </ul>
</main>

@endsection