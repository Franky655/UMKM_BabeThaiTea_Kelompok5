<?php
namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string|max:255',
            'judul'     => 'required|string|max:255',
        ]);

        $imageName = $this->uploadImage($request);

        try {
            Slider::create([
                'image'     => $imageName,
                'deskripsi' => $request->deskripsi,
                'judul'     => $request->judul,
            ]);
            return redirect()->route('sliders.index')->with('message', 'Data berhasil ditambahkan!');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal menambahkan data: ' . $e->getMessage());
        }
    }

    public function edit(Slider $slider)
    {
        return view('slider.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'image'     => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string|max:255',
            'judul'     => 'required|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $this->deleteImage($slider->image);
            $imageName = $this->uploadImage($request);
            $slider->image = $imageName;
        }

        $slider->update($request->only('deskripsi', 'judul'));

        return redirect()->route('sliders.index')->with('message', 'Data berhasil diperbarui!');
    }

    public function destroy(Slider $slider)
    {
        try {
            $this->deleteImage($slider->image);
            $slider->delete();
            return redirect()->route('sliders.index')->with('message', 'Slider berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->route('sliders.index')->with('error', 'Gagal menghapus slider: ' . $e->getMessage());
        }
    }

    private function uploadImage(Request $request)
    {
        $destinationPath = public_path('image');
        if (!is_dir($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move($destinationPath, $imageName);
        return $imageName;
    }

    private function deleteImage($imageName)
    {
        $imagePath = public_path('image/' . $imageName);
        if ($imageName && File::exists($imagePath)) {
            File::delete($imagePath);
        }
    }
}
