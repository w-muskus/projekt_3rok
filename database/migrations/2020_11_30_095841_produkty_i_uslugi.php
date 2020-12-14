<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProduktyIUslugi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produkty_i_uslugi', function (Blueprint $table) {
            $table->bigIncrements('id_prod_usl');
            $table->string('Nazwa', 100);
            $table->string('Opis', 100);
            $table->string('Typ', 100);
            $table->string('Jednostka_opakowania', 100);
            $table->double('Cena_netto');
            $table->double('Stawka_vat');
            $table->double('Cena_brutto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produkty_i_uslugi');
    }
}
