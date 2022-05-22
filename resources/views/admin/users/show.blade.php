@extends('layouts.appdashboard')

@section('title')
Kerjasa | Tampil User
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Detail User: {{ $user->name }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button onclick="window.print()" class="btn btn-sm btn-outline-secondary">Print this page</button>
            </div>
        </div>
    </div>

    <ul class="list-group mt-3">
            <li class="list-group-item d-flex justify-content-center lh-sm">
            <div class="text-center">
                <small class="text-muted">
                    <img src="{{ $user->avatar }}" style="width: 18rem" alt="...">
                    <div class="row g-3">
                        <div class="col-12 mt-5">
                            <label for="name" class="form-label">Nama</label>
                            <input name="name" type="text" class="form-control" value="{{ $user->name }}" disabled/>
                        </div>
                        <div class="col-12 mt-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="text" class="form-control" value="{{ $user->email }}" disabled/>
                        </div>
                        <div class="col-12 mt-3">
                            <label for="phone" class="form-label">No. Hp</label>
                            <input name="phone" type="text" class="form-control" value="{{ $user->phone }}" disabled/>
                        </div>
                        <div class="col-12 mt-3">
                            <label for="created_at" class="form-label">Bergabung Sejak</label>
                            <input name="created_at" type="text" class="form-control" value="{{ $user->created_at }}" disabled/>
                        </div>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-primary"><i class="fas fa-angle-left"></i>&nbsp;Kembali</a>
                    </div>
                </small>
            </div>
        </li>
    </ul>
</main>

@endsection