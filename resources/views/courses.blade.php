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
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="/"><img src="assets/img/logo/distylogo.png" class="img-fluid" style="max-width: 180px;" alt="Logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">                                                                                          
                                                <li><a href="courses">Courses</a></li>
                                                <li><a href="about">About</a></li>
                                                <li><a href="contact">Contact</a></li>
                                                <!-- Button -->
                                                <li class="button-header margin-left"><a href="register" class="btn">Join</a></li>
                                                <li class="button-header"><a href="login" class="btn btn3">Log in</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12 text-center">
                                <div class="mobile_menu d-block d-lg-none"></div>
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
        <!--? slider Area Start-->
        <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Our courses</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                                            <li class="breadcrumb-item"><a href="courses">Courses</a></li> 
                                        </ol>
                                    </nav>
                                    <!-- breadcrumb End -->
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Our featured courses</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($courses as $course)
                        <div class="col-lg-4">
                            <div class="properties properties2 mb-30">
                                <div class="properties__card">
                                    <div class="properties__img overlay1">
                                        <a href="#"><img src="{{ asset($course->image) }}" alt="Course Image"></a>
                                    </div>
                                    <div class="properties__caption">
                                        <p>{{ $course->category }}</p>
                                        <h3><a href="#">{{ $course->title }}</a></h3>
                                        <p>{{ $course->description }}</p>
                                        <div class="properties__footer d-flex justify-content-between align-items-center">
                                            <div class="restaurant-name">
                                                <div class="rating">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= floor($course->rating)) 
                                                            <i class="fas fa-star"></i> <!-- Bintang penuh -->
                                                        @elseif ($i == ceil($course->rating) && $course->rating - floor($course->rating) >= 0.5)
                                                            <i class="fas fa-star-half"></i> <!-- Setengah bintang -->
                                                        @else
                                                            <i class="far fa-star"></i> <!-- Bintang kosong -->
                                                        @endif
                                                    @endfor
                                                </div>
                                            </div>
                                            <div class="price">
                                                <span>${{ $course->price }}</span>
                                            </div>
                                        </div>
                                        <!-- Link menuju halaman enroll dengan passing course_id -->
                                        <a href="{{ route('enrollment.create', ['course_id' => $course->id]) }}" class="border-btn border-btn2">Daftar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
            </div>
        </div>
        
        
        <!-- Courses area End -->

    </main>
@endsection