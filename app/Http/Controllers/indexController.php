<?php

namespace App\Http\Controllers;

use App\Models\email;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


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

    public function getData()
    {
        //https://datatables.yajrabox.com/starter
        //https://datatables.net/
        $x = Datatables::of(email::query())
            ->addColumn('edit', function ($z) {
                return '<a href="' . route("datatable.edit", ['id' => $z->id]) . '">Düzenle</a>';
            })
            ->addColumn('delete', function ($z) {
                return '<a href="' . route("datatable.delete", ['id' => $z->id]) . '">Sil</a>';
            })
            ->rawColumns(['edit','delete'])
            ->make(true);
        return $x;
    }
}
