<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFlights extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_flights', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Text('Flight_No');
            $table->String('Flight_Name');
            $table->String('Departure');
            $table->String('Departure_Date');
            $table->String('Arrival_Date');
            $table->String('Arrival');
            $table->String('Adult');
            $table->String('Children');
            $table->String('Type');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_flights');
    }
}
