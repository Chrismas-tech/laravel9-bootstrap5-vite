@extends('auth.layouts.base-guest')
@section('title')
    Login
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-sm-12 col-md-10 col-lg-7 my-4">

                @include('admin.layouts.logo')

                <div class="card shadow-sm px-1 mx-4">
                    <div class="card-body">

                        @if ($errors->any())
                            <div class='alert alert-danger text-sm p-2' role="alert">
                                <div class="font-weight-bold">{{ __('Whoops! Something went wrong.') }}</div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label>Email</label>

                                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                    name="email" required value="{{ old('email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Password</label>

                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    type="password" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                                    <label class="custom-control-label" for="remember_me">Remember Me</label>
                                </div>
                            </div>

                            <div class="mb-0">
                                <div class="d-flex justify-content-end align-items-baseline">
                                    @if (Route::has('password.request'))
                                        <a class="text-muted me-3" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                                    <div class="d-flex justify-content-end align-items-baseline">
                                        <button type="submit" class="btn btn-dark text-uppercase">
                                            Log in
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
