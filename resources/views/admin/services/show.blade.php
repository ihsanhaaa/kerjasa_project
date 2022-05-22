@extends('layouts.appdashboard')

@section('title')
Kerjasa | Tampil Freelance
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Tampil Freelance</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Paket</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Nama Freelancer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->packet }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->name_profil }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="row g-3">
        <div class="col-12">
            <label for="category_id" class="form-label">Kategori</label>
            <input name="category_id" type="text" class="form-control" value="{{ $product->category_id }}" />
        </div>
        <div class="col-12">
            <label for="title" class="form-label">Nama Freelance</label>
            <input name="title" type="text" class="form-control" value="{{ $product->price }}" />
        </div>
        <div class="col-12">
            <label for="slug" class="form-label">Slug</label>
            <input name="slug" type="text" class="form-control" />
        </div>
        <div class="col-12">
            <label for="image" class="form-label">Gambar</label>
            <input name="image" type="text" class="form-control" />
        </div>
        <div class="col-12">
            <label for="package" class="form-label">Paket</label>
            <input name="package" type="text" class="form-control" />
        </div>
        <div class="col-12">
            <label for="benefit" class="form-label">Benefit</label>
            <input name="benefit" type="text" class="form-control" />
        </div>
        <div class="col-12">
            <label for="price" class="form-label">Harga</label>
            <input name="price" type="number" class="form-control" />
        </div>
        <div class="col-12">
            <label for="description" class="form-label">Deskripsi</label>
            <input name="description" type="text" class="form-control" />
        </div>
        <div class="col-12">
            <label for="name_profil" class="form-label">Nama Freelancer</label>
            <input name="name_profil" type="text" class="form-control" />
        </div>
        <div class="col-12">
            <label for="bio_profil" class="form-label">Bio Freelancer</label>
            <input name="bio_profil" type="text" class="form-control" />
        </div>
        <div class="col-12">
            <label for="fb_profil" class="form-label">FB Freelancer</label>
            <input name="fb_profil" type="text" class="form-control" />
        </div>
        <div class="col-12">
            <label for="ig_profil" class="form-label">IG Freelancer</label>
            <input name="ig_profil" type="text" class="form-control" />
        </div>
    </div>
</main>

@endsection