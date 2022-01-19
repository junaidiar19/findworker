@extends('layouts.dashboard.worker')
@section('subcontent')
@if (@$worker->actived_at)

@else
<x-card-guest 
    vector="img/vector/undraw_online_ad_re_ol62.svg" 
    title="Job vacancies for you" 
    description="Kami Akan memberikan rekomendasi lowongan pekerjaan terbaik untuk Anda." 
/>
@endif

@endsection