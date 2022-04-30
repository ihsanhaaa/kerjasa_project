@extends('layouts.app')

@section('title')
    Kerjasa | Halaman Checkout
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
                                        <small class="text-muted">{{  $product->title }}</small>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0">Benefit:</h6>
                                        <small class="text-muted">
                                            {{  $product->benefit }}
                                        </small>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <h6 class="my-0">Harga:</h6>
                                    <strong>Rp.{{  $product->price }}</strong>
                                </li>
                            </ul>

                        </div>
                        <div class="col-md-7 col-lg-8">
                            <h4 class="mb-3">Info Pemesan</h4>
                            <form action="{{ route('checkout.store', $product->id) }}" class="needs-validation" method="POST">
                                @csrf
                                <div class="row g-3">
                                <div class="col-12">
                                        <label for="name" class="form-label">Nama Lengkap</label>
                                        <input name="name" type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{Auth::user()->name}}"/>
                                        @if ($errors->has('name'))
                                            <p class="text-danger">{{$errors->first('name')}}</p>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input name="email" type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" value="{{ Auth::user()->email }}">
                                        @if ($errors->has('email'))
                                            <p class="text-danger">{{$errors->first('email')}}</p>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="phone" class="form-label">Ho HP</label>
                                        <input name="phone" type="number" class="form-control {{$errors->has('phone') ? 'is-invalid' : ''}}" value="{{ Auth::user()->phone }}"
                                            placeholder="08xxxxxxxxxx">
                                        @if ($errors->has('phone'))
                                            <p class="text-danger">{{$errors->first('phone')}}</p>
                                        @endif
                                    </div>

                                </div>

                                <hr class="my-4">

                                <button class="w-100 btn btn-primary btn-lg mb-5">Bayar Sekarang</button>

                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>

@endsection