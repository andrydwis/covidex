@extends('layouts.app')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="hero align-items-center hero-bg-image text-white hero-bg-image" style="background-image: url('/assets/img/hero.jpg')" data-aos="fade-up" data-aos-delay="500">
                <div class="hero-inner text-center">
                    <h1 class="h1">Covidex</h1>
                    <p class="lead">" Lorem ipsum dolor sit amet. "</p>
                    <div class="mt-3">
                        @guest
                        <a href="{{route('register')}}" class="btn btn-outline-white btn-lg btn-icon">Register</a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex align-items-stretch">
        <div class="col-12 col-md-4 col-lg-4 d-flex justify-content-center">
            <img src="{{asset('assets/img/world.svg')}}" alt="" class="img-fluid d-none d-sm-none d-md-block" data-aos="fade-up" data-aos-delay="1000">
        </div>
        <div class="col-12 col-md-8 col-lg-8">
            <div class="h-100 d-flex align-items-center" data-aos="fade-up" data-aos-delay="1500">
                <div class="text-center text-md-left my-3">
                    <h3 class="h3 font-weight-bold">What is Covidex ?</h3>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, ad?</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection