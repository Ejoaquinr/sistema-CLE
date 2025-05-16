@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #1d1b31, #3b1f57);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .auth-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0,0,0,0.2);
        display: flex;
        max-width: 900px;
        margin: 40px auto;
    }
    .auth-left, .auth-right {
        flex: 1;
        padding: 40px;
    }
    .auth-left {
        background: #fff;
    }
    .auth-right {
        background: linear-gradient(135deg, #2b224e, #432b66);
        color: #fff;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .auth-right img {
        max-width: 70%;
        margin: 20px auto;
    }
    .btn-purple {
        background: linear-gradient(to right, #6a11cb, #2575fc);
        color: #fff;
        border: none;
        padding: 10px 25px;
        border-radius: 25px;
        transition: background 0.3s;
    }
    .btn-purple:hover {
        background: linear-gradient(to right, #2575fc, #6a11cb);
    }
    .form-spacing {
        margin-top: 40px;
    }
</style>

<div class="auth-card">
    <div class="auth-left">
        <h2 class="mb-4">Forgot Your Password?</h2>
        <p class="text-muted mb-4">Enter your email and we’ll send you a reset link.</p>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input id="email" type="email"
                       class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-spacing text-end">
                <button type="submit" class="btn btn-purple">
                    Send Reset Link
                </button>
            </div>
        </form>
    </div>

    <div class="auth-right">
        <h3>Welcome Back!</h3>
        <p>We'll help you get back into your CLE account</p>
        <img src="{{ asset('images/CLE.png') }}" alt="CLE Logo">
    </div>
</div>
@endsection