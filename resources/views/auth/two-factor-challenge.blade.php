@extends('layouts.auth')

@section('content')
    <h1 class="h3 mb-3">İki faktörlü doğrulama</h1>
    <p class="text-muted">Authenticator uygulamanızdaki kodu veya kurtarma kodunuzu girin.</p>

    <form method="POST" action="{{ route('two-factor.login') }}">
        @csrf
        <div class="mb-3">
            <label for="code" class="form-label">Doğrulama kodu</label>
            <input id="code" name="code" type="text" class="form-control @error('code') is-invalid @enderror" inputmode="numeric" autocomplete="one-time-code">
            @error('code')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="recovery_code" class="form-label">Kurtarma kodu</label>
            <input id="recovery_code" name="recovery_code" type="text" class="form-control @error('recovery_code') is-invalid @enderror" autocomplete="one-time-code">
            @error('recovery_code')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary w-100">Doğrula</button>
    </form>
@endsection
