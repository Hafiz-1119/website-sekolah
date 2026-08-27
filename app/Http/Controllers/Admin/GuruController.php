<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    /**
     * Menampilkan daftar guru dan staff
     */
    public function index()
    {
        $guruStaff = Guru::latest()->get();

        return view('admin.guru.index', compact('guruStaff'));
    }

    /**
     * Form tambah guru/staff
     */
    public function create()
    {
        return view('admin.guru.create');
    }

    /**
     * Menyimpan guru/staff baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|in:guru,staff',
            'mapel' => 'nullable|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:10240',
        ]);

        // Kalau Guru, jabatan tidak digunakan
        if ($validated['kategori'] === 'guru') {
            $validated['jabatan'] = null;
        }

        // Kalau Staff, mapel tidak digunakan
        if ($validated['kategori'] === 'staff') {
            $validated['mapel'] = null;
        }

        // Upload foto
        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')
                ->store('guru', 'public');
        }

        Guru::create($validated);

        return redirect()
            ->route('admin.guru.index')
            ->with('success', 'Data guru/staff berhasil ditambahkan.');
    }

    /**
     * Form edit
     */
    public function edit(Guru $guru)
    {
        return view('admin.guru.edit', compact('guru'));
    }

    /**
     * Update data
     */
    public function update(Request $request, Guru $guru)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|in:guru,staff',
            'mapel' => 'nullable|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Sesuaikan field berdasarkan kategori
        if ($validated['kategori'] === 'guru') {
            $validated['jabatan'] = null;
        }

        if ($validated['kategori'] === 'staff') {
            $validated['mapel'] = null;
        }

        // Kalau upload foto baru
        if ($request->hasFile('foto')) {

            // Hapus foto lama
            if ($guru->foto) {
                Storage::disk('public')->delete($guru->foto);
            }

            // Simpan foto baru
            $validated['foto'] = $request->file('foto')
                ->store('guru', 'public');
        }

        $guru->update($validated);

        return redirect()
            ->route('admin.guru.index')
            ->with('success', 'Data guru/staff berhasil diperbarui.');
    }

    /**
     * Hapus data
     */
    public function destroy(Guru $guru)
    {
        // Hapus foto
        if ($guru->foto) {
            Storage::disk('public')->delete($guru->foto);
        }

        $guru->delete();

        return redirect()
            ->route('admin.guru.index')
            ->with('success', 'Data guru/staff berhasil dihapus.');
    }
}