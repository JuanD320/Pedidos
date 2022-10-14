<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('customer_id')->unsigned();
            $table->date('order_date')->nullable($value = false);
            $table->decimal('order_total', 15, 2)->nullable($value = false);
            $table->date('order_date_delivery')->nullable($value = false);
            $table->char('order_status', 10)->nullable($value = false);
            
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete("cascade");
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


