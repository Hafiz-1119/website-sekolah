<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    // =========================
    // HALAMAN PRESTASI ADMIN
    // =========================

    public function index()
    {
        $prestasis = Prestasi::latest()->get();

        return view('admin.prestasi.index', compact('prestasis'));
    }


    // =========================
    // FORM TAMBAH PRESTASI
    // =========================

    public function create()
    {
        return view('admin.prestasi.create');
    }


    // =========================
    // SIMPAN PRESTASI
    // =========================

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('prestasi', 'public');
        }

        Prestasi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $foto,
        ]);

        return redirect()
            ->route('admin.prestasi.index')
            ->with('success', 'Prestasi berhasil ditambahkan!');
    }


    // =========================
    // FORM EDIT
    // =========================

    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        return view('admin.prestasi.edit', compact('prestasi'));
    }


    // =========================
    // UPDATE PRESTASI
    // =========================

    public function update(Request $request, $id)
    {
        $prestasi = Prestasi::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10000',
        ]);

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('prestasi', 'public');
        }

        $prestasi->update($data);

        return redirect()
            ->route('admin.prestasi.index')
            ->with('success', 'Prestasi berhasil diperbarui!');
    }


    // =========================
    // HAPUS PRESTASI
    // =========================

    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        $prestasi->delete();

        return redirect()
            ->route('admin.prestasi.index')
            ->with('success', 'Prestasi berhasil dihapus!');
    }
}