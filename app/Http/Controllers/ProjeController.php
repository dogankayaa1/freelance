<?php

namespace App\Http\Controllers;

use App\Models\proje;
use Illuminate\Http\Request;

class ProjeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projeler = proje::orderBy('created_at', 'desc')->get();
        return view('admin.proje', compact('projeler'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    // Form verilerini doğrula (validation)
    $validate = $request->validate([
        'proje_adi' => 'required|string',
        'musteri' => 'required|string',
        'durum' => 'required|string',
        'aciklama' => 'required|string',
        'baslangic' => 'required|date',
        'bitis' => 'required|date',
        'butce' => 'required|numeric',
        'oncelik' => 'required|string',
    ]);

    // Doğrulanan verileri kaydedin
    proje::create($validate);

    return redirect()->back()->with('success', 'Proje başarıyla eklendi.');
}

    /**
     * Display the specified resource.
     */
    public function show(proje $proje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(proje $proje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, proje $proje)
    {
        $validate = $request->validate([
            'proje_adi' => 'required|string',
            'musteri' => 'required|string',
            'durum' => 'required|string',
            'aciklama' => 'required|string',
            'baslangic' => 'required|date',
            'bitis' => 'required|date',
            'butce' => 'required|numeric',
            'oncelik' => 'required|string',
        ]);
        
        $proje->update($validate);
        
        return redirect()->back()->with('success', 'Proje başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(proje $proje)
    {
        $proje->delete();
        return redirect()->back()->with('success', 'Proje başarıyla silindi.');
    }
}
