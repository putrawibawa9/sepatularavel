<?php

namespace App\Http\Controllers;


use App\Models\Sepatu;
use Illuminate\Http\Request;

class SepatuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sepatu.index', [
            'sepatu' => Sepatu::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sepatu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'merk_sepatu' => 'required|string|max:255',
        //     'warna_sepatu' => 'required|string|max:255',
        //     'jenis_sepatu' => 'required|string|max:255',
        //     'bahan_sepatu' => 'required|string|max:255',
        //     'tgl_launching' => 'required|date',
        // ]);
        $data = $request->all();
        Sepatu::create($data);
        return redirect('/sepatu')->with('create', 'Data sepatu berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sepatu $sepatu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sepatu $sepatu)
    {
         return view('sepatu.edit', [
            'sepatu' => $sepatu
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sepatu $sepatu)
    {
        // $validatedData = $request->validate([
        //     'merk_sepatu' => 'required|string|max:255',
        //     'warna_sepatu' => 'required|string|max:255',
        //     'jenis_sepatu' => 'required|string|max:255',
        //     'bahan_sepatu' => 'required|string|max:255',
        //     'tgl_launching' => 'required|date',
        // ]);
        $data = $request->all();
        $sepatu->update($data);
        return redirect('/sepatu')->with('update', 'Data sepatu berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sepatu $sepatu)
    {
        $sepatu->delete();
        return redirect('/sepatu')->with('delete', 'Data sepatu berhasil dihapus!');
    }
}
