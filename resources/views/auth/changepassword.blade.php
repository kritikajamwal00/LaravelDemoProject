@extends('layout.header')

@section('title')
ChangePassword
@endsection

@section('content')

@include('layout.userprofilenav')

<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $token }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

@include('layout.footer')
@endsection


 {{-- @extends('layout.header')

@section('title')
Change password
@endsection

@section('content')

@include('layout.userprofilenav')

<div class="container mt-lg-3 mt-4 signcolwid2">
     <p class="success">
                        @if(session('status'))
                            {{ session('status') }}
                        @endif
                    </p>
    <div class="row rowheight pt-lg-5">
        <div class="col-lg-6 col-md-6 col-12">
            <span class="loginimage"><img src="../images/signup1.png" class="img-fluid"></span>
        </div>
        <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-3 justify-content-center backlogin signupbox1">
            <div class="signupbox">
                <h3 class="fw-bold pb-lg-4 fs-3">Change your password?</h3>
                <form method="POST" id="myForm" enctype="multipart/form-data" action="{{ route('password.update') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="old_password" class="form-label fw-bold">Old Password</label>
                        <input type="password" name="old_password"  class="form-control" id="old_password">
                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label fw-bold">New Password</label>
                        <input type="password" name="new_password" class="form-control" id="new_password">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label fw-bold">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" id="confirm_password">
                    </div>
                    <p class="error">
                        @if ($errors->any())
                            {{ $errors->first() }}
                        @endif
                    </p>
                   
                    <p class="text-center">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
@include('layout.footer')
@endsection --}}
