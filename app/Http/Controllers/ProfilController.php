<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    // Menampilkan halaman Edit Profil
    public function edit()
    {
        // Ambil data profil pertama. Jika belum ada di database, buat instansi kosong baru.
        $profil = Profil::first() ?? new Profil();
        return view('admin.profil.edit', compact('profil'));
    }

    // Menyimpan pembaruan profil
    public function update(Request $request)
    {
        $validated = $request->validate([
                'sejarah' => 'nullable|string',
                'visi' => 'nullable|string',
                'misi' => 'nullable|string',
                'foto_sekolah' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $profil = Profil::first();

            if (!$profil) {
                $profil = new Profil();
            }

            if ($request->hasFile('foto_sekolah')) {
                if ($profil->foto_sekolah) {
                    Storage::disk('public')->delete($profil->foto_sekolah);
                }
                $path = $request->file('foto_sekolah')->store('profil_images', 'public');
                $profil->foto_sekolah = $path;
            }

            // Hanya update kolom jika ada inputan dari form
            if ($request->filled('sejarah')) {
                $profil->sejarah = $validated['sejarah'];
            }
            if ($request->filled('visi')) {
                $profil->visi = $validated['visi'];
            }
            if ($request->filled('misi')) {
                $profil->misi = $validated['misi'];
            }
            
            $profil->save();

            // Ubah redirect mengarah ke route dashboard (sesuaikan 'admin.dashboard' dengan nama route dashboard-mu)
            return redirect()->route('admin.dashboard')->with('success', 'Profil Sekolah berhasil diperbarui!');
        }
}