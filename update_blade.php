<?php
$file = 'resources/views/admin/proje-detay.blade.php';
$content = file_get_contents($file);

// Replace title
$content = preg_replace('/<h1(.*?)>E-Ticaret Platformu<\/h1>/', '<h1$1>{{ $proje->proje_adi ?? "Proje Detayı" }}</h1>', $content);

// Replace status
$content = preg_replace('/Aktif Proje<\/span>/', '{{ $proje->durum ?? "Aktif" }}</span>', $content);

// Replace finance
$content = preg_replace('/₺45\.000<span(.*?)>\/150k<\/span>/', '₺{{ number_format($proje->butce ?? 0, 2) }}', $content);

// Now for Kanban board. Let's find <div class="kanban-board"> and replace its contents.
$kanbanStart = strpos($content, '<div class="kanban-board">');
$kanbanEnd = strpos($content, '</div>', strpos($content, '<!-- Column 4: Done -->')) + 200; // rough estimation
// Better approach: use regex to replace everything between <div class="kanban-board"> and </div>
// Actually, it's safer to just write the new board and modals and replace the old ones.

file_put_contents($file, $content);
