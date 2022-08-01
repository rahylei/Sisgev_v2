<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacen_piezas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_pieza');
            $table->integer('piezas_ok');
            $table->integer('scrap');
            $table->float('min_alto', 8,2);
            $table->float('min_ancho', 8,2);
            $table->float('min_largo', 8,2);
            $table->float('min_peso', 8,2);
            $table->float('max_alto', 8,2);
            $table->float('max_ancho', 8,2);
            $table->float('max_largo', 8,2);
            $table->float('max_peso', 8,2);
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
        Schema::dropIfExists('almacen_piezas');
    }
};
