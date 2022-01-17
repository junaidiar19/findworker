@extends('layouts.user')
@section('content')
<div class="container my-5">
    <div class="text-center">
        <h5>Ayo mulai sekarang!</h5>
        <p class="text-muted text-sm">Pilih peran kamu untuk melanjutkan</p>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-5 text-center mb-5 mb-md-0">
            <img src="{{ asset('img/vector/undraw_programming_re_kg9v.svg') }}" class="img-fluid mb-3" style="height: 140px" alt="">
            <h6>Worker</h6>
            <p class="text-muted text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam dolores dolore accusamus, vel eius dolor molestiae odio, quisquam porro aliquid maiores a mollitia debitis magni. Recusandae officiis voluptatem amet voluptas.</p>
            <a href="{{ route('user.setup.worker') }}" class="btn btn-outline-orange fw-semibold text-sm">Lanjutkan Sebagai Worker</a>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5 text-center">
            <img src="{{ asset('img/vector/undraw_interview_re_e5jn.svg') }}" class="img-fluid mb-3" style="height: 140px" alt="">
            <h6>Recruiter</h6>
            <p class="text-muted text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam dolores dolore accusamus, vel eius dolor molestiae odio, quisquam porro aliquid maiores a mollitia debitis magni. Recusandae officiis voluptatem amet voluptas.</p>
            <a href="{{ route('user.setup.recruiter') }}" class="btn btn-outline-orange fw-semibold text-sm">Lanjutkan Sebagai Recruiter</a>
        </div>
    </div>
</div>

@endsection