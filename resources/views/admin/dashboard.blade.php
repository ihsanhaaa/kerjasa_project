@extends('layouts.appdashboard')

@section('title')
Kerjasa | Dashboard Admin
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halaman Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

    <div class="dashboard-admin">
        <div class="container">
            <div class="review">
                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3">

                    <div class="col">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body text-center"><i class="fas fa-users"></i>
                                <a href="{{ route('admin.users.index') }}" class="text-decoration-none text-black">
                                    @if($users->count())
                                    {{ $users->count() }} Pengguna
                                    @else
                                    <p class="text-center">Tidak ada Pengguna</strong> </p>
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body text-center"><i class="fas fa-shopping-basket"></i>
                                <a href="{{ route('admin.checkouts.index') }}" class="text-decoration-none text-black">
                                    @if($checkouts->count())
                                    {{ $checkouts->count() }} Transaksi
                                    @else
                                    <p class="text-center">Tidak ada Pembelian</strong> </p>
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body text-center"><i class="fas fa-concierge-bell"></i>
                                <a href="{{ route('admin.services.index') }}" class="text-decoration-none text-black">
                                    @if($products->count())
                                    {{ $products->count() }} Product/freelance
                                    @else
                                    <p class="text-center">Tidak ada Produk</strong> </p>
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body text-center"><i class="fas fa-clipboard-list"></i>
                                <a href="{{ route('admin.categories.index') }}" class="text-decoration-none text-black">
                                    @if($categories->count())
                                    {{ $categories->count() }} Kategori
                                    @else
                                    <p class="text-center">Tidak ada Kategoori</strong> </p>
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body text-center"><i class="fas fa-newspaper"></i>
                                <a href="{{ route('admin.posts.index') }}" class="text-decoration-none text-black">
                                    @if($posts->count())
                                    {{ $posts->count() }} Postingan
                                    @else
                                    <p class="text-center">Tidak ada Postingan</strong> </p>
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>








    </div>
</main>

@endsection