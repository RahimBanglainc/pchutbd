@extends('layouts.storefront.layout')
@section('title','Login')
@section('main')

<div class="container row b-top">

    <div class="body-header">
        <h1>{{ __('Login') }}</h1>
    </div>
</div>

<div class="container row">

    <div class="six columns form-style">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
                <label for="email"
                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="form-element">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email"
                        autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password"
                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="form-element">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="form-element offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-element s-top s-bottom">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if(Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>

    </div>

    <div class="six columns">

        <div class="b-bottom">

            <a href="#"><img src="./assets/storefront/img/facebook_connect.jpg" alt="Facebook Login" title="Facebook Login"></a>

        </div>

        <div class="s-top">

            <a href="{{ route('password.request') }}">Forgot password? click here</a>

        </div>

        <div class="s-top">

            <a href="{{ route('register') }}">Not registered yet? click here</a>

        </div>

        <div class="s-top">

            <a href="#">Track your order ? click here</a>

        </div>
    </div>
</div>

<br class="clear">
@endsection
