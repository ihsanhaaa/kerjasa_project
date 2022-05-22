@extends('layouts.appdashboard')

@section('title')
Kerjasa | Edit Postingan
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Edit Postingan: {{ $post->title }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

    <form action="{{ route('admin.posts.update', $post->id) }}" class="needs-validation" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-12">
                <label for="title" class="form-label">Nama Kategori</label>
                <input name="title" type="text" class="form-control" value="{{ $post->title }}"/>
            </div>

            <div class="col-12">
                <label for="slug" class="form-label">Slug</label>
                <input name="slug" type="text" class="form-control" value="{{ $post->slug }}"/>
            </div>

            <div class="col-12">
                <label for="description" class="form-label">Deskripsi</label>
                <input id="description" type="hidden" name="description" value="{{ $post->description }}">
                <trix-editor input="description"></trix-editor>
            </div>

            <div class="col-12">
                <label for="image" class="form-label">Upload Gambar</label>
                @if($post->image)
                    <img src="{{ asset('storage/'. $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif
                <input name="image" type="file" class="form-control" id="image" onchange="previewImage()">
            </div>

        </div>

        <hr class="my-4">

        <button class="btn btn-primary mt-2"><i class="fas fa-edit"></i>&nbsp;Edit Data</button>

    </form>
</main>

<script>

    function previewImage()
    {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }
    
</script>

@endsection