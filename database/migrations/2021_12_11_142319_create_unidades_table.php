<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade',5);
            $table->string('descrição',30);
            $table->timestamps();
        });

        //adiciona relacionamento com tabela produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        //adiciona relacionamento com tabela produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('produto_detalhes', function (Blueprint $table) { 
            // primeiro remove a fk
        $table->dropForeign('produto_detalhes_unidade_id_foreign');
            //segundamente remove a coluna unidade_id
        $table->dropColumn('unidade_id');
         });



         Schema::table('produtos', function (Blueprint $table) { 
            // primeiro remove a fk
        $table->dropForeign('produtos_unidade_id_foreign');
            //segundamente remove a coluna unidade_id
        $table->dropColumn('unidade_id');
         });



        Schema::dropIfExists('unidades');
    }
}
