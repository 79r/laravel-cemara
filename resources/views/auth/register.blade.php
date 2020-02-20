@extends('layouts.auth')

@section('content')
<div class="card">
    <div class="card-body p-4">
        <div class="p-2">
            <h5 class="mb-5 text-center">{{ __('Register') }}</h5>
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-group-custom mb-4">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="name">{{ __('Name') }}</label>
                        </div>
                        
                        <div class="form-group form-group-custom mb-4">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="email">{{ __('Email') }}</label>
                        </div>

                        <div class="form-group form-group-custom mb-4">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="password">{{ __('Password') }}</label>
                        </div>
                        
                        <div class="form-group form-group-custom mb-4">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit">{{ __('Register') }}</button>
                        </div>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
