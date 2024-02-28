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
        Schema::create('cocktails', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nome del cocktail
            $table->text('description')->nullable(); // Descrizione del cocktail
            $table->float('alcohol_content')->nullable(); // Grado alcolico
            $table->string('price')->nullable(); // Prezzo
            $table->string('category')->nullable(); // Categoria del cocktail
            $table->string('image')->nullable(); // URL o percorso dell'immagine del cocktail
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cocktails');
    }
};

//aggiornato in modo correto il migrate