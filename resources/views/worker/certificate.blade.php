@extends('layouts.dashboard.worker')
@section('subcontent')

@if (@$worker->actived_at)

@else
<x-card-guest 
    vector="img/vector/undraw_pitching_re_fpgk.svg" 
    title="Certificate of completion" 
    description="Jika Anda penghargaan berupa sertifikat maka silakan muat disini untuk melengkapi profil Anda." 
/>
@endif

@endsection