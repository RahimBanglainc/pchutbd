@extends('layouts.storefront.layout')
@section('title','Reset Password')
@section('main')

<div class="container row b-top">

    <div class="body-header">
        <h1>{{ __('Reset Password') }}</h1>
    </div>
</div>

<div class="container row">

    <div class="six columns form-style">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="form-element">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-element s-top s-bottom">
                    <div class="form-group offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div>
            </form>

    </div>

    <div class="six columns">


        <div class="s-top">

            <a href="{{ route('register') }}">Not registered yet? click here</a>

        </div>

        <div class="s-top">

            <a href="{{ route('login') }}">Already registered? Login here</a>

        </div>
    </div>
</div>

<br class="clear">
@endsection

