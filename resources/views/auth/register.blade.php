@extends('layouts.basic')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand" data-aos="fade-up" data-aos-delay="500">
                <h1 class="h1">Covidex</h1>
            </div>
            <div class="card card-primary" data-aos="fade-up" data-aos-delay="1000">
                <div class="card-header">
                    <h4>Register</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control @error('name'){{'is-invalid'}}@enderror" name="name" value="{{old('name') ?? ''}}" autofocus>
                            @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email'){{'is-invalid'}}@enderror" name="email" value="{{old('email') ?? ''}}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input id="password" type="password" class="form-control @error('password'){{'is-invalid'}}@enderror" name="password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="control-label">Confirmation Password</label>
                            <input id="password_confirmation" type="password" class="form-control @error('password_confirmation'){{'is-invalid'}}@enderror" name="password_confirmation">
                            @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Phone</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+62</span>
                                </div>
                                <input id="phone" type="text" class="form-control @error('phone'){{'is-invalid'}}@enderror" name="phone" value="{{old('phone') ?? ''}}">
                                @error('phone')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <input id="role" type="hidden" name="role" value="client">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-5 text-muted text-center">
                Already have an account? <a href="{{route('login')}}">Login</a>
            </div>
            <div class="simple-footer">
                Covidex &copy; 2020
            </div>
        </div>
    </div>
</div>
@endsection