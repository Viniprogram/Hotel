<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHistoricoHospedagemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('historico_hospedagem', function(Blueprint $table)
		{
			$table->foreign('Codigo_Hospede', 'historico_hospedagem_fk1')->references('Codigo_Hospede')->on('hospedes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('Codigo_Apartamento', 'historico_hospedagem_fk2')->references('ID_Registro')->on('apartamentos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('historico_hospedagem', function(Blueprint $table)
		{
			$table->dropForeign('historico_hospedagem_fk1');
			$table->dropForeign('historico_hospedagem_fk2');
		});
	}

}
