<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkDeApartamentosParaHoteis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apartamentos', function(Blueprint $table){
           $table->foreign('Codigo_Hotel')->references('id')->on('hoteis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apartamentos', function(Blueprint $table){
           $table->dropForeign('apartamentos_Codigo_Hotel_foreign');
        });
    }
}
