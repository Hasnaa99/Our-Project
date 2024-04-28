<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom');
            $table->string('prenom')->default('');
            $table->string('age')->default('');
            $table->string('email');
            $table->string('filiere')->default('');
            $table->string('password')->default('');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('stagiaires');
    }
};
