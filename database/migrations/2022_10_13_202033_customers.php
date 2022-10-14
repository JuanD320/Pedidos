<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('cities_id')->unsigned();
            $table->char('customer_id_number', 50)->nullable($value = false);
            $table->char('custumer_name', 50)->nullable($value = false);
            $table->date('customer_birth_date')->nullable($value = false);
            $table->char('customer_addres', 100)->nullable($value = false);
            $table->char('customer_phone', 10)->nullable($value = false);
            $table->timestamps();

            $table->foreign('cities_id')->references('id')->on('cities')->onDelete("cascade");
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


