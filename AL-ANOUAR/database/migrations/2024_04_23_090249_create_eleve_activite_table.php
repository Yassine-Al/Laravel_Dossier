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
        Schema::create('eleve_activite', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('Eleve_id');
            $table->foreign('Eleve_id')->references('id')->on('eleves');

            $table->unsignedBigInteger('Activite_id');
            $table->foreign('Activite_id')->references('id')->on('activites');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eleve_activite');
    }
};
