@extends('layouts.auth')

@section('content')
    <h1 class="h3">Yönetim paneli</h1>
    <p class="text-muted">Bu sayfaya yalnızca <strong>admin</strong> rolündeki kullanıcılar erişebilir.</p>

    <a href="{{ route('dashboard') }}" class="btn btn-outline-primary">Panele dön</a>
@endsection
