<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        return view('menu.index', compact('menu'));
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string|max:255',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('image'), $imageName);

        Menu::create([
            'nama_menu' => $request->nama_menu,
            'harga' => $request->harga,
            'image' => $imageName,
            'deskripsi'=> $request->deskripsi,
        ]);

        return redirect()->route('menu.index')->with('message', 'Data berhasil ditambahkan!');
    }

    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {

        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string|max:255',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {

            if ($menu->image && file_exists(public_path('image/' . $menu->image))) {
                unlink(public_path('image/' . $menu->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $imageName);
            $input['image'] = $imageName;
        }


        $menu->update($input);

        return redirect()->route('menu.index')->with('success', 'Menu berhasil diperbarui!');
    }


    public function destroy(Menu $menu)
    {

        if ($menu->image && file_exists(public_path('image/' . $menu->image))) {
            unlink(public_path('image/' . $menu->image));
        }

        $menu->delete();

        return redirect()->route('menu.index')->with('message', 'Menu berhasil dihapus!');
    }


}
