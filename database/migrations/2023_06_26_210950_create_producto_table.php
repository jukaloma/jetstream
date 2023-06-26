<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->integer('idProducto');
            $table->string('nombreProducto',45);
            $table->integer('cantidadProducto');
            $table->float('precioProducto', 10, 2);
            $table->string('fotoProducto',100);
            $table->integer('categoria');
            $table->primary('idProducto');
            $table->foreign('categoria')->references('idCategoria')->on('categoria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
