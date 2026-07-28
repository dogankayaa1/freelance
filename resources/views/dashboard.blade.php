@extends('layouts.auth')

@section('content')
	<h1 class="h3">Hoş geldin, {{ auth()->user()->name }}</h1>
	<p class="text-muted">Oturumun güvenli şekilde açık.</p>

	<section class="border rounded p-3 mb-3" aria-labelledby="authorizations-title">
		<h2 id="authorizations-title" class="h5">Yetkileriniz</h2>
		<p class="mb-2"><strong>Roller:</strong></p>
		<div class="mb-3">
			@forelse (auth()->user()->getRoleNames() as $role)
				<span class="badge text-bg-primary">{{ $role }}</span>
			@empty
				<span class="text-muted">Atanmış rol yok.</span>
			@endforelse
		</div>

		<p class="mb-2"><strong>İzinler:</strong></p>
		<ul class="mb-0 ps-3">
			@forelse (auth()->user()->getAllPermissions() as $permission)
				<li>{{ $permission->name }}</li>
			@empty
				<li class="text-muted">Doğrudan veya rol üzerinden atanmış izin yok.</li>
			@endforelse
		</ul>
	</section>

	<div class="d-grid gap-2">
		@role('admin')
			<a href="{{ route('admin.dashboard') }}" class="btn btn-outline-dark">Yönetim paneli</a>
		@endrole
		<a href="{{ route('profile') }}" class="btn btn-outline-primary">Profil ve güvenlik ayarları</a>
		<form method="POST" action="{{ route('logout') }}">
			@csrf
			<button type="submit" class="btn btn-outline-danger w-100">Çıkış yap</button>
		</form>
	</div>
@endsection
