<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFuncionariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcionarios', function(Blueprint $table)
		{
			$table->integer('Codigo_Funcionario', true);
			$table->string('Nome_Funcionario', 50)->index('Nome_Funcionario');
			$table->date('Data_Nascimento');
			$table->string('CPF', 14)->index('CPF');
			$table->string('RG', 12);
			$table->string('Endereco', 50);
			$table->string('Numero', 10);
			$table->string('Complemento', 20)->nullable();
			$table->string('Bairro', 40);
			$table->string('Cidade', 40);
			$table->char('UF', 2);
			$table->string('Telefone', 18);
			$table->string('Celular', 18)->nullable();
			$table->smallInteger('Codigo_Cargo')->index('Codigo_Cargo');
			$table->string('Funcao', 30);
			$table->smallInteger('Codigo_Hotel')->index('Codigo_Hotel');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('funcionarios');
	}

}
