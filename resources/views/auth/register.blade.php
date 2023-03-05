<div style=" background-color:lightgreen;">
@extends('layouts.app')

@section('content')
 <div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="col-md-12 text-center">
                <div style="background-image: url(https://images.unsplash.com/photo-1494208133010-7227229a632a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80.webp); height: 40px; width: 854px; border: 0px; color:white;">
                {{ __('Register') }}</div></div>

                <div style="background-image: url(https://images.unsplash.com/photo-1536147210925-5cb7a7a4f9fe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80.webp); color:white";>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-5 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="form-group row">
                            <label for="email" class="col-md-5 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-5 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> <br>


                        <div class="form-group row">
                            <label for="phone" class="col-md-5 col-form-label text-md-right">Phone Number</label>

                            <div class="col-md-12">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="09" autocomplete="phone">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> <br>
                        <div class="form-group row">
                            <label for="role" class="col-md-5 col-form-label text-md-right">Sign up as:</label>
                            <div class="col-md-12">
                                <select class="form-select" name="role">
                                    <option selected>Select</option>
                                    <option value="2">Doctor</option>
                                    <option value="3">Patient</option>
                                </select>
                            </div>
                        </div><br>


                        <!-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">If you are a Doctor type your {{ __('Code') }} Here</label>

                            <div class="col-md-12">
                                <input id="uuid" type="text" class="form-control @error('email') is-invalid @enderror" name="uuid" value="0" autocomplete="uuid">

                                @error('uuid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> <br> -->




                        <div class="form-group row mb-2">
                            <div class="col-md-0 text-center">
                                <!--<button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button> -->
                                <button type="submit" class="btn btn-dark w-100 m-2">Sign up</button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-0 text-center">
                                <a href="{{route('login')}}">
                                    <div style="color: white;">Log in instead</div></a>
                            </div>
                        </div>

                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection