@extends('auth.layouts.base-guest')
@section('title')
    Register
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-sm-12 col-md-10 col-lg-8 my-4">
                <div>
                    <a class="d-flex justify-content-center mb-4" href="/">
                        <svg width="64" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z"
                                fill="#6875F5"></path>
                            <path
                                d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z"
                                fill="#6875F5"></path>
                        </svg>
                    </a>
                </div>

                <div class="card shadow-sm px-1 mx-4">
                    <div class="card-body">

                        @foreach ($errors->all() as $message)
                            <div class="alert alert-danger display-hide">
                                <span>{{ $message }}</span>
                            </div>
                        @endforeach

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" required="required"
                                    autofocus="autofocus" autocomplete="name" value={{ old('name') }}>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" required="required"
                                    value={{ old('email') }}>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" required="required"
                                    autocomplete="new-password">
                            </div>

                            <div class="mb-3">
                                <label>Confirm Password</label>
                                <input class="form-control" type="password" name="password_confirmation" required="required"
                                    autocomplete="new-password">
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="form-check-input" id="terms" name="terms">
                                        <label class="custom-control-label" for="terms">
                                            I agree to the <a target="_blank" href="{{ route('terms-of-service') }}">Terms of
                                                Service</a> and <a target="_blank"
                                                href="{{ route('privacy-policy') }}">Privacy
                                                Policy</a>
                                        </label>
                                    </div>
                                </div>
                            @endif

                            <div class="mb-0">
                                <div class="d-flex justify-content-end align-items-baseline">
                                    <a class="text-muted me-3 text-decoration-none" href="{{ route('login') }}">
                                        Already registered?
                                    </a>

                                    <button type="submit" class="btn btn-dark text-uppercase">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
