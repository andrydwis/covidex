@extends('layouts.app')
@section('content')
<div class="section-header" data-aos="fade-up" data-aos-delay="500">
    <h1>Setting Profile</h1>
</div>
@include('layouts.alert')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <div class="card card-primary" data-aos="fade-up" data-aos-delay="1000">
                <div class="card-header">
                    <h4>General</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user-profile-information.update') }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control @error('name'){{'is-invalid'}}@enderror" name="name" value="{{old('name') ?? auth()->user()->name}}" autofocus>
                            @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email'){{'is-invalid'}}@enderror" name="email" value="{{old('email') ?? auth()->user()->email}}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+62</span>
                                </div>
                                <input id="phone" type="text" class="form-control @error('phone'){{'is-invalid'}}@enderror" name="phone" value="{{old('phone') ?? str_replace('+62','',auth()->user()->phone)}}">
                                @error('phone')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <input id="role" type="hidden" name="role" value="{{auth()->user()->role}}">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <div class="card card-primary" data-aos="fade-up" data-aos-delay="1000">
                <div class="card-header">
                    <h4>Detail</h4>
                </div>
                <div class="card-body">
                    @livewire('edit-user-detail')
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <div class="card card-primary" data-aos="fade-up" data-aos-delay="1000">
                <div class="card-header">
                    <h4>Social Network</h4>
                </div>
                <div class="card-body">
                    @livewire('edit-user-social')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection