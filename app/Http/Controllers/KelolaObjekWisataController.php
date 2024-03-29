<?php

namespace App\Http\Controllers;

use App\Models\KelolaObjekWisata;
use Illuminate\Http\Request;


class KelolaObjekWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengaturanObjekWisatas = KelolaObjekWisata::all();
        return view('kelola-objek-wisata.index', compact('pengaturanObjekWisatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelola-objek-wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaWisata' => 'required',
            'lokasi' => 'required',
            'kordinat' => 'required',
            'jamOperasional' => 'required',
            'jenisWisata' => 'required',
            'namaTiket' => 'required',
            'hargaTiket' => 'required',
            'fotoWisata' => 'required',

        ]);

        KelolaObjekWisata::create($request->all());
        return redirect()->route('kelola-objek-wisata.index')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(KelolaObjekWisata $pengaturanObjekWisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pengaturanObjekWisata = KelolaObjekWisata::findOrFail($id);
        return view('kelola-objek-wisata.edit', compact('pengaturanObjekWisata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'namaWisata' => 'required',
            'lokasi' => 'required',
            'kordinat' => 'required',
            'jamOperasional' => 'required',
            'jenisWisata' => 'required',
            'namaTiket' => 'required',
            'hargaTiket' => 'required',
            'fotoWisata' => 'required',
        ]);

        $pengaturanObjekWisata = KelolaObjekWisata::findOrFail($id);
        $pengaturanObjekWisata->update($request->all());

        return redirect()->route('kelola-objek-wisata.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengaturanObjekWisata = KelolaObjekWisata::findOrFail($id);
        $pengaturanObjekWisata->delete();

        return redirect()->route('kelola-objek-wisata.index')->with('success', 'Data berhasil dihapus!');
    }
}
