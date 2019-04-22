<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->integer('Codigo_Usuario', true);
			$table->string('Nome_Usuario', 20)->index('Nome_Usuario');
			$table->string('Senha_Acesso', 10);
			$table->smallInteger('Nivel_Acesso')->index('Nivel_Acesso');
			$table->smallInteger('Codigo_Hotel');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}
