@extends('layouts.auth')

@section('content')
    <h1 class="h3 mb-4">Giriş yap</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">E-posta adresi</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" autocomplete="email" required autofocus>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Şifre</label>
            <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" autocomplete="current-password" required>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="form-check">
                <input id="remember" name="remember" type="checkbox" class="form-check-input">
                <label for="remember" class="form-check-label">Beni hatırla</label>
            </div>
            <a href="{{ route('password.request') }}">Şifremi unuttum</a>
        </div>

        <button type="submit" class="btn btn-primary w-100">Giriş yap</button>
    </form>

    <p class="mb-0 mt-3 text-center">Hesabın yok mu? <a href="{{ route('register') }}">Kayıt ol</a></p>
@endsection
