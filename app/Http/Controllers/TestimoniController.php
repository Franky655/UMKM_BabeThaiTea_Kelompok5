<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('testimoni.index', compact('testimoni'));
    }

    public function create()
    {
        return view('testimoni.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
        ]);

        Testimoni::create([
            'title'       => $request->title,
            'description' => $request->description,
        ]);

        return redirect('testimoni')->with('message', 'Testimoni berhasil disimpan!');
    }

    public function edit(Testimoni $testimoni)
    {
        return view('testimoni.edit', compact('testimoni'));
    }

    public function update(Request $request, Testimoni $testimoni)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
        ]);

        $testimoni->update([
            'title'       => $request->title,
            'description' => $request->description,
        ]);

        return redirect('admin/testimoni')->with('message', 'Testimoni berhasil diperbarui!');
    }

    public function destroy(Testimoni $testimoni)
    {
        $testimoni->delete();

        return redirect('admin/testimoni')->with('message', 'Testimoni berhasil dihapus!');
    }

    public function __construct()
    {
        $this->middleware('auth')->except(['store']);
    }
}
