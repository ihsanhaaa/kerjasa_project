@extends('layouts.app')

@section('title')
    Kerjasa | Pembayaran Berhasil
@endsection

@section('content')
    
<section class="checkout">
        <div class="container">
            <div class="row text-center">
                
                <div class=" col-lg-12 col-12 header-wrap my-5">
                    <div class="d-flex justify-content-center lh-sm">
                        <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_jbrw3hcz.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" autoplay></lottie-player>
                    </div>
                    <h2 class="primary-header ">
                        Pembayaran Sukses!
                    </h2>
                    <a href="{{ route('dashboard') }}" class="btn btn-primary my-4">
                        My Dashboard
                    </a>
                </div>
            </div>
        </div>
</section>

@endsection