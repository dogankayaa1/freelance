@extends('layouts.auth')

@section('content')
    <h1 class="h3 mb-4">Profil ve güvenlik</h1>

    @if (session('status') === 'profile-information-updated')
        <div class="alert alert-success">Profiliniz güncellendi.</div>
    @endif

    <form method="POST" action="{{ route('user-profile-information.update') }}" class="border-bottom pb-4 mb-4">
        @csrf
        @method('PUT')
        <h2 class="h5">Profil bilgileri</h2>
        <div class="mb-3">
            <label for="name" class="form-label">Ad soyad</label>
            <input id="name" name="name" type="text" value="{{ old('name', auth()->user()->name) }}" class="form-control @error('name', 'updateProfileInformation') is-invalid @enderror" required>
            @error('name', 'updateProfileInformation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-posta adresi</label>
            <input id="email" name="email" type="email" value="{{ old('email', auth()->user()->email) }}" class="form-control @error('email', 'updateProfileInformation') is-invalid @enderror" autocomplete="email" required>
            @error('email', 'updateProfileInformation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-outline-primary">Profili güncelle</button>
    </form>

    @if (session('status') === 'password-updated')
        <div class="alert alert-success">Şifreniz güncellendi.</div>
    @endif

    <form method="POST" action="{{ route('user-password.update') }}">
        @csrf
        @method('PUT')
        <h2 class="h5">Şifre değiştir</h2>
        <div class="mb-3">
            <label for="current_password" class="form-label">Mevcut şifre</label>
            <input id="current_password" name="current_password" type="password" class="form-control @error('current_password', 'updatePassword') is-invalid @enderror" autocomplete="current-password" required>
            @error('current_password', 'updatePassword')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Yeni şifre</label>
            <input id="password" name="password" type="password" class="form-control @error('password', 'updatePassword') is-invalid @enderror" autocomplete="new-password" required>
            @error('password', 'updatePassword')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Yeni şifre tekrarı</label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" required>
        </div>
        <button type="submit" class="btn btn-outline-primary">Şifreyi güncelle</button>
    </form>

    <p class="mb-0 mt-4"><a href="{{ route('dashboard') }}">Panele dön</a></p>
@endsection
