<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncadreursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encadreurs', function (Blueprint $table) { 
            $table->increments('id');
            $table->string('first_name',90);
            $table->string('last_name',90);
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('specialty',90);
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
        Schema::dropIfExists('encadreurs');
    }
}
