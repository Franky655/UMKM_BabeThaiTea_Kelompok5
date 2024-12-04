<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // Tampilkan semua menu
    public function index()
    {
        $menu = Menu::all();
        return view('menu.index', compact('menu'));
    }

    // Form untuk menambahkan menu
    public function create()
    {
        return view('menu.create');
    }

    // Simpan data menu baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('image'), $imageName);
    
        // Simpan data ke database
        Menu::create([
            'nama_menu' => $request->nama_menu,
            'harga' => $request->harga,
            'image' => $imageName,
        ]);
    
        return redirect()->route('menu.index')->with('message', 'Data berhasil ditambahkan!');
    }

    // Tampilkan detail menu
    public function show(Menu $menu)
    {
        return view('menu.show', compact('menu'));
    }

    // Form untuk edit menu
    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    // Perbarui data menu
    public function update(Request $request, Menu $menu)
    {
        // Validasi input
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Update data menu
        $input = $request->all();
    
        // Proses upload file baru (jika ada)
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($menu->image && file_exists(public_path('image/' . $menu->image))) {
                unlink(public_path('image/' . $menu->image));
            }
    
            // Simpan gambar baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $imageName);
            $input['image'] = $imageName;
        }
    
        // Perbarui data di database
        $menu->update($input);
    
        return redirect()->route('menu.index')->with('success', 'Menu berhasil diperbarui!');
    }
    
    // Hapus menu
    public function destroy(Menu $menu)
    {
        // Periksa apakah file gambar ada, lalu hapus
        if ($menu->image && file_exists(public_path('image/' . $menu->image))) {
            unlink(public_path('image/' . $menu->image));
        }
    
        // Hapus data menu dari database
        $menu->delete();
    
        return redirect()->route('menu.index')->with('message', 'Data berhasil dihapus!');
    }

    
}
