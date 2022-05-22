@extends('layouts.appdashboard')

@section('title')
Kerjasa | Tambah Freelance
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Tambah Freelance</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

    <form action="{{ route('admin.services.store') }}" class="needs-validation" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <div class="col-12">
                <label for="category_id" class="form-label">Kategori</label>
                <input name="category_id" type="text" class="form-control" placeholder="Disesuaikan dengan kategori yang ada pada Halaman Kategori, misal 1, 2" required/>
            </div>
            <div class="col-12">
                <label for="title" class="form-label">Nama Pekerjaan</label>
                <input name="title" type="text" class="form-control" required/>
            </div>
            <div class="col-12">
                <label for="slug" class="form-label">Slug</label>
                <input name="slug" type="text" class="form-control" placeholder="Disesuaikan dengan judul, huruf kecil semua, spasi diganti -" required/>
            </div>
            <div class="col-12">
                <label for="image" class="form-label">Upload Gambar (Maks 3 MB)</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input name="image" type="file" class="form-control" id="image" onchange="previewImage()">
            </div>
            <div class="col-12">
                <label for="package" class="form-label">Paket yang ditawarkan</label>
                <input name="package" type="text" class="form-control" required/>
            </div>
            <div class="col-12">
                <label for="benefit" class="form-label">Benefit</label>
                <input name="benefit" type="text" class="form-control" required/>
            </div>
            <div class="col-12">
                <label for="price" class="form-label">Harga</label>
                <input name="price" type="number" class="form-control" placeholder="Misal 15000" required/>
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Deskripsi</label>
                <input id="description" type="hidden" name="description" required>
                <trix-editor input="description"></trix-editor>
            </div>
            <div class="col-12">
                <label for="name_profil" class="form-label">Nama Freelancer</label>
                <input name="name_profil" type="text" class="form-control" required/>
            </div>
            <div class="col-12">
                <label for="bio_profil" class="form-label">Biografi Singkat Freelancer</label>
                <input name="bio_profil" type="text" class="form-control" required/>
            </div>
            <div class="col-12">
                <label for="fb_profil" class="form-label">FB Freelancer</label>
                <input name="fb_profil" type="text" class="form-control" placeholder="Username Fb" required/>
            </div>
            <div class="col-12">
                <label for="ig_profil" class="form-label">IG Freelancer</label>
                <input name="ig_profil" type="text" class="form-control" placeholder="Username Ig" required/>
            </div>
        </div>
        <hr class="my-4">
        <button class="btn btn-primary"><i class="fas fa-plus"></i>&nbsp;Tambah Data</button>
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