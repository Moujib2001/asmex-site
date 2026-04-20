<?php
// database/migrations/2026_04_20_000000_create_inscriptions_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('prenom', 100);
            $table->string('nom', 100);
            $table->string('email', 200);
            $table->string('telephone', 30)->nullable();
            $table->string('societe', 200);
            $table->string('fonction', 200);
            $table->enum('type', ['Participant', 'Sponsor', 'Presse', 'Intervenant'])->default('Participant');
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
