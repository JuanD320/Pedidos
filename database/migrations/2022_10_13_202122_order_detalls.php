<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderDetalls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detalls', function (Blueprint $table) {
            $table->engine = "InnoDB";
            
            $table->bigIncrements('id');

            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();

            $table->foreign('product_id')->references('id')->on('products')->onDelete("cascade");
            $table->foreign('order_id')->references('id')->on('orders')->onDelete("cascade");
            
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


