@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center p-3">Universitas PGRI Ronggolawe</div>

                <div class="card-body p-4">
                    <h4 class="text-center px-3 py-2">Log in</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <label for="email">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control mt-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="password" class="mt-3">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control mt-1 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <button type="submit" class="btn btn-primary w-100 mt-4">
                                    {{ __('Login') }}
                                </button>
                    </form>
                    <p class="text-center mt-3">Belum Punya Akun ? <a href="/register">Daftar di sini</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
