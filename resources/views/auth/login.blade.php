@extends('layouts.auth')
@section('title','Masuk')

@section('content')
<div class="form-holder">
    <div class="form-content">
        <div class="form-items">
            <h4><b>{{ __('Masuk') }}</b></h4>
            <p style="font-size: 14px;">Bagi kamu yang sudah terdaftar, silakan masuk/login</p>
            <div class="page-links">
                <a href="{{ route('login') }}" class="active">Masuk</a><a href="{{ route('register') }}">Daftar</a>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group row">
                    <div class="col-md-12">
                        <input style="font-size: 14px;" id="email" type="email" placeholder="Alamat Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input style="font-size: 14px;" id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="form-check" style="padding-left:0;">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label style="font-size: 14px;" class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-button">
                    <button id="submit" type="submit" class="ibtn">{{ __('Masuk') }}</button>
                    @if (Route::has('password.request'))
                    <a style="padding-top:8.5px; padding-bottom:8.5px; font-size:12px;" class="btn" href="{{ route('password.request') }}">
                        {{ __('Lupa Password?') }}
                    </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
    @endsection