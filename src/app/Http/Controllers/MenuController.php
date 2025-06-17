<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;



class MenuController extends Controller
{
    public function showMenu()
    {
        $kategoris = \App\Models\Kategori::all();
        $menus = \App\Models\Menu::with('kategori')->get();

        if ( $menus->isEmpty()) {
            return view('menu', ['kategoris' => collect(), 'menus' => collect()]);
        }
        // dd($menus);

        return view('menu', compact('menus','kategoris'));
    }
}