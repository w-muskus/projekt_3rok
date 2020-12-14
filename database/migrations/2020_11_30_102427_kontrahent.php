<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kontrahent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontrahent', function (Blueprint $table) {
            $table->bigIncrements('id_kontrahenta');
            $table->bigInteger('id_zk');
            $table->string('Nazwa', 100);
            $table->string('NIP',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kontrahent');
    }
}
