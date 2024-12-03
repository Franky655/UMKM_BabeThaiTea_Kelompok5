<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informasi = Informasi::all();

        return view('informasi.index', compact('informasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('informasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required', 'image' => 'required|image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Informasi::create($input);

        return redirect()->route('informasi.index')->with('message', 'Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Informasi $informasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasi $informasi)
    {
        return view('informasi.edit', compact('informasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasi $informasi)
    {
        // Validasi data yang dikirim
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  // validasi untuk gambar
        ]);

        // Update data tanpa gambar (jika gambar baru tidak dikirim)
        $informasi->title = $request->title;
        $informasi->description = $request->description;

        // Jika ada gambar yang di-upload
        if ($request->hasFile('image')) {
            // Menghapus gambar lama jika ada
            if ($informasi->image) {
                Storage::delete('public/images/' . $informasi->image);
            }

            // Menyimpan gambar baru
            $imagePath = $request->file('image')->store('images', 'public');
            $informasi->image = basename($imagePath); // Menyimpan nama file gambar di database
        }

        // Simpan perubahan
        $informasi->save();

        // Redirect setelah berhasil
        return redirect()->route('informasi.index')->with('success', 'Informasi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasi $informasi)
    {
        $informasi->delete();

        return redirect()->route('informasi.index')->with('message', 'Data berhasil dihapus');
    }
}
