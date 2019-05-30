<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hospedes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospedes', function(Blueprint $table){
            $table->increments('id', 11);
            $table->string('Nome_Hospede', 50);
            $table->string('Data_Nascimento');
            $table->string('CPF', 14)->unique();
            $table->string('RG', 15);
            $table->string('Endereco', 50);
            $table->string('Numero', 10);
            $table->string('Complemento', 20)->nullable;
            $table->string('Bairro', 40);            
            $table->string('Cidade', 40);
            $table->char('UF', 2); 
            $table->string('CEP', 9);
            $table->string('Telefone', 18)->nullable;
            $table->string('Celular', 18)->nullable;
            $table->string('Email', 80)->unique();
            $table->string('Empresa', 50)->nullable;
            $table->string('Nome_Usuario', 20)->nullable;
            $table->string('Senha_Acesso', 18)->nullable;            
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
        Schema::drop('hospedes');
    }
}
