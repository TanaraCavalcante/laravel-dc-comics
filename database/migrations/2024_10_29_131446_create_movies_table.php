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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('poster')->unique(); // Para evitar posters iguais
            $table->string('original_title')->unique(); // Evito filmes iguais
            $table->string('title');
            $table->text('description');
            $table->string('genre');
            $table->json('actors'); // Array com os atores
            $table->string('director');
            $table->integer('duration_minutes');
            $table->year('year');
            $table->string('country');
            $table->string('studio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};