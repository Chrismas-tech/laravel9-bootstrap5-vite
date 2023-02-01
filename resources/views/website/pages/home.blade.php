@extends('website.layouts.base-website')
@section('title')
    Home
@endsection
@section('content')
    <div class="container-fluid fixed-top p-4">

        <div class="col-12">
            <div class="d-flex justify-content-end">
                @if (Route::has('login'))
                    <div>
                        @auth
                            <a href="{{ route('admin.dashboard') }}" class="text-muted">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-muted">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ms-4 text-muted">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
