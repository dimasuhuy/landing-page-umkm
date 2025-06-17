<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $kategoris = \App\Models\Kategori::all();
        $menus = \App\Models\Menu::with('kategori')->get();

        if ( $menus->isEmpty()) {
            return view('admin.dashboard', ['kategoris' => collect(), 'menus' => collect()]);
        }
        // dd($menus);

        return view('admin.dashboard', compact('menus','kategoris'));
    }

    public function updateMenu(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|integer',
            'size' => [
                'nullable',
                'regex:/^(S|M|L)(,(S|M|L))*$/'
            ],
            'category_id' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $menu = Menu::findOrFail($id);

        $imageName = $menu->image; // default: pakai gambar lama

        // Jika user upload gambar baru
        if ($request->hasFile('image')) {
            $ext = $request->file('image')->extension();
            if (!in_array(strtolower($ext), ['jpg', 'jpeg', 'png'])) {
                return redirect()->back()->withErrors(['image' => 'Format gambar tidak didukung!']);
            }

            // Hapus gambar lama
            $oldPath = public_path('img/product/' . $menu->image);
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            // Simpan gambar baru
            $imageName = time() . '.' . $ext;
            $request->image->move(public_path('img/product'), $imageName);
        }

        $menu->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'size' => $request->size,
            'category_id' => $request->category_id,
            'image' => $imageName
        ]);

        return redirect()->back()->with('success', 'Menu berhasil diupdate!');
    }

    public function hapusMenu($id)
    {
        $menu = Menu::find($id);

        if ($menu) {
            $imagePath = public_path('img/product/' . $menu->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $menu->delete();
        }

        return redirect()->back()->with('success', 'Menu berhasil dihapus!');
    }
}