<?php

namespace App\Http\Controllers;

use App\Models\Kitaplar;
use Illuminate\Http\Request;

class KitaplarController extends Controller
{
    public function create()
    {
        return view('kitap');
    }

    public function store(Request $request)
    {
//       dd($request->all());
//       dd($request->except('_token'));
//        dd($request->has('soyisim'));

//        if($request->has('isim'))
//        if($request->filled('isim'))
//        {
//            echo "İsim Dolu";
//        }else{
//            echo "İsim Boş";
//        }

//        $request->flash();
//        $all=$request->all();

//        dd($request->input("isim"));
//        dd($request->file("image"));

//        dd($request->hasFile("image"));

        $request->validate([
            "isim" =>"required|max:10|min:3",
            "yazar_id"=>"required|numeric",
            "email" =>"required|email"
        ]);

        $isim=$request->input("isim");
        $yazar_id=$request->input("yazar_id");

//        Kitaplar::create(["isim"=>$isim,"yazar_id"=>$yazar_id]);
        $kitap=new Kitaplar();
        $kitap->isim=$isim;
        $kitap->yazar_id=$yazar_id;
        $kitap->save();
    }
}
