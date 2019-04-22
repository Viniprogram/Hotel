<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNivelAcessoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nivel_acesso', function(Blueprint $table)
		{
			$table->smallInteger('Codigo_Nivel', true);
			$table->string('Descricao_Nivel', 30);
			$table->char('Cadastro_Funcionario', 1)->nullable()->default('N');
			$table->char('Cadastro_Usuario', 1)->nullable()->default('N');
			$table->char('Cadastro_Nivel_Acesso', 1)->nullable()->default('N');
			$table->char('Pesquisa_Apartamento', 1)->nullable()->default('N');
			$table->char('Cadastro_Hospede', 1)->nullable()->default('N');
			$table->char('Registro_Hospedagem', 1)->nullable()->default('N');
			$table->char('Fechamento_Conta', 1)->nullable()->default('N');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nivel_acesso');
	}

}
