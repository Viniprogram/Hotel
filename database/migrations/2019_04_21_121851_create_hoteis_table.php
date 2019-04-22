<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHoteisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hoteis', function(Blueprint $table)
		{
			$table->smallInteger('Codigo_Hotel', true);
			$table->string('Nome_Gerente', 50);
			$table->string('CNPJ', 18);
			$table->string('Inscricao_Estadual', 20)->nullable();
			$table->string('Endereco', 50);
			$table->string('Numero', 10)->nullable();
			$table->string('Bairro', 40);
			$table->string('Cidade', 40);
			$table->char('UF', 2);
			$table->string('Telefone', 18)->nullable();
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
