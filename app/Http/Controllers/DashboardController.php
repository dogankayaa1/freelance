<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Onaylanan Teklifler
        $onaylananTekliflerTutar = \App\Models\Teklif::where('durum', 'approved')->sum('tutar');
        
        // 2. Bekleyen Ödemeler (Onay bekleyen teklifler)
        $bekleyenOdemelerTutar = \App\Models\Teklif::where('durum', 'pending')->sum('tutar');

        // 3. Devam Eden İşler
        $devamEdenIsler = \App\Models\proje::whereIn('durum', ['active', 'devam_ediyor', 'pending'])->count();

        // 4. Başarı Oranı
        $toplamTeklif = \App\Models\Teklif::count();
        $onaylananTeklif = \App\Models\Teklif::where('durum', 'approved')->count();
        $basariOrani = $toplamTeklif > 0 ? round(($onaylananTeklif / $toplamTeklif) * 100) : 0;

        // 5. Son Teklifler
        $sonTeklifler = \App\Models\Teklif::with('musteri')->orderBy('created_at', 'desc')->take(5)->get();

        // 6. Proje Tamamlanma Oranları
        $projeler = \App\Models\proje::with('tasks')->whereIn('durum', ['active', 'devam_ediyor', 'pending'])->take(4)->get();
        $projelerIlerleme = $projeler->map(function ($proje) {
            $totalTasks = $proje->tasks->count();
            $completedTasks = $proje->tasks->where('status', 'done')->count();
            $progress = $totalTasks > 0 ? round(($completedTasks / $totalTasks) * 100) : 0;
            return (object) [
                'proje_adi' => $proje->proje_adi,
                'progress' => $progress
            ];
        });

        // 7. Yaklaşan Görevler
        $yaklasanGorevler = \App\Models\Task::where('status', 'todo')
            ->orderBy('due_date', 'asc')
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'onaylananTekliflerTutar',
            'bekleyenOdemelerTutar',
            'devamEdenIsler',
            'basariOrani',
            'sonTeklifler',
            'projelerIlerleme',
            'yaklasanGorevler'
        ));
    }
}
