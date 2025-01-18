<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan file gambar ke folder 'public/image'
        $destinationPath = public_path('image');
        if (!is_dir($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move($destinationPath, $imageName);

        // Simpan data ke database
        Slider::create(['image' => $imageName]);

        return redirect()->route('sliders.index')->with('message', 'Data berhasil ditambahkan!');
    }

    public function edit(Slider $slider)
    {
        return view('slider.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($slider->image && file_exists(public_path('image/' . $slider->image))) {
                unlink(public_path('image/' . $slider->image));
            }

            // Upload gambar baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $imageName);
            $slider->update(['image' => $imageName]);
        }

        return redirect()->route('sliders.index')->with('message', 'Data berhasil diperbarui!');
    }

    public function destroy(Slider $slider)
    {
        // Hapus file gambar jika ada
        $imagePath = public_path('image/' . $slider->image);
        if ($slider->image && file_exists($imagePath)) {
            try {
                unlink($imagePath);
            } catch (\Exception $e) {
                return redirect()->route('sliders.index')->with('error', 'Gagal menghapus gambar: ' . $e->getMessage());
            }
        }

        // Hapus data slider
        $slider->delete();

        return redirect()->route('sliders.index')->with('message', 'Slider berhasil dihapus!');
    }
}
