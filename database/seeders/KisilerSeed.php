<?php

namespace Database\Seeders;

use App\Models\Kisiler;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KisilerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<50;$i++)
        {
            $kisiler=new Kisiler();
            $kisiler->ad=Str::random(20);
            $kisiler->soyad=Str::random(15);
            $kisiler->save();
        }
    }
}
