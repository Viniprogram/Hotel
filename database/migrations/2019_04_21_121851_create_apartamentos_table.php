<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApartamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apartamentos', function(Blueprint $table)
		{
			$table->integer('ID_Registro', true);
			$table->smallInteger('Codigo_Hotel')->index('Codigo_Hotel');
			$table->smallInteger('Numero_Apartamento');
			$table->smallInteger('Numero_Chave');
			$table->smallInteger('Tipo_Apartamento');
			$table->smallInteger('Tipo_Acomodacao');
			$table->smallInteger('Quantidade_Cama');
			$table->char('Tem_TV', 1)->nullable()->default('S');
			$table->char('Tem_Frigobar', 1)->nullable()->default('S');
			$table->char('Tem_Banheira', 1)->nullable()->default('N');
			$table->char('Tem_Escrivaninha', 1)->nullable()->default('N');
			$table->char('Ocupado', 1)->nullable()->default('N');
			$table->date('Inicio_Hospedagem')->nullable();
			$table->date('Fim_Hospedagem')->nullable();
			$table->decimal('Valor_Diaria', 10)->default(0.00);
			$table->integer('Codigo_Hospede')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('apartamentos');
	}

}
