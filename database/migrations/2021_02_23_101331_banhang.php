<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Banhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tgiohang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_sp')->unique();
            $table->integer('so_luong');
            $table->timestamps();
        });
        Schema::create('tsanpham', function (Blueprint $table) {
            $table->bigIncrements('id_sp');
            $table->string('ten_sp');
            $table->integer('gia_sp');
            $table->integer('kho_hang');
            $table->timestamps();
        });
        Schema::create('tloaisp', function (Blueprint $table) {    
            $table->bigIncrements('id');
            $table->bigInteger('id_sp')->unique();
            $table->string('gioi_tinh');
            $table->string('hang_sx');
            $table->string('quoc_gia_sx');
            $table->timestamps();
        });
        Schema::create('tgiamgia', function (Blueprint $table) {   
            $table->bigIncrements('id');     
            $table->bigInteger('id_sp')->unique();
            $table->integer('gia_sau_sale');   
            $table->timestamps();
        });
        Schema::create('tbaiviet', function (Blueprint $table) {
            $table->bigIncrements('id_bv');
            $table->bigInteger('id_sp')->unique();
            $table->string('icon_sp');
            $table->string('tieu_de_bv');
            $table->longText('n_dung_bv');
            $table->timestamps();
        });
        Schema::create('tdamua', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_user');
            $table->bigInteger('id_sp');
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
        //
        Schema::dropIfExists('tgiohang');
        Schema::dropIfExists('tdamua');
        Schema::dropIfExists('tsanpham');
        Schema::dropIfExists('tloaisp');
        Schema::dropIfExists('tgiamgia');
        Schema::dropIfExists('tbaiviet');
    }
}
