<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBusshedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('busshedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('arrival');
            $table->string('depature');
            $table->string('route');
            $table->integer('seat_rows');
            $table->integer('seat_columns');
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
        Schema::dropIfExists('busshedules');
    }
}
