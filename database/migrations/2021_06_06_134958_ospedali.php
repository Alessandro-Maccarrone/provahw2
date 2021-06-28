<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ospedali extends Migration
//creo il blocco ospedale
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ospedali', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('citta');
            $table->string('nome');
            $table->double('lat') -> nullable (true);
            $table->double('lon') -> nullable (true);
            $table->integer('zoom') -> nullable (true);
            $table->string('desc',1024) -> nullable (true);
            $table->string('titolo') -> nullable (true);
            $table->string('immagine') -> nullable (true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ospedali');
    }
}
