<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FinansController extends Controller
{
    public function index()
    {
        $toplamGelir = \App\Models\Islem::where('tip', 'gelir')->sum('tutar');
        $toplamGider = \App\Models\Islem::where('tip', 'gider')->sum('tutar');
        $netKazanc = $toplamGelir - $toplamGider;
        
        $aktifProjeler = \App\Models\proje::whereIn('durum', ['active', 'devam_ediyor', 'onaylandi', 'pending'])->sum('butce'); // Adapting to possible statuses

        $islemler = \App\Models\Islem::orderBy('tarih', 'desc')->orderBy('created_at', 'desc')->take(10)->get();

        // Aylık özet (son 6 ay için)
        $aylikOzet = \App\Models\Islem::select(
            DB::raw('DATE_FORMAT(tarih, "%Y-%m") as ay_yil'),
            DB::raw('SUM(CASE WHEN tip = "gelir" THEN tutar ELSE 0 END) as gelir'),
            DB::raw('SUM(CASE WHEN tip = "gider" THEN tutar ELSE 0 END) as gider'),
            DB::raw('COUNT(id) as toplam_islem')
        )
        ->groupBy('ay_yil')
        ->orderBy('ay_yil', 'desc')
        ->take(6)
        ->get()
        ->map(function ($item) {
            $date = Carbon::createFromFormat('Y-m', $item->ay_yil);
            $item->ay_adi = $date->translatedFormat('F Y');
            $item->net = $item->gelir - $item->gider;
            return $item;
        });

        return view('admin.finans', compact('toplamGelir', 'toplamGider', 'netKazanc', 'aktifProjeler', 'islemler', 'aylikOzet'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tip' => 'required|in:gelir,gider,transfer',
            'baslik' => 'required|string|max:255',
            'tutar' => 'required|numeric|min:0',
            'kategori' => 'nullable|string|max:255',
            'tarih' => 'required|date',
            'aciklama' => 'nullable|string',
        ]);

        \App\Models\Islem::create($validated);

        return redirect()->back()->with('success', 'İşlem başarıyla eklendi.');
    }
}
