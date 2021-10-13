@extends('layouts.frontend.auth-app')

@php
    $meta_title = "Password Reset";
    $meta_description = "Did you forget your password? Set a new one here.";
@endphp

@push('css')
    <link href="{{ asset('public/assets/frontend/css/auth/login.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container-fluid login-page">
<div class="container">
<div class="row login-logo">
            <div class="col-md-12">
                <a href="{{ route('home') }}"><img src="{{ asset('public/assets/frontend/images/logo.png') }}" alt="Sonic Learning Management System"></a>
            </div>
        </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <h3 class="form-header">Reset your password</h3>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Enter your email address..." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <div class="col-md-6">
                                <button type="submit" class="btn default-btn">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
