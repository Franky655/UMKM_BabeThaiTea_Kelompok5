<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Promo;
use App\Models\Testimoni;
use App\Models\Informasi;
use App\Models\Menu;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $about = About::first();
        $promo = Promo::all();
        $menu = Menu::all();
        $informasi = Informasi::all();
        $contact = Contact::first();

        return view('home.index', compact(
            'sliders',
            'about',
            'menu',
            'promo',
            'informasi',
            'contact',
        ));
    }

    public function about()
    {
        $sliders = Slider::all();
        $about = About::first();
        $promo = Promo::all();
        $menu = Menu::all();
        $informasi = Informasi::all();
        $contact = Contact::first();

        return view('home.index', compact(
            'sliders',
            'about',
            'menu',
            'promo',
            'informasi',
            'contact',
        ));
    }

    public function menu()
    {
        $menu = Menu::all();
        $contact = Contact::first();

        return view('home.menu', compact(
            'menu',
            'contact',
        ));
    }

    public function informasi()
    {
        $informasi = Informasi::all();
        $contact = Contact::first();

        return view('home.informasi', compact(
            'informasi',
            'contact',
        ));
    }

    public function contact()
    {
        $contact = Contact::first();

        return view('home.contact', compact(
            'contact',
        ));
    }

    public function testimoni()
    {
        $testimoni = Testimoni::all();
        $contact = Contact::first();

        return view('home.testimoni', compact(
            'testimoni',
            'contact',
        ));
    }

    public function promo()
    {
        $promo = Promo::all();
        $contact = Contact::first();

        return view('home.promo', compact(
            'promo',
            'contact',
        ));
    }
}
