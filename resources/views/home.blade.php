@extends('layouts.user')
@section('content')

@push('before-style')
<link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
@endpush

@push('after-script')
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
@endpush

<section id="hero" class="d-flex align-items-center bg-white pt-0 pt-md-auto mt-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-7 order-2 order-lg-1 justify-content-center text-center text-md-start mt-4">
                <h1 class="mb-3">Find your worker here <br>
                    and do your collaboration</h1>
                <p class="fw-normal text-muted">Find Worker menjadi tempat bagi siapa saja yang ingin mencari worker bertalenta dan berpengalaman dengan cepat</p>
                <a href="{{ route('user.hire') }}" class="btn btn-orange btn-lg me-1">Hire Worker</a>
                <a href="{{ route('user.quick.team') }}" class="btn btn-orange-light btn-lg">Quick Team</a>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 hero-img">
                <img src="/img/vector/undraw_business_deal_re_up4u.svg" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>

<main id="main">

    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            <h2>Recruiters</h2>
            <p>Bagaimana kami membantu Anda?</p>
            </div>

            <div class="row justify-content-center gap-5">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="text-center">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description text-sm">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                    <div class="text-center">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description text-sm">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="text-center">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description text-sm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="content-3-1 container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
        <div class="row">
            <div class="col-md-6 pt-5">
                <div class="text-center justify-content-center d-flex">
                    <img class="img-fluid h-300" data-aos="zoom-in" data-aos-delay="100"
                    src="{{ asset('img/vector/undraw_hiring_re_yk5n.svg') }}"
                    alt="" />
                </div>
            </div>
            <div class="col-md-6 ps-5">
                <div class="d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
                    <h4 class="title-text fw-bold" data-aos="fade-up" data-aos-delay="100">Worker Registration Flow</h4>
                    <ul class="p-0 m-0">
                        <li class="list-unstyled" style="margin-bottom: 2rem" data-aos="fade-up" data-aos-delay="100">
                            <h5
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-orange d-flex align-items-center justify-content-center">
                                1
                                </span>
                                Register
                            </h5>
                            <p class="text-caption">
                                We have provided highly experienced mentors<br class="d-sm-inline d-none" />
                                for several years.
                            </p>
                        </li>
                        <li class="list-unstyled" style="margin-bottom: 2rem" data-aos="fade-up" data-aos-delay="200">
                            <h5
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-orange d-flex align-items-center justify-content-center">
                                2
                                </span>
                                Your Profile
                            </h5>
                            <p class="text-caption">
                                Are you busy at work so it's hard to consult? don't<br class="d-sm-inline d-none" />
                                worry because you can access anytime.
                            </p>
                        </li>
                        <li class="list-unstyled mb-4" data-aos="fade-up" data-aos-delay="300">
                            <h5
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-orange d-flex align-items-center justify-content-center">
                                3
                                </span>
                                Portofolio and Certificate
                            </h5>
                            <p class="text-caption">
                                We provide economical packages for those of you<br class="d-sm-inline d-none" />
                                who are still in school or workers.
                            </p>
                        </li>
                    </ul>
                    <button class="btn btn-orange-light btn-lg" data-aos="fade-up" data-aos-delay="400">Daftar Sekarang <i class="bi bi-arrow-right-short ms-1"></i></button>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection