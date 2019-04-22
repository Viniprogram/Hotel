<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistoricoHospedagemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('historico_hospedagem', function(Blueprint $table)
		{
			$table->integer('ID_Registro', true);
			$table->integer('Codigo_Hospede')->index('Codigo_Hospede');
			$table->integer('Codigo_Apartamento')->index('Codigo_Apartamento');
			$table->date('Inicio_Hospedagem');
			$table->date('Fim_Hospedagem');
			$table->decimal('Valor_Diaria', 10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('historico_hospedagem');
	}

}
