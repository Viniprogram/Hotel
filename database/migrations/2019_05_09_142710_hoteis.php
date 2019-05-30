<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hoteis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoteis', function(Blueprint $table){
            $table->smallIncrements('id', 6);
            $table->string('Nome_Gerente', 50);
            $table->string('CNPJ', 18)->unique();
            $table->string('Inscricao_Estadual', 20)->nullable;
            $table->string('Endereco', 50);
            $table->string('Numero', 10);
            $table->string('Complemento', 20)->nullable;
            $table->string('Bairro', 40);            
            $table->string('Cidade', 40);
            $table->char('UF', 2);            
            $table->string('Telefone', 18)->nullable;
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
        Schema::drop('hoteis');
    }
}
