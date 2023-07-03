<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('eventname')->nullable();
            $table->string('user_id')->nullable();
            $table->string('eventdescription')->nullable();
            $table->string('eventimage')->nullable();
            $table->string('event_date')->nullable();
            $table->string('event_state')->nullable();
            $table->string('eventpost')->nullable();
            $table->string('event_price')->nullable();
            $table->string('event_type')->nullable();
            $table->string('event_public')->nullable();
            $table->string('customer_id')->nullable();
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
        Schema::dropIfExists('events');
    }
}
