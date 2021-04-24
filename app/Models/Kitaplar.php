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
}
