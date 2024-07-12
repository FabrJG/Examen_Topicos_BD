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
        Schema::create('listado', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('curso');
            $table->double('nota_1');
            $table->double('nota_2');
            $table->double('promedio');
            $table->string('condicion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listado');
    }
};
