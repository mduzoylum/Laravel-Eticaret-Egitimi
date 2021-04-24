<?php


use App\Http\Controllers\Admin\Auth\PropertiesController;
use \App\Http\Controllers\Admin\LoginController;
use \App\Http\Controllers\Admin\Auth\InfoController;
use App\Http\Controllers\AnasayfaController;
use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;


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

Route::get('/',[AnasayfaController::class,'index']);
Route::view('/kategori','kategori');
Route::view('/urun','urun');
Route::view('/sepet','sepet');
Route::view('/odeme','odeme');
Route::view('/siparis','siparis');





