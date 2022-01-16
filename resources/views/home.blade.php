@extends('layouts.user')
@section('content')
<section id="hero" class="d-flex align-items-center bg-white pt-0 pt-md-auto">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-7 order-2 order-lg-1 justify-content-center text-center text-md-start mt-4">
                <h1 class="mb-3">Find your worker here <br>
                    and do your collaboration</h1>
                <p class="fw-normal text-muted">Find Worker menjadi tempat bagi siapa saja yang ingin mencari worker bertalenta dan berpengalaman dengan cepat</p>
                <a href="#about" class="btn btn-orange btn-lg me-1">Hire Worker</a>
                <a href="#about" class="btn btn-orange-light btn-lg">Explore Jobs</a>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 hero-img">
                <img src="/img/vector/undraw_business_deal_re_up4u.svg" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>

<main id="main">
    <section id="team" class="team">
        <div class="container">

            <div class="section-title aos-init aos-animate" data-aos="fade-up">
                <h2 class="fw-normal">Popular Worker</h2>
                <p>Our worker is always here to help</p>
            </div>

        </div>
    </section>
</main>
@endsection