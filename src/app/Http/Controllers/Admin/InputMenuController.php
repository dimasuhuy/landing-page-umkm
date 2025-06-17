<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;


class InputMenuController extends Controller
{
    public function showInputMenu()
    {
        $kategoris = \App\Models\Kategori::all();
        // dd($kategoris);
        return view('admin.input-menu', compact('kategoris'));
    }


    public function storeMenu(Request $request)
    {
        // dd($request->file('image'));

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|integer',
            'size' => [
                        'nullable',
                        'regex:/^(S|M|L)(,(S|M|L))*$/'],
            'category_id' => 'required|integer',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $ext = $request->file('image')->extension();
        if (!in_array(strtolower($ext), ['jpg', 'jpeg', 'png'])) {
            return redirect()->back()->withErrors(['image' => 'Format gambar tidak didukung!']);
        }

        $imageName = time() . '.' . $ext;
        $request->image->move(public_path('img/product'), $imageName);

        Menu::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'size' => $request->size,
            'category_id' => $request->category_id,
            'image' => $imageName
        ]);

        return redirect()->back()->with('success', 'Menu berhasil ditambahkan!');
    }
}