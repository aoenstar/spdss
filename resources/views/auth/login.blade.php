@extends('layouts.app')

@section('content')

@if(Session::has('errmessage')) 
<p> Error: {{ Session::get('errmessage') }}</p> 
@endif 
<div class="container">
           
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div  style="padding-bottom:1rem;"></div>
            <div class="usrForms">
                <div class="usrForms-header">{{ __('Login') }}</div>

                <div class="usrForms-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <p class="usrForms-subheader">Welcome back! Log in to your account to view catalog:</p>
                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span></span>
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span></span>
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="pass btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
