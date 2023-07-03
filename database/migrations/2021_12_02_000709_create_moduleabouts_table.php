<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleaboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moduleabouts', function (Blueprint $table) {
            $table->id();
            $table->string('aboutname')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('aboutdescription')->nullable();
            //$table->string('aboutschedule')->nullable();
            $table->string('aboutexperience')->nullable();
            $table->string('aboutmenu')->nullable();
            $table->string('aboutplace')->nullable();
            $table->string('aboutcharacters')->nullable();
            $table->string('modulestate')->nullable(); 
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
        Schema::dropIfExists('moduleabouts');
    }
}
