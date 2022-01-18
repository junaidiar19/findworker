@extends('layouts.dashboard.worker')
@section('subcontent')

@if ($worker->verified_at)
    
@else
    <div class="row justify-content-center mt-3">
        <div class="col-md-6 text-center">
            <img src="{{ asset('img/vector/undraw_informed_decision_p2lh.svg') }}" class="img-fluid h-200 mb-3" alt="">
            <h6>Hore sedikit lagi!</h6>
            <p class="text-muted text-sm">Data Anda sedang kami periksa, jika telah disetujui maka akun Anda akan aktif!</p>
        </div>
    </div>
@endif

@endsection