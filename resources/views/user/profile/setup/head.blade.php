@extends('layouts.user')
@section('content')

@push('before-style')
<link href="{{ asset('vendor/dropify/css/dropify.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.css') }}" rel="stylesheet">
@endpush

@push('after-script')
<script src="{{ asset('vendor/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('vendor/dropify/js/upload-init.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js') }}"></script>
<script>
    $('#tokenfield').tokenfield()
</script>
@endpush

<div class="container">
    <div class="row">
        <div class="col-md-3 offset-1 d-md-block d-none">
            <h6>Let's get your profile ready for make offers.</h6>
            <p class="text-muted text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est mollitia enim dolorum in incidunt, recusandae natus corrupti quia.</p>
            <img src="{{ asset('img/vector/undraw_certificate_re_yadi.svg') }}" class="img-fluid flip-horizontal h-200" alt="">
        </div>
        <div class="col-md-7 offset-1">
            <div class="card">
                <div class="card-body">

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <div class="nav-link text-sm me-3 {{ (request()->routeIs('user.setup.worker')) ? 'active' : '' }}"><i class="bi bi-person-circle me-1"></i> Your Profile</div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link text-sm me-3 {{ (request()->routeIs('user.setup.worker.additional')) ? 'active' : '' }}"><i class="bi bi-folder-plus me-1"></i> Additional Information</div>
                        </li>
                    </ul>

                    @yield('subcontent')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection