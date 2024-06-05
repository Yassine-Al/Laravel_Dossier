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
        Schema::create('details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_Commande');
            $table->foreign('id_Commande')->references('id')->on('commandes');

            $table->unsignedBigInteger('id_Article');
            $table->foreign('id_Article')->references('id')->on('articles');

            $table->integer('quantite');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
