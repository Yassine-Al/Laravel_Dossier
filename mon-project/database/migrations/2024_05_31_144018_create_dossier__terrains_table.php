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
        Schema::create('dossier__terrains', function (Blueprint $table) {
            $table->id('iddossier');
            $table->date('date_Ouverture');
            $table->date('date_Cloture');

            $table->unsignedBigInteger('numter');
            $table->foreign('numter')->references('numter')->on('terrains');

            $table->unsignedBigInteger('numnotaire');
            $table->foreign('numnotaire')->references('numn')->on('notaires');

            $table->enum('etat',['traite', 'nontraite']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossier__terrains');
    }
};
