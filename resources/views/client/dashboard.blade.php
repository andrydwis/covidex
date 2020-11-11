@extends('layouts.app')
@section('content')
<div class="section-header" data-aos="fade-up" data-aos-delay="500">
    <h1>Dashboard</h1>
</div>
<div class="section-body">
    @livewire('dashboard-client')
</div>
@endsection