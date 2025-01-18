<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
<<<<<<< HEAD
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = Testimoni::all();

        return view('testimoni.index', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
=======
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('testimoni.index', compact('testimoni'));
    }

>>>>>>> origin/TengkuMR
    public function create()
    {
        return view('testimoni.create');
    }

<<<<<<< HEAD
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

        Testimoni::create($input);

        return redirect('admin/testimoni')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
=======
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

>>>>>>> origin/TengkuMR
    public function edit(Testimoni $testimoni)
    {
        return view('testimoni.edit', compact('testimoni'));
    }

<<<<<<< HEAD
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required', 'image' => 'image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }else {
            unset($input['image']);
        }

        $testimoni->update($input);

        return redirect('admin/testimoni')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
=======
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

>>>>>>> origin/TengkuMR
    public function destroy(Testimoni $testimoni)
    {
        $testimoni->delete();

<<<<<<< HEAD
        return redirect('admin/testimoni')->with('message', 'Data berhasil dihapus');
=======
        return redirect('admin/testimoni')->with('message', 'Testimoni berhasil dihapus!');
    }

    public function __construct()
    {
        $this->middleware('auth')->except(['store']);
>>>>>>> origin/TengkuMR
    }
}
