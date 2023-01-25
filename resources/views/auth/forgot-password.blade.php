@extends('admin.layouts.base-admin')
@section('title')
    Forgot your Password
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-sm-12 col-md-10 col-lg-7 my-4">
                @include('admin.layouts.logo')

                <div class="card shadow-sm px-1 mx-4">
                    <div class="card-body">
                        <div class="mb-3">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

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

                        <form method="POST" action="/forgot-password">
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


                            <div class="d-flex justify-content-end mt-4">
                                <div class="d-flex justify-content-end align-items-baseline">
                                    <button type="submit" class="btn btn-dark text-uppercase">
                                        Email Password Reset Link
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
