<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;



class KategoriController extends Controller
{
    public function showkategori()
    {
        $kategoris = \App\Models\Kategori::all();

        if ($kategoris->isEmpty()) {
            return view('admin.kategori', ['kategoris' => collect()]);
        }

        return view('admin.kategori', compact('kategoris'));
    }

    public function storeKategori(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        Kategori::create([
            'name' => $request->name
        ]);

        // dd($request);

        return redirect()->back()->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function updateKategori(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->update(['name' => $request->name]);

        return redirect()->back()->with('success', 'Kategori berhasil diupdate!');
    }

    public function hapusKategori($id)
    {
        Kategori::destroy($id);
        return redirect()->back()->with('success', 'Kategori berhasil dihapus!');
    }
}