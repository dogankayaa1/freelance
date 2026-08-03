<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer BizDev - Clean Light Tema</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite('resources/css/style.css')


</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="brand-logo">
            <i class="fa-solid fa-layer-group"></i> BizDev Panel
        </div>
        <div class="nav-menu">
            <a href="/admin" class="nav-item-custom active"><i class="fa-solid fa-house"></i> Kontrol Paneli</a>
            <a href="/musteri" class="nav-item-custom"><i class="fa-solid fa-address-book"></i> Müşteri Rehberi</a>
            <a href="/proje" class="nav-item-custom"><i class="fa-solid fa-folder-open"></i> Proje Yönetimi</a>
            <a href="/teklifler" class="nav-item-custom"><i class="fa-solid fa-file-signature"></i> Teklifler</a>
            <a href="/finans" class="nav-item-custom"><i class="fa-solid fa-chart-line"></i> Finans Raporları</a>
            <a href="/ayarlar" class="nav-item-custom"><i class="fa-solid fa-gear"></i> Ayarlar</a>
            <form method="POST" action="{{ route('logout') }}">
    @csrf
            <button type="submit" class="nav-item-custom" style="color: #dc3545; border: none; background: none; padding: 0;"><i class="fa-solid fa-right-from-bracket"></i> Çıkış Yap</button>
            </form>

        </div>
    </div>
