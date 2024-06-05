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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id('CodeE');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Adresse');
            $table->date('dateNaissance');

            $table->unsignedBigInteger('idClasse');
            $table->foreign('idClasse')->references('idC')->on('classes');

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
