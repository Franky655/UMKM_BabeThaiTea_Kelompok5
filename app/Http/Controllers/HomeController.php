<?php

namespace App\Http\Controllers;
use App\Models\Menu;

class HomeController extends Controller
{
    public function Menu()
    {

        $menu = Menu::all();
        
        return view('home.menu', compact('menu'));
    }
}