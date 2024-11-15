@extends('master')

@section('header')
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 py-4">
                                <div class="logo">
                                    <a href="/"><img src="assets/img/logo/distylogo.png" class="img-fluid" style="max-width: 180px;" alt="Logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 py-4">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <!-- Button -->
                                                <li class="button-header margin-left"><a href="register" class="btn">Join</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <!-- Header End -->
    </header>
@endsection

@section('konten')
<main>
    <section class="slider-area">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center" style="background-color: white;">
                <div class="container">
                    <div class="row">
                        <!-- Welcome Message -->
                        <div class="col-xl-6 col-lg-7 col-md-12" style="margin-top: 60px">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay="0.2s" style="color: black;">Selamat Datang<br>di Disty Academy</h1>
                            </div>
                        </div>
                        <!-- Login Form -->
                        <div class="col-xl-6 col-lg-7 col-md-12">
                            <div class="card py-5 px-5" style="border: 3px solid #ddd; border-radius: 8px; ">
                                <h3 class="text-center mb-4">Login</h3>

                                <form action="{{ route('user.login') }}" method="POST" enctype="multipart/form-data">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    <div class="form-group">
                                        <label for="name">Username:</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Username" style="font-size: 1.4rem;" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" style="font-size: 1.4rem;" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block mt-4">Login</button>
                                </form>
                            </div>
                        </div>
                        <!-- End of Login Form -->
                    </div>
                </div>          
            </div>
        </div>
    </section>
</main>


@endsection