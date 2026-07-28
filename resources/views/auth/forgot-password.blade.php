@extends('layouts.auth')

@section('content')
    <h1 class="h3 mb-3">Şifremi unuttum</h1>
    <p class="text-muted">E-posta adresinizi girin; size şifre sıfırlama bağlantısı gönderelim.</p>

    @if (session('status'))
        <div class="alert alert-success" role="status">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="mb-4">
            <label for="email" class="form-label">E-posta adresi</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" autocomplete="email" required autofocus>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary w-100">Sıfırlama bağlantısı gönder</button>
    </form>

    <p class="mb-0 mt-3 text-center"><a href="{{ route('login') }}">Girişe dön</a></p>
@endsection
