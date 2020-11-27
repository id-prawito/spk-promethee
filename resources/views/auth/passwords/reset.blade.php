@extends('layouts.auth')
@section('title','Reset Password')

@section('content')

<div class="form-holder">
    <div class="form-content">
        <div class="form-items">
            <h4><b>{{ __('Reset Password') }}</b></h4>
            <p style="font-size: 14px; line-height:22px;">Buat Kata Sandi Baru</p>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" style="font-size: 14px;" placeholder="Alamat Email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="font-size: 14px;" placeholder="Password">
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
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="font-size: 14px;" placeholder="Konfirmasi Password">
                        <span toggle="#password-confirm" class="fa fa-fw fa-eye field-icon toggle-password-1"></span>
                    </div>
                </div>
                <div class="form-button full-width">
                    <button id="submit" type="submit" class="ibtn">{{ __('Buat Kata Sandi Baru') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection