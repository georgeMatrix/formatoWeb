<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clave');
            $table->string('sku');
            $table->string('skuVnpk');
            $table->integer('provedor')->unsigned()->nullable();;
            $table->integer('categoria')->unsigned()->nullable();;
            $table->string('descripcion');
            $table->string('descripcionE');
            $table->double('costo');
            $table->double('iva_costo');
            $table->double('ieps_costo');
            $table->double('total_costo');
            $table->double('precio_Mayoreo');
            $table->double('iva_Precio_Mayoreo');
            $table->double('ieps_Precio_Mayoreo');
            $table->double('total_Precio_Mayoreo');
            $table->double('precio_Medio_Mayoreo');
            $table->double('iva_Precio_Medio_Mayoreo');
            $table->double('ieps_Precio_Medio_Mayoreo');
            $table->double('total_Precio_Medio_Mayoreo');
            $table->double('precio_Retail');
            $table->double('iva_Precio_Retail');
            $table->double('ieps_Precio_Retail');
            $table->double('total_Precio_Retail');
            $table->double('existencia');
            $table->integer('unidad_Medida')->unsigned()->nullable();;
            $table->timestamps();
            $table->foreign('provedor')->references('id')->on('provedors')->onDelete('set null');
            $table->foreign('unidad_Medida')->references('id')->on('unidad_medidas')->onDelete('set null');
            $table->foreign('categoria')->references('id')->on('categorias')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
