<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rabat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rabat', function (Blueprint $table) {
            $table->bigIncrements('id_rabat');
            $table->double('Rabat');
            $table->double('Cena_po_rabacie');
            $table->unsignedBigInteger('id_prod_usl');
            $table->unsignedBigInteger('id_kontrahenta');
        
            $table->foreign('id_prod_usl')->references('id_prod_usl')->on('produkty_i_uslugi');
            $table->foreign('id_kontrahenta')->references('id_kontrahenta')->on('kontrahent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rabat');
    }
}
