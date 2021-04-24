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
}
