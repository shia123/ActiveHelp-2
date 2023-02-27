
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="col-md-12 text-center">
                <div style="background-image: url(https://images.unsplash.com/photo-1494208133010-7227229a632a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80.webp); height: 40px; width: 854px; border: 0px; color:white;">
                {{ __('Login Form') }}</div></div>
                <div style="background-image: url(https://images.unsplash.com/photo-1536147210925-5cb7a7a4f9fe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80.webp); color:white";>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-5 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="password" class="col-md-5 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-0 text-center">
                                <!-- <button type="submit" class="btn btn-primary"> -->
                                    <!-- {{ __('Login') }} -->
                                <!-- </button> -->
                                <button type="submit" class="btn btn-dark w-100">Log in</button>

                                @if (Route::has('password.request'))
                                    <a class="col-md-4 text-md-center" href="{{ route('password.request') }}">
                                    <div style="color: white;">{{ __('Forgot Your Password?') }}
                                </div></a>
                                @endif
                            </div>
                        </div>
                        
                        <a class="col-md-0 text-center" href="{{route('register')}}">
                            <div style="color: white;">Create an account</div></a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
