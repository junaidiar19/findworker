@extends('layouts.user')
@section('content')
@push('after-style')
    <style>

        .bg-profile {
            background-image: url("{{ asset('img/vector/bg-profile.png') }}");
            height: 140px;
            background-size: cover;
            border-top-left-radius: 0.60rem;
            border-top-right-radius: 0.60rem;
        }

        .avatar-profile {
            position: absolute;
            top: 95px;
            background: white;
            left: 15px;
        }
    </style>
@endpush
<div class="bg-main">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card border-0 rounded-md mb-3">
                    <div class="bg-profile">
                        <img src="{{ $worker->user->getAvatar }}" class="avatar avatar-xxl rounded-circle mb-3 border-white avatar-profile p-1" alt="">
                    </div>
                    <div class="card-body pt-5">
                        <div class="row">
                            <div class="col-md-9 mb-2">
                                <h6 class="mb-0 text-dark">{{ $worker->expertise }}</h6>
                                <div class="d-flex">
                                    <p class="text-sm text-muted mb-0 me-3">{{ $worker->user->name }}</p>
                                </div>
                            </div>
                            <div class="col-md-3 text-md-end text-left mb-2">
                                <a href="#" class="btn btn-orange rounded-md text-sm shadow"><i class="bi bi-telephone me-1"></i> Contact</a>
                            </div>
                        </div>

                        <p class="text-sm text-muted">
                            <i class="bi bi-geo-alt" aria-hidden="true"></i> {{ $worker->kota->name }}, {{ $worker->provinsi->name }}
                        </p>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <p class="fw-semibold text-dark text-sm mb-1">Experience Level</p>
                                <span class="text-sm text-{{ levelColor($worker->experience) }}">{{ $worker->experience }}</span>
                            </div>
                            <div class="col-md-6 mb-3">
                                <p class="fw-semibold text-dark text-sm mb-2">Salary Range</p>
                                <div class="d-flex text-sm text-dark">
                                    <span>{{ rpSingkat($worker->salary_start) }}</span>
                                    <span class="mx-2">-</span>
                                    <span>{{ rpSingkat($worker->salary_end) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-0 rounded-md mb-3">
                    <div class="card-body">
                        <p class="fw-semibold text-dark text-sm mb-2">About</p>
                        <p class="text-gray text-sm mb-0">{{ $worker->about }}</p>
                    </div>
                </div>

                <div class="card border-0 rounded-md mb-3">
                    <div class="card-body">
                        <p class="fw-semibold text-dark text-sm mb-2">Skills</p>
                        @foreach (explode(',', $worker->skills) as $e)
                        <span class="p-2 rounded-md me-1 badge badge-light-secondary">{{ $e }}</span>
                        @endforeach
                    </div>
                </div>

                <div class="card border-0 rounded-md mb-3">
                    <div class="card-body">
                        <p class="fw-semibold text-dark text-sm mb-2">Availability</p>
                        @foreach ($worker->availability as $e)
                        <span class="p-2 rounded-md me-1 badge badge-light-secondary">{{ $e->name }}</span>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card border-0 rounded-md mb-3">
                    <div class="card-body">
                        <h6 class="mb-3">Worker Terkait</h6>

                        <x-card-worker-sm />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection