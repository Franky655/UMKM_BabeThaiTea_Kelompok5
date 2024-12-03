<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = [
            [
                'title' => 'UI/UX Design',
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered.',
                'icon' => 'path/to/icon1.svg', // Ganti dengan path ke ikon yang sesuai
            ],
            [
                'title' => 'Product Design',
                'description' => 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary making.',
                'icon' => 'path/to/icon2.svg',
            ],
            [
                'title' => 'Frontend Development',
                'description' => 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.',
                'icon' => 'path/to/icon3.svg',
            ],
        ];

        return view('home', [
            'services' => $services,
            // Data lainnya yang ingin dikirim ke view
        ]);
    }
}


