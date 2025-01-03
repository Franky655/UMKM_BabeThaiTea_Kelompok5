<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{

    public function index()
    {
        $promo = Promo::all();

        return view('promo.index', compact('promo'));
    }

    public function create()
    {
        return view('promo.create');
    }


    public function store(Request $request)
    {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'deskripsi' => 'required|string|max:255',
            ]);
    
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $imageName);
    
            Promo::create([
                'image' => $imageName,
                'deskripsi' => $request->deskripsi,
            ]);
        
            return redirect()->route('promo.index')->with('message', 'Data berhasil ditambahkan!');
        }
    
           
    public function show($id)
    {
        //
    }

    public function edit(Promo $promo)
    {
        return view('promo.edit', compact('promo'));
    }


    public function update(Request $request, Promo $promo)
    {
        $request->validate([ 
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|string|max:255',
        ]);
    
        $input = $request->all();
    
        if ($request->hasFile('image')) {

            if ($promo->image && file_exists(public_path('image/' . $promo->image))) {
                unlink(public_path('image/' . $promo->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $imageName);
            $input['image'] = $imageName;
        }
    

        $promo->update($input);
    
        return redirect()->route('promo.index')->with('success', 'Promo berhasil diperbarui!');
    }



    public function destroy(Promo $promo)
    {
        if ($promo->image && file_exists(public_path('image/' . $promo->image))) {
            unlink(public_path('image/' . $promo->image));
        }

        $promo->delete();
    
        return redirect()->route('promo.index')->with('message', 'Promo berhasil dihapus!');
    }

    
}