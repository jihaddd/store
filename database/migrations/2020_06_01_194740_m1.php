<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class M1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->string('typepro');
            $table->string('image');
            $table->string('imagee');
            $table->integer('satat')->default(0);
            $table->string('mime')->nullable();
            $table->string('original_filename')->nullable();
            $table->string('filename')->nullable();
            $table->string('mimee')->nullable();
            $table->string('original_filenamee')->nullable();
            $table->string('filenamee')->nullable();
            $table->integer('Rate');
            $table->integer('barkod')->nullable();
            $table->integer('sku')->nullable();
            $table->timestamps();
            $table->integer('design_id')->unsigned();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
