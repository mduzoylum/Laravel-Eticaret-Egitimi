<?php


use App\Http\Controllers\Admin\Auth\PropertiesController;
use \App\Http\Controllers\Admin\LoginController;
use \App\Http\Controllers\Admin\Auth\InfoController;
use App\Http\Controllers\AnasayfaController;
use App\Http\Controllers\indexController;
use App\Models\email;
use Illuminate\Support\Facades\Route;
use \App\Models\Kisiler;
use \App\Models\Kitaplar;
use \App\Models\Yazarlar;
use \App\Http\Controllers\KitaplarController;
use \App\Http\Controllers\emailController;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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

//    $yazarlar=Yazarlar::all();
//    dd($yazarlar);

//    $kitap=Kitaplar::firstOrCreate(["isim"=>"Aynalar"],["yazar_id"=>1]);
//    dd($kitap);

//    $kitap = Kitaplar::firstOrCreate(["isim" => "Aynalar","yazar_id"=>5]);
//    dd($kitap);

//    $yazar=Kitaplar::find(1)->yazar;
//    dd($yazar);

//    $kitap=Yazarlar::find(1)->kitap->isim;
//    dd($kitap);

//    $kitap = Yazarlar::find(1)->kitaplar;
//
//    foreach($kitap as $key=>$value)
//    {
//        echo $value["isim"]."<br>";
//    }
//    dd($kitap);

//    $store["isim"]="Mesnevi";
//    $kitap=Kitaplar::updateOrCreate([
//        "yazar_id"=>6
//    ],$store);

//    $kitap=Kitaplar::find(1);
//    $kitapIsmi=$kitap->isim;
//    echo $kitapIsmi;

//    Kitaplar::create(["isim"=>"MUSTAFA DIGILLIDEN DINLE ogren","yazar_id"=>2]);

//    $satinAlinan=Yazarlar::find(1)->satinal;
//    dd($satinAlinan);
    //todo belongstomany yapısı ile ilgili bir örnek gerçekleştirilecek

});

Route::get('/ekle', [KitaplarController::class, 'create']);
Route::post('/ekle', [KitaplarController::class, 'store'])->name('kitap.ekle');


Route::get('/email', [emailController::class, 'send']);

//Route::get('/', [AnasayfaController::class, 'index']);
//Route::view('/kategori', 'kategori');
//Route::view('/urun', 'urun');
//Route::view('/sepet', 'sepet');
//Route::view('/odeme', 'odeme');
//Route::view('/siparis', 'siparis');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/gizli", function () {
    echo "18 yaşından büyüksün";
})->middleware(["resit", "ogrenci", "erkek"]);

Route::get('/yasak', function () {
    echo "Bu alana erişiminiz yok";
});

Route::get('/ajax', function () {
    return view("ajax");
});

Route::get('/ajax-get', function () {
    echo "Get Metodu";
})->name("ajax.get");;

Route::post('/ajax-post', function () {
    echo "Post Metodu";
})->name("ajax.post");


Route::get('/datatable', function () {
    return view("datatable");
});

Route::post('/datatable-post', [indexController::class, "getData"])->name("datatable.post");

Route::get('/edit', function (\Illuminate\Http\Request $request) {
    echo $request->input("id") . " Edit";
})->name("datatable.edit");

Route::get('/delete', function (\Illuminate\Http\Request $request) {
    $delete = \App\Models\email::find($request->input("id"))->delete();
    echo $delete;
})->name("datatable.delete");

Route::get('/dosya-yukle', function () {
    echo '<form action="/dosya-post" method="POST" enctype="multipart/form-data">' . csrf_field();
    echo '<input type="file" multiple name="photos[]">
        <button>Post</button>
    </form>';
});


Route::post('/dosya-post', function (Request $request) {
//    $file=$request->file("photo")->store('');

//    $file=$request->file("photo");
//    $fileName="benimresmim-".rand(0,1000).".".$file->getClientOriginalExtension();
//    $path=$file->storeAs('photos',$fileName);
//    dd($file);

    //multiple
//    $images=$request->file("photos");
//    $path=[];
//
//    foreach ($images as $image)
//    {
//        $name="123-".rand(1,999).'.'.$image->getClientOriginalExtension();
//        $file=$image->storeAs('photos',$name);
//        $path[]=$file;
//    }
//
//    dd($path);

});

Route::get('/check', function () {
//    $control = Storage::disk("local")->exists('photos/123-937x.jpg');
//    dd($control);

//    Storage::put("files/file.xlsx","Laravel Eticaret Eğitimi");
//    Storage::append("files/file.txt","Türkiye");
//    Storage::prepend("files/file.txt","Konya");

//    $control=Storage::exists('files/file.txt');
//    dd($control);

//    return Storage::download('files/file.txt','laravel.txt');

//    $url=Storage::url('files/file.txt');
//    $url=Storage::size('files/file.txt');
//    $url=Storage::size('photos/123-937.jpg');
//    $url=date("d-m-Y H:i:s",Storage::lastModified('photos/123-937.jpg'));
//    $url=Storage::copy('files/file.txt','photos/file.txt');
//    $url=Storage::move('files/file.txt','photos/file.txt');
    $url=Storage::delete('photos/file.txt');
    dd($url);
});


Route::get('/komutcalistir',function (){
    \Illuminate\Support\Facades\Artisan::call("UserControl:start");
});

Route::get('/kayit-ol',function (){
   $email=email::create([
       "content"=>'turkey@gmail.com'
   ]);
   event(new \App\Events\BlogAdded($email));
});

/*ÖDEV*/
//Bir sonraki hafta schedule yapısının server tarafında nasıl çalıştığı araştırılacak.(Cron Job)
