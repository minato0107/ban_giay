<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_order');
            $table->unsignedInteger('id_pro_detail');
            $table->integer('size');
            $table->string('color',55);
            $table->float('price');
            $table->Integer('quantity');
            $table->timestamps();
            $table->foreign('id_order')->references('id')->on('orders');
            $table->foreign('id_pro_detail')->references('id')->on('product_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
