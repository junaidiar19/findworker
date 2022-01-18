@extends('layouts.user')
@section('content')

@push('after-style')
    <style>
        .list-group-item {
            border: none;
            font-size: small;
            margin-bottom: 8px;
        }
    </style>
@endpush

{{-- <div class="main"> --}}
    <div class="container">
        <div class="row">
            <div class="col-md-3 py-4 border-right pe-4">
                <div class="d-flex mb-3">
                    <img src="{{ auth()->user()->getAvatar }}" class="border-avatar me-2 shadow-sm" height="40" width="40" alt="">
                    <div class="my-auto">
                        <p class="mb-0 fw-semibold">{{ auth()->user()->name }}</p>
                        <p class="mb-0 text-muted text-sm">{{ $worker->expertise }}</p>
                    </div>
                </div>
                <ul class="menu border-0">
                    <li>
                        <a href="{{ route('worker.dashboard') }}" class="{{ (@$active == 'dashboard') ? 'active-menu' : '' }}">
                            <i class="bi bi-columns-gap me-1"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('worker.profile.edit') }}" class="{{ (@$active == 'profile') ? 'active-menu' : '' }}">
                            <i class="bi bi-person-circle me-1"></i> Edit Profile
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('portofolio.index') }}" class="{{ (@$active == 'portofolio' || request()->routeIs('portofolio.index')) ? 'active-menu' : '' }}">
                            <i class="bi bi-folder-plus me-1"></i> Portofolio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('certificate.index') }}" class="{{ (@$active == 'certificate' || request()->routeIs('certificate.index')) ? 'active-menu' : '' }}">
                            <i class="bi bi-award me-1"></i> Certificate
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('recommendation.index') }}" class="{{ (@$active == 'recommendation' || request()->routeIs('recommendation.index')) ? 'active-menu' : '' }}">
                            <i class="bi bi-signpost-2 me-1"></i> Recommendation
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bi bi-shift me-1"></i> Upgrade
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 py-4 ps-4">
                @yield('subcontent')
            </div>
        </div>
        
    </div>
{{-- </div> --}}
@endsection