<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFuncionariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('funcionarios', function(Blueprint $table)
		{
			$table->foreign('Codigo_Cargo', 'funcionarios_fk1')->references('Codigo_Cargo')->on('cargos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('Codigo_Hotel', 'funcionarios_fk2')->references('Codigo_Hotel')->on('hoteis')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('funcionarios', function(Blueprint $table)
		{
			$table->dropForeign('funcionarios_fk1');
			$table->dropForeign('funcionarios_fk2');
		});
	}

}
