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
        Schema::create('avis', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();

            $table->unsignedBigInteger('idE');
            $table->foreign('idE')->references('CodeE')->on('etudiants');

            $table->unsignedBigInteger('idF');
            $table->foreign('idF')->references('idF')->on('formations');

            $table->integer('points');

            $table->primary('idE', 'idF');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avis');
    }
};
