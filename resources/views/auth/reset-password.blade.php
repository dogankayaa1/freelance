@extends('layouts.auth')

@section('content')
    <h1 class="h3 mb-4">Yeni şifre belirle</h1>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <input type="hidden" name="email" value="{{ old('email', $request->email) }}">

        <div class="mb-3">
            <label for="password" class="form-label">Yeni şifre</label>
            <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password" required autofocus>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="form-label">Yeni şifre tekrarı</label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Şifreyi güncelle</button>
    </form>
@endsection
