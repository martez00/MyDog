@extends('layouts.auth')

@section('content')
    <div class="jumbotron vertical-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <img src="{{ asset('images/other/dog1.png') }}" class="dog-image">
                    <div class="card card-signin shadow-lg">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ __('auth.sign_in_form') }}</h5>
                            <form class="form-signin" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-label-group">
                                    <input type="email" name="email" id="inputEmail"
                                           class="form-control @error('email') is-invalid @enderror"
                                           value="{{ old('email') }}"
                                           placeholder="Email address"
                                           required autocomplete="email">
                                    <label for="inputEmail">{{ __('auth.email_adress') }}</label>
                                    @error('email')
                                    <span class="invalid-feedback text-center" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-label-group">
                                    <input type="password" id="inputPassword"
                                           class="form-control @error('password') is-invalid @enderror"
                                           placeholder="Password" name="password" required
                                           autocomplete="current-password">
                                    <label for="inputPassword">{{ __('auth.password') }}</label>
                                    @error('password')
                                    <span class="invalid-feedback text-center" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="custom-control custom-checkbox mb-3">
                                    <input class="custom-control-input form-check-input" type="checkbox"
                                           id="customCheck1" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label"
                                           for="customCheck1">{{ __('auth.remember_password') }}</label>
                                </div>
                                <button class="btn btn-lg btn-success btn-block text-uppercase"
                                        type="submit">{{ __('auth.sign_in') }}
                                </button>
                                <div style="width:100%; text-align:center; margin-top: 5px;">
                                    <a href="">{{ __('auth.no_account') }}</a>
                                </div>
                            </form>
                            <hr class="mt-3 mb-4">
                            <button class="btn btn-lg btn-google btn-block text-uppercase"
                                    onclick="window.location='{{ url("redirect/google") }}'"><i
                                        class="fa fa-google"></i> {{ __('auth.sign_in_google') }}
                            </button>
                            <button class="btn btn-lg btn-facebook btn-block text-uppercase" onclick="window.location='{{ url("redirect/facebook") }}'"><i
                                        class="fa fa-facebook"></i> {{ __('auth.sign_in_facebook') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection