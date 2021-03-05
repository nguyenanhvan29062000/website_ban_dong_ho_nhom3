<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Homepage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thomehot', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_sp', 32);
            $table->integer('gia_sp');
            $table->integer('gia_sau_sale')->nullable()->default(NULL);
            $table->string('image', 255);
            $table->timestamps();
            
        });
        Schema::create('thomenew', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_sp', 32);
            $table->integer('gia_sp');
            $table->integer('gia_sau_sale')->nullable()->default(NULL);
            $table->string('image', 255);
            $table->timestamps();
            
        });
        Schema::create('thomesale', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_sp', 32);
            $table->integer('gia_sp');
            $table->integer('gia_sau_sale')->nullable()->default(NULL);
            $table->string('image', 255);
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
        Schema::dropIfExists('thomehot');
        Schema::dropIfExists('thomenew');
        Schema::dropIfExists('thomesale');
    }
}
