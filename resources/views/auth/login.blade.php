@extends('layouts.app')

@section('content')
<style>
    
    .card{
        
        margin-left: -50px;
        width: 550px;
        height: 370px;
        box-shadow: 5px 7px #628272;
        
    }
    .col-md-8{
        margin-top: 10px;
        background-color: transparent;
        height: 350px;
        width: 400px;
    }
    .card-header{
        color: #21574a;
        font-size: 20px;
        font-weight: bold;

    }
    .card-body{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #21574a;
        font-size: 15px;
        font-weight: bold;
    }
    .loginpart{
        padding-top: 20px;
    }
    .loginpart button {
       background-color: #21574a;
       padding: 5px 50px 5px 50px;
       margin-left: 200px;
    }
    .loginpart button:hover {
       background-color: #628272;
    }
    .loginpart a{
        margin-left: 185px;
        font-weight: 600;
      color: #21574a;
      text-decoration: none;

    }
    .loginpart a:hover {
      color: #628272;

    }
    .logo1{
        margin-left: 50px;
        height: 200px;
        margin-top:-20px;
        background-image: url();
        padding-left:290px;
        
    }
    .logo1 h1{
        margin-left: 570px;
    } 
    
</style>
<div class="container">
    <div class="logo1" >
        
        <img  class="logo"style="width:500px;display: block;"  src="public/Image/logo33.png" alt="brand"> <!--tu metteras le logo ici ca marche-->
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body"style="padding-top: 60px;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="loginpart">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
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
