@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="col-md-12 text-center">
                <div style="background-image: url(https://images.unsplash.com/photo-1494208133010-7227229a632a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80.webp); height: 40px; width: 854px; border: 0px; color:white;">
                {{ __('Dashboard') }}</div></div>
                <div style="background-image: url(https://images.unsplash.com/photo-1536147210925-5cb7a7a4f9fe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80.webp); color:white";>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="/group/join">
                        @csrf

                        <div class="form-group row">
                            <label for="code" class="col-md-0 col-form-label text-md-center">Chat Code</label>

                            <div class="col-md-12">
                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="name" autofocus>

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> <br>

                        <div class="form-group row mb-2">
                            <div class="col-md-0 text-md-center">
                                <button type="submit" class="btn btn-dark">
                                    Join
                                </button>
                            </div>
                        </div>
                        <div class="text-center">
                            Note: The chat code is the doctor's contact. The code is found on the homepage, under the doctor's name.
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
