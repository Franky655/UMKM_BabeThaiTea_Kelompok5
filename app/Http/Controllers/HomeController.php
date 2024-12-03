<?php

namespace App\Http\Controllers;

use App\Models\Informasi;

class HomeController extends Controller
{

public function informasi()
    {
        $informasi = Informasi::all();
        // $contact = Contact::first();
        // $services = Service::all();

        return view('home.informasi', compact(
            'informasi',
            // 'contact',
            // 'services',
        ));
    }
}
