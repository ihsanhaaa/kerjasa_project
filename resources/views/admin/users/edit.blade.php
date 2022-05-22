@extends('layouts.appdashboard')

@section('title')
Kerjasa | Edit User
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Edit User: {{ $user->name }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

    <form action="{{ route('admin.users.update', $user->id) }}" class="needs-validation" method="POST">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-12">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input name="name" type="text" class="form-control" value="{{ $user->name }}"/>
            </div>

            <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" value="{{ $user->email }}"/>
            </div>

            <div class="col-12">
                <label for="phone" class="form-label">No. Hp</label>
                <input name="phone" type="text" class="form-control" value="{{ $user->phone }}"/>
            </div>

        </div>

        <hr class="my-4">

        <button class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;Edit Data</button>

    </form>
</main>

@endsection