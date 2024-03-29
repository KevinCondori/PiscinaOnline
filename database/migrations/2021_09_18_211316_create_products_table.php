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
            $table->id();
            $table->unsignedBigInteger('product_type_id');
            $table->string('product_name');
            $table->string('product_description');
            $table->string('product_stock');
            $table->double('product_price',10,2);
            $table->string('product_amount');
            $table->string('product_image')->nullable();
            $table->timestamps();
            $table->foreign('product_type_id')->references('id')->on('product_types');

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
