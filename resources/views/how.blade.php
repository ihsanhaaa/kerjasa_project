@extends('layouts.app')

@section('title')
    Kerjasa | Cara Menggunakan Kerjasa
@endsection

@section('content')
<section class="benefits">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <!-- <p class="story">
                        Benefit memilih – menjual pekerjaan kamu lewat Kerjasa
                    </p> -->
                    <h2 class="judul-how">
                        Benefit memilih – menjual pekerjaan kamu lewat Kerjasa
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="img/ic_globe.png" class="icon" alt="">
                        <h3 class="title">
                            Trusted
                        </h3>
                        <p class="support">
                            Kami hanya memilih freelancer yang terpercaya
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="img/ic_globe-1.png" class="icon" alt="">
                        <h3 class="title">
                            A.I Guideline
                        </h3>
                        <p class="support">
                            Jangan khawatir Pemberi Kerja akan membayar freelancers atau tidak.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="img/ic_globe-2.png" class="icon" alt="">
                        <h3 class="title">
                            Coordination
                        </h3>
                        <p class="support">
                            Tidak perlu khawatir jika Freelancer sudah menerima uang namun Pemberi Kerja belum menerima pekerja
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="img/ic_globe-3.png" class="icon" alt="">
                        <h3 class="title">
                            Future Job
                        </h3>
                        <p class="support">
                            Tim kami siap membantu kapanpun anda membutuhkan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="steps">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <!-- <p class="story">
                        Benefit memilih – menjual pekerjaan kamu lewat Kerjasa
                    </p> -->
                    <h2 class="judul-how">
                        Bagaimana cara menggunakan Kerjasa ?
                    </h2>
                </div>
            </div>
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{ asset('img/gambar1.png') }}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <h2 class="sub-judul-how">
                        1. Pilih pekerjaan yang Anda inginkan
                    </h2>
                    <p class="support">
                        Learn from anyone around the <br> world and get a new skills
                    </p>
                </div>
            </div>
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-left copywriting pl-150">
                    <h2 class="sub-judul-how">
                        2. Diskusikan pekerjaan dengan detil kepada freelancer
                    </h2>
                    <p class="support">
                        Each of you will be joining the private group and also <br> working together with team members on project
                    </p>
                </div>
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{ asset('img/gambar2.png') }}" class="cover" alt="">
                </div>
            </div>
            <div class="row item-step">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{ asset('img/gambar3.png') }}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <h2 class="sub-judul-how">
                        3. Melakukan pembayaran via sistem kami
                    </h2>
                    <p class="support">
                        Learn how to speaking in public to demonstrate your <br> final project and receive the important feedbacks
                    </p>
                </div>
            </div>
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-left copywriting pl-150">
                    <h2 class="sub-judul-how">
                        4. Tunggu freelancer mengirimkan pekerjaannya kepada Anda
                    </h2>
                    <p class="support">
                        Each of you will be joining the private group and also <br> working together with team members on project
                    </p>
                </div>
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{ asset('img/gambar4.png') }}" class="cover" alt="">
                </div>
            </div>
            
        </div>
    </section>
@endsection