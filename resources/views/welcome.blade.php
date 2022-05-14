@extends('layouts.app')

@section('title')
    Kerjasa | Beranda
@endsection

@section('content')
<!-- banner -->
<section id="home">
    <div class="banner py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">

                <div class="homepage">
                    <p class="story">
                    Kami memiliki profesional freelancer
                    </p>

                    <div class="content">
                        <h1 class="header"></h1>
                    </div>
                    <p class="support">
                        Siap untuk mengubah ide anda menjadi kenyataan
                    </p>
                    <p class="space">
                        <div class="modal fade" id="pencarian" aria-hidden="true"
                            aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalToggleLabel">Pencarian</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/services" method="get">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Cari apasaja" name="search"
                                                    value="{{ request('search') }}">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i>&nbsp;Cari</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary" data-bs-toggle="modal" href="#pencarian" role="button"><i class="fas fa-search"></i>&nbsp; Temukan Freelancermu!</a>


                        <div class="kategori">
                            <div class="row">
                                <div class="col">
                                    <a href="/services">
                                        <i class="fas fa-crop-alt"></i>
                                        <p>Desain Grafis</p>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="/services">
                                        <i class="fas fa-crop-alt"></i>
                                        <p>Zoom Meeting</p>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="/services">
                                        <i class="fas fa-laptop-code"></i>
                                        <p>Web Programming</p>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="/services">
                                        <i class="fas fa-microphone"></i>
                                        <p>Webinar Room</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-3">
  

  <main>
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="">Pricing</h1>
      <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Free</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Enterprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
          </div>
        </div>
      </div>
    </div>
</section>

<section>
    <div class="container mt-5">
        <div class="row mb-4">

            <div class="col-md">
                <h4 class="judul mb-4">Kerjasa, Platform Freelancer Terpercaya No.1 di Kal-Bar</h4>
                <p class="mb-5">Kerjasa adalah platform freelance profesional nomor 1 terbesar di Kalimantan Barat,
                    berasal dari Samba. Kerjasa membantu pelaku bisnis
                    Indonesia untuk menemukan dan mempekerjakan freelancer secara sederhana, cepat, aman, dan hemat
                    biaya untuk mempercepat pertumbuhan bisnis mereka. Dengan banyak layanan yang kami miliki, dari
                    mulai desain grafis (seperti jasa desain logo, desain kemasan, desain kaos, ilustrasi), sewa zoom
                    meeting, hingga
                    pengembangan web dan aplikasi.
                    <br><br>
                    Semua menjadi cepat dan gak ribet dengan hadirnya Kerjasa dalam bentuk website
                    freelance. Di sisi lain, Kerjasa juga mendukung tenaga kerja untuk dapat
                    kerja online baik secara kerja sampingan atau kerja part time dari mana pun dan kapan pun.
                    Sistem Kerjasa membantu freelancer dalam mengumpulkan pembayaran, mempromosikan layanan,
                    mengelola pesanan, bertukar file, dan berkomunikasi dengan klien mereka. Kerjasa mempunyai misi
                    untuk memberdayakan freelancer dalam kerja online, kerja sampingan hingga kerja online serta
                    membantu pelaku bisnis dalam mewujudkan future of work.
                </p>
            </div>
        </div>

        <h4 class="judul mb-4">Berbagai Kategori Pekerjaan di Kerjasa</h4>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 mb-5">
            <div class="col d-flex align-items-start">
                <div>
                    <h5 class="fw-bold mb-2">Grafis & Desain</h5>
                    <p>Desain logo online, Desain PPT, Desain box makanan, Stiker label makanan, Desain kalender
                        meja, Desain undangan pernikahan, Desain feed instagram.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h5 class="fw-bold mb-2">Web dan Pemrograman</h5>
                    <p>Buat website, Membuat wordpress, Jasa pembuatan toko online, Jasa pembuatan website
                        perusahaan, Buat aplikasi android, Aplikasi berbasis desktop.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div>
                    <h5 class="fw-bold mb-2">Sewa Zoom Meeting</h5>
                    <p>GRATIS 100 Partisipan Untuk Semua Kegiatan Keagamaan.</p>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection