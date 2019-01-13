<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCampingspotsOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('campingspot_order', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('campingspot_id')->unsigned();
          $table->foreign('campingspot_id')->references('id')->on('campingspots')->onDelete('cascade');
          $table->integer('order_id')->unsigned();
          $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
