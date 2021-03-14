<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('id_san_pham');
            $table->integer('id_danhmucsanpham');
            $table->integer('id_thuonghieu');
            $table->string('Ten_san_pham');
            $table->string('Hinh_anh');
            $table->string('Gia');
            $table->string('Noi_dung_san_pham');
            $table->string('Mo_ta');
            $table->integer('An_hien');
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
        Schema::dropIfExists('sanpham');
    }
}
