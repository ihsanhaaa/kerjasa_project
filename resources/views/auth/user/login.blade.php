@extends('layouts.app')

@section('title')
    Kerjasa | Halaman Login
@endsection

@section('content')
    <!-- banner -->
    <section class="login-user" id="loginuser">
        <div class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="right col-lg-12 col-md-12 mx-auto">

                    <!-- <img src="img/logo.png" class="logo" alt=""> -->
                    <h1 class="header-third">
                        Start Today
                    </h1>
                    <p class="subheader">
                        Because tomorrow become never
                    </p>
                    <p>
                        <a class="btn btn-border btn-google-login" href="{{ route('user.login.google') }}">
                            <img src="img/ic_google.svg" class="icon" alt=""> Sign In with Google
                        </a>
                    </p> 

                </div>
            </div>
        </div>
    </section>
@endsection