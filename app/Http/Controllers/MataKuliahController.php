<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    // Menampilkan daftar mata kuliah
    public function index()
    {
        $mataKuliahs = MataKuliah::all();
        return view('list_mk', compact('mataKuliahs'));
    }

    // Menampilkan form tambah data mata kuliah
    public function create()
    {
        return view('create_mk');
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required|string|max:255',
            'sks' => 'required|integer',
        ]);

        MataKuliah::create([
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
        ]);

        return redirect('/matakuliah');
    }

    // Menampilkan form edit berdasarkan UUID
    public function edit($id)
    {
        $mataKuliah = MataKuliah::where('id', $id)->firstOrFail();
        return view('edit_mk', compact('mataKuliah'));
    }

    // Menyimpan hasil perubahan data ke database
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mk' => 'required|string|max:255',
            'sks' => 'required|integer',
        ]);

        $mataKuliah = MataKuliah::where('id', $id)->firstOrFail();
        $mataKuliah->update([
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
        ]);

        return redirect('/matakuliah');
    }

    // Menghapus data berdasarkan UUID
    public function destroy($id)
    {
        $mataKuliah = MataKuliah::where('id', $id)->firstOrFail();
        $mataKuliah->delete();

        return redirect('/matakuliah');
    }
}
