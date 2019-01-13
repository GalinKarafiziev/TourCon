<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampingsportOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campingsport_order', function (Blueprint $table) {
          $table->integer('campingspot_id')->unsigned();
          $table->foreign('campingspot_id')->references('id')->on('campingspots');
          $table->integer('order_id')->unsigned();
          $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campingsport_order');
    }
}
