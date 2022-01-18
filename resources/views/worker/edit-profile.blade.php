@extends('layouts.dashboard.worker')
@section('subcontent')

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link text-sm active me-2" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">
            <i class="bi bi-person-circle me-1"></i> Profile
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link text-sm" id="pills-add-tab" data-bs-toggle="pill" data-bs-target="#pills-add" type="button" role="tab" aria-controls="pills-add" aria-selected="false">
            <i class="bi bi-file-earmark-plus me-1"></i> Additional Information
        </button>
    </li>
</ul>

<div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

        @include('user.profile.setup.worker._profile', ['button' => 'Update Profile', 'url' => route('user.setup.worker', ['ref' => true])])
    </div>
    <div class="tab-pane fade" id="pills-add" role="tabpanel" aria-labelledby="pills-add-tab">
        @include('user.profile.setup.worker._additional', ['button' => 'Update Profile', 'url' => route('user.setup.worker.additional', ['ref' => true])])
    </div>
</div>

@endsection