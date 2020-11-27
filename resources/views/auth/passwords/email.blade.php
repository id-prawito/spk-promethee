@extends('layouts.auth')
@section('title','Lupa Password')

@section('content')
<div class="form-holder">
    <div class="form-content">
        <div class="form-items">
            <h4><b>{{ __('Lupa Password') }}</b></h4>
            <p style="font-size: 14px; line-height:22px;">Untuk mengatur ulang Password, masukkan alamat email yang Anda gunakan untuk Login.</p>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="font-size: 14px;" placeholder="Alamat Email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-button full-width">
                    <button id="submit" type="submit" class="ibtn">Kirim Link Lupa Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection