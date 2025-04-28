@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(135deg,rgb(54, 47, 61),rgb(27, 23, 27));
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Poppins', sans-serif;
    }

    .login-container {
        background: #fff;
        border-radius: 15px;
        box-shadow: 0 15px 25px rgba(20, 20, 20, 0.2);
        display: flex;
        max-width: 900px;
        width: 100%;
        overflow: hidden;
    }

    .login-form {
        flex: 1;
        padding: 40px;
    }

    .login-form h2 {
        margin-bottom: 20px;
        color: #333;
        font-weight: bold;
    }

    .form-group {
        margin-bottom: 20px;
        position: relative;
    }

    .form-control {
        border-radius: 30px;
        padding: 10px 40px;
        border: 1px solid #ddd;
        width: 100%;
        transition: all 0.3s;
    }

    .form-control:focus {
        border-color:rgb(44, 39, 49);
        box-shadow: 0 0 5px rgba(37, 36, 39, 0.5);
    }

    .form-icon {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #aaa;
    }

    .btn-primary {
        background: linear-gradient(to right,rgb(44, 40, 48),rgb(83, 48, 141));
        border: none;
        border-radius: 30px;
        padding: 10px;
        width: 100%;
        color: #fff;
        font-weight: bold;
        transition: 0.3s;
    }

    .btn-primary:hover {
        opacity: 0.9;
    }

    .login-info {
        background: linear-gradient(to right,rgb(44, 41, 46),rgb(71, 53, 73));
        color: #fff;
        flex: 1;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .login-info h3 {
        font-size: 28px;
        margin-bottom: 15px;
    }

    .login-info p {
        text-align: center;
    }

    .btn-link {
        color:rgb(52, 46, 58);
        text-decoration: none;
        margin-top: 10px;
        display: inline-block;
    }

    .btn-link:hover {
        text-decoration: underline;
    }
</style>

<div class="login-container">
    <div class="login-form">
        <h2>Hello!</h2>
        <p>Sign in by your account</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <span class="form-icon">
                    <i class="fas fa-envelope"></i>
                </span>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <span class="form-icon">
                    <i class="fas fa-lock"></i>
                </span>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    Remember Me
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Sign In</button>

            @if (Route::has('password.request'))
            <a class="btn-link" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>
            @endif
        </form>
    </div>

    <div class="login-info">
    <h3>Welcome Back!</h3>
    <p>Please verify your identity to access the CLE administration</p>
    
    <img src="assets/img/LOGO-CLE2.png" alt="logo del CLE" style="max-width: 250px; margin-top: 40px;">
</div> 


<!-- Font Awesome CDN for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection