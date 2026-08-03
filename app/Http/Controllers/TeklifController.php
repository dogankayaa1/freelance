<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeklifController extends Controller
{
    public function index()
    {
        $teklifler = \App\Models\Teklif::with('musteri')->orderBy('created_at', 'desc')->get();
        $musteriler = \App\Models\Musteri::whereIn('durum', ['active', 'pending'])->get();

        $toplamTeklif = \App\Models\Teklif::count();
        $onaylanan = \App\Models\Teklif::where('durum', 'approved')->count();
        $bekleyen = \App\Models\Teklif::whereIn('durum', ['draft', 'pending'])->count();
        $toplamTutar = \App\Models\Teklif::where('durum', 'approved')->sum('tutar');

        return view('admin.teklifler', compact('teklifler', 'musteriler', 'toplamTeklif', 'onaylanan', 'bekleyen', 'toplamTutar'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'musteri_id' => 'required|exists:musteris,id',
            'hizmet_turu' => 'required|string|max:255',
            'tutar' => 'required|numeric|min:0',
            'tarih' => 'required|date',
            'aciklama' => 'nullable|string',
        ]);

        // Generate unique teklif_no (e.g. TEK-2026-001)
        $year = date('Y', strtotime($validated['tarih']));
        $count = \App\Models\Teklif::whereYear('tarih', $year)->count() + 1;
        $validated['teklif_no'] = 'TEK-' . $year . '-' . str_pad($count, 3, '0', STR_PAD_LEFT);
        $validated['durum'] = 'draft';

        \App\Models\Teklif::create($validated);

        return redirect()->back()->with('success', 'Teklif başarıyla oluşturuldu.');
    }

    public function update(Request $request, \App\Models\Teklif $teklif)
    {
        $validated = $request->validate([
            'musteri_id' => 'required|exists:musteris,id',
            'hizmet_turu' => 'required|string|max:255',
            'tutar' => 'required|numeric|min:0',
            'durum' => 'required|in:draft,pending,approved,rejected,no_response,deal_failed',
            'aciklama' => 'nullable|string',
        ]);

        $teklif->update($validated);

        return redirect()->back()->with('success', 'Teklif başarıyla güncellendi.');
    }

    public function destroy(\App\Models\Teklif $teklif)
    {
        $teklif->delete();
        return redirect()->back()->with('success', 'Teklif başarıyla silindi.');
    }

    public function approve(\App\Models\Teklif $teklif)
    {
        $teklif->update(['durum' => 'approved']);
        return redirect()->back()->with('success', 'Teklif başarıyla onaylandı.');
    }
}
