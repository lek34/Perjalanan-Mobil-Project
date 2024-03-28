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
        Schema::table('detail_pemakaian_spareparts', function (Blueprint $table) {
            //
            $table->string('asal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detail_pemakaian_spareparts', function (Blueprint $table) {
            //
            $table->dropColumn('asal');
        });
    }
};
