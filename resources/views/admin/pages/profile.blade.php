@extends('admin.layouts.base-admin')
@section('title')
    Profile
@endsection
@section('content')
    <div class="p-3">
        <x-slot name="header">
            <h2 class="h4 font-weight-bold">
                @yield('title')
            </h2>
        </x-slot>

        <div>
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <div class="py-3">
                    <hr />
                </div>
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                @livewire('profile.update-password-form')

                <div class="py-3">
                    <hr />
                </div>
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                @livewire('profile.two-factor-authentication-form')

                <div class="py-3">
                    <hr />
                </div>
            @endif

            @livewire('profile.logout-other-browser-sessions-form')

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <div class="py-3">
                    <hr />
                </div>
                @livewire('profile.delete-user-form')
            @endif

            <div class="py-3">
            </div>
        </div>
    </div>
@endsection
