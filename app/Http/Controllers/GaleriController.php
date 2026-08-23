<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    // =========================
    // HALAMAN GALERI ADMIN
    // =========================

    public function index()
    {
        $galeris = Galeri::latest()->get();

        return view('admin.galeri.index', compact('galeris'));
    }


    // =========================
    // FORM TAMBAH GALERI
    // =========================

    public function create()
    {
        return view('admin.galeri.create');
    }


    // =========================
    // SIMPAN GALERI
    // =========================

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:10000'
        ]);

        $foto = $request->file('foto')
                        ->store('galeri', 'public');

        Galeri::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'foto' => $foto
        ]);

        return redirect()
            ->route('admin.galeri')
            ->with('success', 'Galeri berhasil ditambahkan!');
    }


    // =========================
    // FORM EDIT
    // =========================

    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);

        return view('admin.galeri.edit', compact('galeri'));
    }


    // =========================
    // UPDATE GALERI
    // =========================

    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);


        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori
        ];


        if ($request->hasFile('foto')) {

            // Hapus foto lama
            if ($galeri->foto) {
                Storage::disk('public')->delete($galeri->foto);
            }

            // Upload foto baru
            $data['foto'] = $request->file('foto')
                                    ->store('galeri', 'public');
        }


        $galeri->update($data);

        return redirect()
            ->route('admin.galeri')
            ->with('success', 'Galeri berhasil diperbarui!');
    }


    // =========================
    // HAPUS GALERI
    // =========================

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        if ($galeri->foto) {
            Storage::disk('public')->delete($galeri->foto);
        }

        $galeri->delete();

        return redirect()
            ->route('admin.galeri')
            ->with('success', 'Galeri berhasil dihapus!');
    }
}