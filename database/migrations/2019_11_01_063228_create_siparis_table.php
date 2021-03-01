<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiparisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siparis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('urun_ad');
            $table->string('miktar');
            $table->integer('fiyat');
            $table->string('ad_soyad');
            $table->string('mail');
            $table->string('tel');
            $table->string('sevk_adres');
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
        Schema::dropIfExists('siparis');
    }
}
