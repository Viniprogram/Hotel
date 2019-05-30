<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->smallInteger('Codigo_Hotel')->length(5)->unsigned();
            $table->smallInteger('Numero_Apartamento')->length(6);
            $table->smallInteger('Tipo_Apartamento')->length(6);
            $table->smallInteger('Tipo_Acomodacao')->length(6);
            $table->smallInteger('Quantidade_Cama')->length(6);
            $table->char('TV', 1)->nullable;
            $table->char('Frigobar', 1)->nullable;
            $table->char('Banheira', 1)->nullable;            
            $table->char('Escrivaninha', 1)->nullable;  
            $table->char('Ocupado', 1)->nullable; 
            $table->date('Inicio_Hospedagem')->nullable;
            $table->date('Fim_Hospedagem')->nullable;
            $table->decimal('Valor_Diaria', 8,2);
            $table->integer('Codigo_Hospede')->length(11)->nullable;  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartamentos');
    }
}
