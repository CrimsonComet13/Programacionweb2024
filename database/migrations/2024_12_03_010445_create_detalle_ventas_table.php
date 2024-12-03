<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('detalle_ventas', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('venta_id');
        $table->unsignedBigInteger('producto_id');
        $table->integer('cantidad');
        $table->decimal('subtotal', 10, 2);

        $table->foreign('venta_id')->references('id')->on('ventas');
        $table->foreign('producto_id')->references('id')->on('productos');
    }, 'ENGINE=InnoDB');
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ventas');
    }
};
