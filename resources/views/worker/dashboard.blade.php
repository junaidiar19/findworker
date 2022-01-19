@extends('layouts.dashboard.worker')
@section('subcontent')

@if (@$worker)
    @if ($worker->actived_at)
        
    @else
        <div class="row justify-content-center mt-3">
            <div class="col-md-6 text-center">
                <img src="{{ asset('img/vector/undraw_informed_decision_p2lh.svg') }}" class="img-fluid h-200 mb-3" alt="">
                <h6>Hore sedikit lagi!</h6>
                <p class="text-muted text-sm">Data Anda sedang kami periksa, jika telah disetujui maka akun Anda akan aktif!</p>
            </div>
        </div>
    @endif
@else
<x-card-guest
    col="col-md-7"
    vector="img/vector/undraw_connecting_teams_re_hno7.svg" 
    title="Hai, Welcome to Find Woker!" 
    description="Yuk daftar sebagai worker disni untuk mendapatkan kesempatan hiring dari berbagai perusahaan besar atau mendapatkan partner bisnis yang cocok untuk Anda" 
/>
@endif

@endsection