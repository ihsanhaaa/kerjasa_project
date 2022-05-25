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
                    <div class="modal fade" id="pencarian" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                        tabindex="-1">
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
                                            <input type="text" class="form-control" placeholder="Cari apasaja"
                                                name="search" value="{{ request('search') }}" autofocus>
                                            <button class="btn btn-primary"><i
                                                    class="fas fa-search"></i>&nbsp;Cari</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary" data-bs-toggle="modal" href="#pencarian" role="button"><i
                            class="fas fa-search"></i>&nbsp; Temukan Freelancermu!</a>


                    <div class="kategori">
                        <div class="row">
                            @foreach($categories as $category)
                            <div class="col">
                                <a href="categories/{{ $category->slug }}">
                                    <img class="kategori-icon card-img-top"
                                        src="{{ asset('storage/' . $category->image) }}" alt="">
                                    <p>{{ $category->name }}</p>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- produk -->
<section>
    <div class="container mt-5">
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="juduldashboard">Freelance</h1>
                <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with
                    this Bootstrap example. It’s built with default Bootstrap components and utilities with little
                    customization.</p>
        </div>
        
        <div class="review">
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4">
                @foreach($products as $product)
                <div class="col">
                    <div class="card shadow-sm mb-4">
                        <a href="/services/{{ $product->slug }}">
                            <div class="position-absolute badge bg-info text-dark mx-2 my-2">{{ $product->category->name
                                }}</div>
                            <img class="card-img-top" src="{{ asset('storage/' . $product->image) }}" alt="">
                            <div class="card-body">
                                <h6 class="judul-products my-1">{{ $product->title }}</h6>
                                <small class="text-muted">Paket: {{ $product->package }}</small>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <h6 class="price-products my-0">Rp.{{ $product->price }}</h6>
                                    <!-- <span class="badge bg-success">{{ $product->category->name }}</span> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <a href="/services" class="text-decoration-none text-black">Lihat yang lainnya <i
                class="fas fa-angle-right"></i></a>
        </div>
    </div>
</section>

<!-- berita -->
<section>
    <div class="container mt-5">
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="juduldashboard">Berita</h1>
                <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with
                    this Bootstrap example. It’s built with default Bootstrap components and utilities with little
                    customization.</p>
        </div>
        
        <div class="review">
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3">
                @foreach($posts as $post)
                <div class="col">
                    <div class="card shadow-sm mb-4">
                        <a href="/posts/{{ $post->slug }}">
                            <img class="card-img-top" src="{{ asset('storage/' . $post->image) }}" alt="">
                            <div class="card-body">
                                <h6 class="judul-products my-1">{{ $post->title }}</h6>
                                <small class="text-muted"><i class="fas fa-user"></i>&nbsp;Admin&nbsp; • &nbsp;<i class="far fa-calendar-alt"></i>&nbsp;{{ $post->created_at->format('M d Y') }}</small>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <a href="/posts" class="text-decoration-none text-black">Lihat yang lainnya <i
                class="fas fa-angle-right"></i></a>
        </div>
    </div>
</section>

<section>
    <div class="container mt-5">
        <div class="row mb-4">

            <div class="col-md">
                <h4 class="juduldashboard text-center mb-4">Kerjasa, Platform Freelancer Terpercaya No.1 di Kal-Bar</h4>
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

        <h4 class="juduldashboard text-center mb-4">Berbagai Kategori Pekerjaan di Kerjasa</h4>
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

<!-- info -->
<section>
    <div class="container mt-5 mb-5">
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="juduldashboard">Kontak</h1>
                <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with
                    this Bootstrap example. It’s built with default Bootstrap components and utilities with little
                    customization.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31911.216828603057!2d109.0503145!3d1.22791555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e49b9cb17e0f83%3A0xa73a2aaef8e12292!2sSemperiuk%20B%2C%20Kec.%20Jawai%20Sel.%2C%20Kabupaten%20Sambas%2C%20Kalimantan%20Barat!5e0!3m2!1sid!2sid!4v1653230517755!5m2!1sid!2sid" width="1000" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="text-center container">
            <div class="">
                <div class="container mb-3">
                    
                </div>
            </div>
        </div>
        
        
        <div class="review-info">
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2">
                
                <div class="col">
                    <div class="shadow-sm mb-4">
                        <img class="card-img-top" src="" alt="">
                        <div class="card-body">
                            <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Jalan Semperiuk B, No 50, Dusun Sejalan, RT 009 RW 004, Kec Jawai Selatan, Kab. Sambas, Prov. Kalimantan Barat</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="shadow-sm mb-4">
                        <img class="card-img-top" src="" alt="">
                        <div class="card-body">
                            <p><i class="far fa-envelope"></i>&nbsp;&nbsp;kerjasa.id@gmail.com</p>
                            <p><i class="fas fa-headset"></i>&nbsp;&nbsp;+6285754812451</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

@endsection