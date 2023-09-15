<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class M7 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('imag');
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('totall');
            $table->string('contry');
            $table->string('city');
            $table->string('hai');
            $table->integer('phone');
            $table->string('paymeny');
            $table->string('order_off')->default(0);
            $table->integer('order_on')->default(0);
            $table->string('order_salse')->default(0);
            $table->integer('order_dlivry')->default(0);
            $table->timestamps();
            $table->integer('user_id')->unsigned();
          
            // $table->integer('product_id')->unsigned();
            // $table->foreign('product_id')->references('id')->on('products');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
