@extends('layouts.appd')

@section('content')
<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h1>Login</h1>
        <p class="text-muted">Sign In to your account</p>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="icon-user"></i></span>
        </div>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>

        <div class="input-group mb-4">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="icon-lock"></i></span>
        </div>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>

        <div class="row">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>

    </form>
</div>

@endsection
