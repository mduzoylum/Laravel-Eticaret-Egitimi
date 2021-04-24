<?php


use App\Http\Controllers\Admin\Auth\PropertiesController;
use \App\Http\Controllers\Admin\LoginController;
use \App\Http\Controllers\Admin\Auth\InfoController;
use App\Http\Controllers\AnasayfaController;
use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;
use \App\Models\Kisiler;
use \App\Models\Kitaplar;
use \App\Models\Yazarlar;


//Route::namespace('Admin')->prefix('admin')->group(function () {
//    Route::get('/login', [LoginController::class, 'index'])->name("login");
//
//    Route::prefix('auth')->group(function () {
//        Route::get('/info', [InfoController::class, 'index']);
//        Route::get('/property', [PropertiesController::class, 'index']);
//    });
//
//});
//
//Route::get('/home',[indexController::class,'index'])->name("home");
//Route::get('/hakkimizda',[indexController::class,'about'])->name("home.about");

Route::get('/kisiler', function () {
//    $users=DB::table('kisiler')->get();//query builder
//    print($users);


//    $kitap=new Kitaplar();
//    $kitap->isim="Safahat";
//    $kitap->yazar_id=1;
//    $kitap->save();

//    $yazar=new Yazarlar();
//    $yazar->isim='Mehmet Akif Ersoy';
//    $yazar->save();
//
//    Kitaplar::create(['isim'=>'Kaldırımlar','yazar_id'=>2]);
//
//    Kitaplar::where('isim','=','Kaldırımlar')->update(['isim'=>"Çile"]);
//    $kitap = Kitaplar::find(3);
//    $kitap->isim = "Sakarya";
//    $kitap->save();

//    $kitap=Kitaplar::find(3);
//    $kitap->delete();

//    Yazarlar::create(['isim'=>'Necip Fazıl Kısakürek']);

//    $yazar = Yazarlar::find(2);
//    $yazar->delete();

    $yazarlar=Yazarlar::all();
    dd($yazarlar);


});

//Route::get('/', [AnasayfaController::class, 'index']);
//Route::view('/kategori', 'kategori');
//Route::view('/urun', 'urun');
//Route::view('/sepet', 'sepet');
//Route::view('/odeme', 'odeme');
//Route::view('/siparis', 'siparis');







