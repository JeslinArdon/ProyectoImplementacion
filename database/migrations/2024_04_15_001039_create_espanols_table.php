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
        Schema::create('espanols', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20);
            $table->string('apellido',20);
            $table->integer('nota1');
            $table->integer('nota2');
            $table->integer('nota3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('espanols');
    }
};
