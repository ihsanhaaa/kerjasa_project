@extends('layouts.appdashboard') 

@section('title') 
    Kerjasa | Detail Postingan
@endsection 

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Detail Postingan: {{ $post->title }}</h1>
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
                    <img src="{{ asset('storage/' . $post->image) }}" style="width: 18rem" alt="..." />
                    <div class="row g-3">
                        <div class="col-12 mt-5">
                            <label for="name" class="form-label">Nama Kategori</label>
                            <input name="slug" type="text" class="form-control" value="{{ $post->title }}" disabled/>
                        </div>
                        <div class="col-12">
                            <label for="slug" class="form-label">Slug</label>
                            <input name="slug" type="text" class="form-control" value="{{ $post->slug }}" disabled/>
                        </div>
                        <div class="col-12">
                            <label for="description" class="form-label">Deskripsi</label>
                            <input id="description" type="hidden" name="description" value="{{ $post->description }}" disabled>
                            <trix-editor input="description"></trix-editor>
                        </div>
                        <div class="col-12">
                            <label for="slug" class="form-label">Dibuat Pada</label>
                            <input name="slug" type="text" class="form-control" value="{{ $post->created_at }}" disabled/>
                        </div>
                        <div class="col-12">
                            <label for="slug" class="form-label">Diubah Pada</label>
                            <input name="slug" type="text" class="form-control" value="{{ $post->updated_at }}" disabled/>
                        </div>
                        <a href="{{ route('admin.posts.index') }}" class="btn btn-primary"><i class="fas fa-angle-left"></i>&nbsp;Kembali</a>
                    </div>
                </small>
            </div>
        </li>
    </ul>
</main>

@endsection