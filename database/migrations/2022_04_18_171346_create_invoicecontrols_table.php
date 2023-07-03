<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicecontrolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoicecontrols', function (Blueprint $table) {
            $table->id();
            $table->string('control_auth')->nullable();
            $table->string('control_key')->nullable();
            $table->string('control_invoice')->nullable();
            $table->string('control_date')->nullable();
            $table->string('control_activity')->nullable();
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
        Schema::dropIfExists('invoicecontrols');
    }
}
