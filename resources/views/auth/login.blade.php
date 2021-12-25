@extends('layouts.partials.master')

@section('title')
    Travel Express | Login
@endsection

@section('content')
    <div class="bg">
        @include('layouts.partials.navbar')
        <section class="container-fluid">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-4">
                    <form class="form-container" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-block">{{ __('Login') }}</button>
                            <p><span>Not a User?</span><a href="{{ route('register') }}">Register</a></p>
                            {{-- @if (Route::has('password.request'))
                                <a class="btn btn-link"
                                    href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                            @endif --}}
                        </div>

                    </form>
                </section>
            </section>
        </section>
    </div>
@endsection
