@extends('layouts.app')
@section('content')
<div class="section-header" data-aos="fade-up" data-aos-delay="500">
    <h1>Setting</h1>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card card-large-icons w-100" data-aos="fade-up" data-aos-delay="1000">
                <div class="card-icon bg-primary text-white">
                    <i class="fas fa-user"></i>
                </div>
                <div class="card-body">
                    <h4>Profile</h4>
                    <p>Change your profile and social media</p>
                    <a href="{{route('editProfile')}}" class="card-cta">Go <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card card-large-icons w-100" data-aos="fade-up" data-aos-delay="1500">
                <div class="card-icon bg-primary text-white">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="card-body">
                    <h4>Password</h4>
                    <p>Change your old password</p>
                    <a href="{{route('editPassword')}}" class="card-cta">Go <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection