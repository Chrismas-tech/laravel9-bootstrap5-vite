@extends('admin.layouts.base-admin')
@section('title')
    Forgot your Password
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-sm-12 col-md-10 col-lg-7 my-4">
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
                        <div class="mb-3">
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <x-jet-validation-errors class="mb-3" />

                        <form method="POST" action="/forgot-password">
                            @csrf

                            <div class="mb-3">
                                <x-jet-label value="Email" />
                                <x-jet-input type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <div class="d-flex justify-content-end mt-4">
                                <x-jet-button>
                                    {{ __('Email Password Reset Link') }}
                                </x-jet-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
