@extends('layouts.auth')
@section('title','Daftar')

@section('content')
<div class="form-holder">
    <div class="form-content">
        <div class="form-items">
            <h4><b>{{ __('Daftar') }}</b></h4>
            <p style="font-size: 14px; margin-bottom:1rem;">Mohon isi data dengan Benar, Keterangan Role : User.<br>Note : Pastikan email yang digunakan masih aktif.</p>
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <div class="page-links">
                <a href="{{ route('login') }}">Masuk</a><a href="{{ route('register') }}" class="active">Daftar</a>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group row">
                    <div class="col-md-12">
                        <input style="font-size: 14px;" id="name" type="text" placeholder="Nama" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input style="font-size: 14px;" id="email" type="email" placeholder="Alamat Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <input style="font-size: 14px;" id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
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
                        <input style="font-size: 14px;" id="password-confirm" placeholder="Konfirmasi Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <span toggle="#password-confirm" class="fa fa-fw fa-eye field-icon toggle-password-1"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span style="border: none; font-size: 14px; background-color:#F7F7F7; padding-left:20px;padding-right:20px; color:#000;" class="input-group-text" id="inputGroupPrepend"> Role</span>
                            </div>
                            <select style="border-radius:0px 6px 6px 0px; color:#000; font-size: 14px; background-color:#F7F7F7; border:none; border-left:1px solid #E2E2E2 !important" name="role" class="form-control custom-select">
                                <option value="User">User</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-button">
                    <button id="submit" type="submit" class="ibtn">{{ __('Daftar') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection