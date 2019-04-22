<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHospedesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hospedes', function(Blueprint $table)
		{
			$table->integer('Codigo_Hospede', true);
			$table->string('Nome_Hospede', 50);
			$table->date('Data_Nascimento');
			$table->string('CPF', 14);
			$table->string('RG', 12);
			$table->string('Endereco', 50);
			$table->string('Numero', 10)->nullable();
			$table->string('Complemento', 20)->nullable();
			$table->string('Bairro', 40);
			$table->string('Cidade', 40);
			$table->char('UF', 2);
			$table->string('Telefone', 18);
			$table->string('Celular', 18)->nullable();
			$table->string('Empresa', 50)->nullable();
			$table->string('Nome_Usuario', 20);
			$table->string('Senha_Acesso', 12);
			$table->string('CEP', 9);
			$table->date('Data_Inclusao')->nullable();
			$table->string('Email', 80)->nullable();
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
