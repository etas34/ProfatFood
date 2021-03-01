<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrunlersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urunlers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('urun_ad');
            $table->string('miktar');
            $table->string('birim');
            $table->integer('fiyat');
            $table->string('satistami');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urunlers');
    }
}
