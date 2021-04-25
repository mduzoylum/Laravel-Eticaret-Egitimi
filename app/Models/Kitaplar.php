<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitaplar extends Model
{
    protected $table = 'kitaplar';
    public $timestamps = false;
//    protected $fillable=["isim","yazar_id"];
    protected $guarded = [];
    use HasFactory;

    public function yazar()
    {
        return $this->hasOne('App\Models\Yazarlar','id','yazar_id');
    }

    public function getIsimAttribute($value)
    {
        return "Kitap Adı: ".strtoupper($value);
    }

    public function setIsimAttribute($value)
    {
        $this->attributes['isim']=strtolower($value);
    }


}
