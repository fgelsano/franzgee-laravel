@extends('layouts.auth.auth-layout')

@section('content')

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form class="user" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email"
                                            class="form-control-user form-control @error('email') is-invalid @enderror"
                                            id="admin-email" aria-describedby="emailHelp" value="{{ old('email') }}"
                                            required autocomplete="email" autofocus
                                            placeholder="Enter Email Address...">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror form-control-user"
                                            name="password" required autocomplete="current-password" id="admin-password"
                                            placeholder="Password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input form-check-input"
                                                name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="remember">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-google btn-user btn-block">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                    <hr>

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection