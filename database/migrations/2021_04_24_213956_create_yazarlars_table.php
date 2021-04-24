<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYazarlarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yazarlar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isim');
            $table->timestamps();// created_at,updated_at
            $table->softDeletes();//softDelete
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yazarlar');
    }
}
