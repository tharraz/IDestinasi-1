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
            'nama' => 'required',
            'lokasi' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            'jamOp' => 'required',
            'jenis' => 'required',
            'Ntiket' => 'required',
            'Htiket' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Menambahkan validasi untuk gambar
        ]);
    
        // Menyimpan gambar ke direktori penyimpanan dengan sub-direktori 'post-images'
        $imagePath = $request->file('foto')->store('post-images', 'public');
    
        // Mengambil nama file gambar saja
        $imageName = basename($imagePath);
    
        // Membuat entri baru dalam database
        KelolaObjekWisata::create([
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'jamOp' => $request->jamOp,
            'jenis' => $request->jenis,
            'Ntiket' => $request->Ntiket,
            'Htiket' => $request->Htiket,
            'foto' => $imageName, // Menyimpan hanya nama file gambar
        ]);
    
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
            'nama' => 'required',
            'lokasi' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            'jamOp' => 'required',
            'jenis' => 'required',
            'Ntiket' => 'required',
            'Htiket' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $pengaturanObjekWisata = KelolaObjekWisata::findOrFail($id);

        $imagePath = $request->file('foto')->store('post-images', 'public');
        $imageName = basename($imagePath);

        $pengaturanObjekWisata->update([
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'jamOp' => $request->jamOp,
            'jenis' => $request->jenis,
            'Ntiket' => $request->Ntiket,
            'Htiket' => $request->Htiket,
            'foto' => $imageName,
        ]);

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
