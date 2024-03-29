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
        Schema::table('perjalanans', function (Blueprint $table) {
            //
            $table->foreignId('armada_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('perjalanans', function (Blueprint $table) {
            //
            $table->dropForeign(['armada_id']);
        });
    }
};
