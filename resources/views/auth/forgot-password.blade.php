@extends('auth.layouts.base-guest')
@section('title')
    Forgot your Password
@endsection
@section('content')
    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">Forgot your Password ?</h3>
                                    <div class="mb-3">
                                        {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="/forgot-password">
                                        @csrf

                                        @if (session('status'))
                                            <div class="alert alert-success text-white" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                        @if ($errors->any())
                                            <div class='alert alert-warning text-white text-sm p-2' role="alert">
                                                <div class="font-weight-bold">{{ __('Whoops! Something went wrong.') }}
                                                </div>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <label>Email</label>
                                        <div class="mb-3">
                                            <input type="email"
                                                class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                name="email" required value="{{ old('email') }}" placeholder="Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0"> Email
                                                Password Reset Link</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-5">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
