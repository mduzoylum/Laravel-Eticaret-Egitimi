<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Yazarlar extends Model
{
    protected $table='yazarlar';
    protected $guarded=[];

    use SoftDeletes;
    use HasFactory;

    public function kitap()
    {
        return $this->belongsTo('App\Models\Kitaplar','id','yazar_id');
    }

    public function kitaplar()
    {
        return $this->hasMany('App\Models\Kitaplar','yazar_id','id');
    }

//    public function satinal()
//    {
//        return $this->belongsToMany('App\Models\KitapSatinAl','kitaplar','id','yazar_id');
//    }
}
