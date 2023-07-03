<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string('promo_name')->nullable();
            $table->string('promo_description')->nullable();
            $table->string('promo_code')->nullable();
            $table->string('promo_from')->nullable();
            $table->string('promo_to')->nullable();
            $table->string('promo_discount')->nullable();
            $table->string('promo_active')->nullable();
            $table->string('promo_message')->nullable();
            $table->string('promo_type')->nullable();
            $table->string('promo_state')->nullable();
            $table->string('promo_use')->nullable();
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
        Schema::dropIfExists('promotions');
    }
}
