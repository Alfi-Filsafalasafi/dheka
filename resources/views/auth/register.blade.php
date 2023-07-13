@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text-center p-3">Universitas PGRI Ronggolawe</div>

                <div class="card-body p-4">
                <h4 class="text-center px-3 py-2">Daftar Akun</h4>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <label for="name" class="">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control mt-1 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        <label for="email" class="mt-3">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control mt-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="password" class="mt-2">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control mt-1 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="password-confirm" class="mt-3">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control mt-1" name="password_confirmation" required autocomplete="new-password">
                        <button type="submit" class="btn btn-primary w-100 mt-4">
                            {{ __('Register') }}
                        </button>
                    </form>
                    <p class="text-center mt-3">Sudah Punya Akun ? <a href="/login">Login di sini</a></p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
