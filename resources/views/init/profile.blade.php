@extends('layouts.app')
@section('content')
<div class="section-header" data-aos="fade-up" data-aos-delay="500">
    <h1>Profile</h1>
    
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-5 col-lg-6">
            <div class="card profile-widget" data-aos="fade-up" data-aos-delay="1000">
                <div class="profile-widget-header">
                    @if(auth()->user()->detail)
                    <img alt="image" src="{{asset('storage/'.auth()->user()->detail->photo)}}" width="100" height="100" class="rounded-circle profile-widget-picture">
                    @else
                    <img alt="image" src="{{asset('assets/img/avatar/avatar-1.png')}}" width="100" height="100" class="rounded-circle profile-widget-picture">
                    @endif
                </div>
                <div class="profile-widget-description">
                    <div class="profile-widget-name">
                        <h1 class="h1">{{auth()->user()->name}}</h1>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" readonly value="{{auth()->user()->email}}">
                    </div>
                    @if (auth()->user()->detail)
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" readonly>{{auth()->user()->detail->description}}</textarea>
                    </div>
                    @else
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" readonly>You haven't written anything yet</textarea>
                    </div>
                    @endif
                </div>
                @if(auth()->user()->social)
                <div class="card-footer text-center">
                    @if(auth()->user()->social->github)
                    <div class="font-weight-bold mb-2">Social Media</div>
                    <a href="https://github.com/{{auth()->user()->social->github}}" class="btn btn-primary btn-icon">
                        <i class="fab fa-github"></i>
                    </a>
                    @endif
                    @if(auth()->user()->social->linkedin)
                    <a href="{{auth()->user()->social->linkedin}}" class="btn btn-primary btn-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    @endif
                    @if(auth()->user()->social->instagram)
                    <a href="https://www.instagram.com/{{auth()->user()->social->instagram}}" class="btn btn-primary btn-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    @endif
                </div>
                @endif
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection