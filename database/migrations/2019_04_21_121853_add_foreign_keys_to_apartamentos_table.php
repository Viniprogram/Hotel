<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToApartamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('apartamentos', function(Blueprint $table)
		{
			$table->foreign('Codigo_Hotel', 'apartamentos_fk1')->references('Codigo_Hotel')->on('hoteis')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('apartamentos', function(Blueprint $table)
		{
			$table->dropForeign('apartamentos_fk1');
		});
	}

}
