@extends('layouts.app')
@section('content')
<div class="section-header" data-aos="fade-up" data-aos-delay="500">
    <h1>Setting Password</h1>
</div>
@include('layouts.alert')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card card-primary" data-aos="fade-up" data-aos-delay="1000">
                <div class="card-header">
                    <h4>Password</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user-password.update') }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <input id="current_password" type="password" class="form-control @error('current_password'){{'is-invalid'}}@enderror" name="current_password" autofocus>
                            @error('current_password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input id="password" type="password" class="form-control @error('password'){{'is-invalid'}}@enderror" name="password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirmation Password</label>
                            <input id="password_confirmation" type="password" class="form-control @error('password_confirmation'){{'is-invalid'}}@enderror" name="password_confirmation">
                            @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection