@extends('layouts.auth')

@section('content')
<div class="card">
    <div class="card-body p-4">
        <div class="p-2">
            <h5 class="mb-5 text-center">{{ __('Login') }}</h5>
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-group-custom mb-4">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="username">{{ __('Email') }}</label>
                        </div>
                        
                        <div class="form-group form-group-custom mb-4">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="password">{{ __('Password') }}</label>
                        </div>

                        <div class="custom-control custom-checkbox d-none">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="custom-control-label font-weight-normal" for="remember">
                                {{ __('Ingatkan saya') }}
                            </label>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-success btn-block waves-effect waves-light" type="submit">{{ __('Login') }}</button>
                        </div>

                        @if (Route::has('password.request'))
                        <div class="mt-4 text-center">
                            <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> {{ __('Lupa Password') }}</a>
                        </div>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
