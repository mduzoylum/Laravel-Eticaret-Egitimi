<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $blade = [
            "isim" => "Ali",
            "soyisim" => 'Veli',
            "info" => [
                "yas" => 25,
                "cinsiyet" => "Erkek",
                "askerlik" => False
            ]
        ];

        return view('admin.home', $blade);
    }

    public function about()
    {
        return view('hakkimizda');
//        todo buraya şu şu gelecek
    }
}
