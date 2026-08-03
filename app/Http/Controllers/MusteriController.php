<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusteriController extends Controller
{
    public function index()
    {
        $musteriler = \App\Models\Musteri::orderBy('created_at', 'desc')->get();
        $toplamMusteri = \App\Models\Musteri::count();
        $aktifMusteriler = \App\Models\Musteri::where('durum', 'active')->count();
        $yeniMusteriler = \App\Models\Musteri::where('created_at', '>=', now()->subDays(7))->count();

        return view('admin.musteri', compact('musteriler', 'toplamMusteri', 'aktifMusteriler', 'yeniMusteriler'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ad' => 'required|string|max:255',
            'soyad' => 'required|string|max:255',
            'email' => 'required|email|unique:musteris,email',
            'telefon' => 'nullable|string|max:20',
            'sirket' => 'nullable|string|max:255',
        ]);

        \App\Models\Musteri::create($validated);

        return redirect()->back()->with('success', 'Müşteri başarıyla eklendi.');
    }

    public function update(Request $request, \App\Models\Musteri $musteri)
    {
        $validated = $request->validate([
            'ad' => 'required|string|max:255',
            'soyad' => 'required|string|max:255',
            'email' => 'required|email|unique:musteris,email,' . $musteri->id,
            'telefon' => 'nullable|string|max:20',
            'sirket' => 'nullable|string|max:255',
            'durum' => 'nullable|in:active,pending,inactive',
        ]);

        $musteri->update($validated);

        return redirect()->back()->with('success', 'Müşteri başarıyla güncellendi.');
    }

    public function destroy(\App\Models\Musteri $musteri)
    {
        $musteri->delete();

        return redirect()->back()->with('success', 'Müşteri başarıyla silindi.');
    }
}
