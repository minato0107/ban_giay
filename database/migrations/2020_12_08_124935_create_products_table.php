<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('sku')->unique();
            $table->unsignedInteger('id_cate');
            $table->string('image');
            $table->float('price');
            $table->float('sale_price')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('featured')->default(1)->comment('1 là ẩn, 0 là hiện');;
            $table->tinyInteger('status')->default(1)->comment('1 là ẩn, 0 là hiện');
            $table->timestamps();
            $table->foreign('id_cate')->references('id')->on('categories')->onDelete('cascade');
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
