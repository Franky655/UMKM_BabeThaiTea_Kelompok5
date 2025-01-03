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

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('image'), $imageName);

        Slider::create([
            'image' => $imageName,
        ]);
    
        return redirect()->route('slider.index')->with('message', 'Data berhasil ditambahkan!');
    }

    public function edit(Slider $slider)
    {
        return view('slider.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('image')) {
            if ($slider->image && file_exists(public_path('image/' . $slider->image))) {
                unlink(public_path('image/' . $slider->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $imageName);
            $input['image'] = $imageName;
        }

        $slider->update($input);

        return redirect()->route('slider.index')->with('success', 'Slider berhasil diperbarui!');
    }

    public function destroy(Slider $slider)
    {
        if ($slider->image && file_exists(public_path('image/' . $slider->image))) {
            unlink(public_path('image/' . $slider->image));
        }

        $slider->delete();

        return redirect()->route('slider.index')->with('message', 'Slider berhasil dihapus!');
    }
}
