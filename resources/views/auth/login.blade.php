@extends('layouts.user')
@section('content')
<div class="container main">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="text-center">
                <h3>Login</h3>
                <p class="text-muted">Simplify your workflow by one click</p>
            </div>
            @include('partials.alert')
            <a href="{{ route('social.oauth', 'google') }}">
                <div class="border p-3 border-dark rounded login-card">
                    <div class="d-flex">
                        <img src="img/social/google.svg" alt="" class="me-2 h-30">
                        <h6 class="my-auto text-dark">Google</h6>
                    </div>
                </div>
            </a>
            <a href="{{ route('social.oauth', 'facebook') }}">
                <div class="border p-3 border-dark rounded login-card">
                    <div class="d-flex">
                        <img src="img/social/facebook.png" alt="" class="me-2 h-30">
                        <h6 class="my-auto text-dark">Facebook</h6>
                    </div>
                </div>
            </a>
            <a href="{{ route('social.oauth', 'linkedin') }}">
                <div class="border p-3 border-dark rounded login-card">
                    <div class="d-flex">
                        <img src="img/social/linkedin.png" alt="" class="me-2 h-30">
                        <h6 class="my-auto text-dark">Linkedin</h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection