@extends('layouts.app')

@section('title')
    Kerjasa | Product
@endsection

@section('content')
    
<section class="banner" id="home">
        <div class="px-4 pt-5 my-5 text-center">
            <!-- <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button> -->
            <div class="col-lg-6 mx-auto">

                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button>
                    <!-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> -->
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row g-5">

                <div class="col-md-5 col-lg-4 mt-3">
                    <div class="accordion" id="accordionExample">
                        <p>Urutkan dari</p>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Filter Harga
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    It is shown by default, until the collapse plugin adds the appropriate classes that
                                    we use to style each element.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Rating
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Category
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    This is the third item's accordion body..
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="review col-md-7 col-lg-8">
                  <h1>Halaman Kategori</h1>
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach($categories as $category)
                            <div class="col">
                                <div class="card shadow-sm">
                                    <a href="">
                                        <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                            src="img/product-details-3.jpg" alt="">
                                        <div class="card-body">
                                            <h6 class="my-2 text-center">{{ $category->name }}</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>

@endsection