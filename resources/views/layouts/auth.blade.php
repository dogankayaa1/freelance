<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Hesap' }} | Laravel Fortify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <main class="container py-5">
        <div class="card mx-auto shadow-sm" style="max-width: 30rem;">
            <div class="card-body p-4">
                @yield('content')
            </div>
        </div>
    </main>
</body>
</html>
