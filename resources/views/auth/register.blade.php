@extends('layouts.auth')

@section('content')
    <h1 class="h3 mb-4">Hesap oluştur</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Ad soyad</label>
            <input id="name" name="name" type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" autocomplete="name" required autofocus>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-posta adresi</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" autocomplete="email" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Şifre</label>
            <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password" required>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="form-label">Şifre tekrarı</label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" required>
        </div>

        <button type="submit" class="btn btn-success w-100">Kayıt ol</button>
    </form>

    <p class="mb-0 mt-3 text-center">Zaten hesabın var mı? <a href="{{ route('login') }}">Giriş yap</a></p>
@endsection
