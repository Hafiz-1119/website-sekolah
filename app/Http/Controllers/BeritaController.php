<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    // =========================
    // HALAMAN KELOLA BERITA
    // =========================

    public function index()
{
    $beritas = Berita::latest('tanggal')->get();

    return view('admin.berita.index', compact('beritas'));
}


    // =========================
    // FORM TAMBAH BERITA
    // =========================

    public function create()
    {
        return view('admin.berita.create');
    }


    // =========================
    // SIMPAN BERITA
    // =========================

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'penulis' => 'nullable|string|max:100',
            'tanggal' => 'required|date',
            'ringkasan' => 'nullable|string',
            'isi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $namaFoto = null;

        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $file = $request->file('foto');
            // Buat nama file unik berdasarkan timestamp
            $filename = time() . '_' . $file->getClientOriginalName();
            
            // Pindahkan langsung file ke folder public/storage/berita
            $file->move(public_path('storage/berita'), $filename);
            
            // Simpan path relatif ke variabel database
            $namaFoto = 'berita/' . $filename;
        }

        Berita::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'penulis' => $request->penulis,
            'tanggal' => $request->tanggal,
            'ringkasan' => $request->ringkasan,
            'isi' => $request->isi,
            'foto' => $namaFoto,
        ]);

        return redirect()
            ->route('admin.berita')
            ->with('success', 'Berita berhasil ditambahkan!');
    }


    // =========================
    // FORM EDIT BERITA
    // =========================

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);

        return view('admin.berita.edit', compact('berita'));
    }


    // =========================
    // UPDATE BERITA
    // =========================

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'penulis' => 'nullable|string|max:100',
            'tanggal' => 'required|date',
            'ringkasan' => 'nullable|string',
            'isi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $namaFoto = $berita->foto;

        if ($request->hasFile('foto')) {

            if ($berita->foto) {
                Storage::disk('public')->delete($berita->foto);
            }

            $namaFoto = $request->file('foto')
                                ->store('berita', 'public');
        }

        $berita->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'penulis' => $request->penulis,
            'tanggal' => $request->tanggal,
            'ringkasan' => $request->ringkasan,
            'isi' => $request->isi,
            'foto' => $namaFoto,
        ]);

        return redirect()
            ->route('admin.berita')
            ->with('success', 'Berita berhasil diperbarui!');
    }


    // =========================
    // HAPUS BERITA
    // =========================

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->foto) {
            Storage::disk('public')->delete($berita->foto);
        }

        $berita->delete();

        return redirect()
            ->route('admin.berita')
            ->with('success', 'Berita berhasil dihapus!');
    }
}