<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccomodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accomodations', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name')->nullable();
            $table->string('class')->nullable();
            $table->string('room_type')->nullable();
            $table->integer('no_of_persons')->nullable();
            $table->string('price')->nullable();
            $table->text('picture')->nullable();
            $table->string('location')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('number')->nullable();
            $table->string('detail')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accomodations');
    }
}
