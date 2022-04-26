@extends('layouts.app')

@section('title')
    Kerjasa | Halaman Utama
@endsection

@section('content')
    
<section>
        <div class="pesanan">
            <div class="container">
                <main>
                    <div class="py-5 text-center">
                        <h2>Formulir Pembayaran</h2>
                        <p class="lead">Harap lengkapi Data Pemesan. Dengan mengisi Data Pemesan pihak kerjasa dapat menghubungi konsumen ketika ada masalah dalam pemesanan layanan di Kerjasa.id</p>
                    </div>

                    <div class="row g-5">
                        <div class="col-md-5 col-lg-4 order-md-last">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="story">Info Pemesanan</span>
                            </h4>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0">Nama Layanan:</h6>
                                        <small class="text-muted">Jasa Sewa Zoom 1 Hari</small>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0">Benefit:</h6>
                                        <small class="text-muted">
                                            - Brief description <br>
                                            - Brief description <br>
                                            - Brief description <br>
                                            - Brief description <br>
                                        </small>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <h6 class="my-0">Harga:</h6>
                                    <strong>Rp.20000</strong>
                                </li>
                            </ul>

                        </div>
                        <div class="col-md-7 col-lg-8">
                            <h4 class="mb-3">Info Pemesan</h4>
                            <form class="needs-validation" novalidate>
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <label for="firstName" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="" value=""
                                            required>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="lastName" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="" value=""
                                            required>
                                        <div class="invalid-feedback">
                                            Valid last name is required.
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="">
                                        <div class="invalid-feedback">
                                            Please enter a valid email address for shipping updates.
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="address" class="form-label">Ho HP</label>
                                        <input type="number" class="form-control" id="address"
                                            placeholder="08xxxxxxxxxx" required>
                                        <div class="invalid-feedback">
                                            Please enter your shipping address.
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="address" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" id="address" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Please enter your shipping address.
                                        </div>
                                    </div>

                                </div>

                                <hr class="my-4">

                                <a href="checkout-successs" class="w-100 btn btn-primary btn-lg mb-5">Lanjut Ke Pembayaran</a>

                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>

@endsection