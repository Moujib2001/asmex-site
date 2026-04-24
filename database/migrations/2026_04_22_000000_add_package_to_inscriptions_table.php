<?php
// database/migrations/2026_04_22_000000_add_package_to_inscriptions_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('inscriptions', function (Blueprint $table) {
            $table->enum('package', ['Platinum', 'Gold', 'Silver', 'Bronze'])
                  ->nullable()
                  ->after('type');
        });
    }

    public function down(): void
    {
        Schema::table('inscriptions', function (Blueprint $table) {
            $table->dropColumn('package');
        });
    }
};
