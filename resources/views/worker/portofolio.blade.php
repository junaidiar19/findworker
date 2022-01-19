@extends('layouts.dashboard.worker')
@section('subcontent')

@if (@$worker->actived_at)

@else
<x-card-guest 
    vector="img/vector/undraw_advanced_customization_re_wo6h.svg" 
    title="Show your portofolio!" 
    description="Semua project yang pernah Anda kerjakan dapat kalian muat disini." 
/>
@endif

@endsection