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
        Schema::table('pemakaian_spareparts', function (Blueprint $table) {
            //
            $table->string('norek');
            $table->string('nobon');
            $table->string('namamekanik');
            $table->string('status');
            $table->string('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pemakaian_spareparts', function (Blueprint $table) {
            //
            $table->dropColumn('norek');
            $table->dropColumn('nobon');
            $table->dropColumn('namamekanik');
            $table->dropColumn('status');
            $table->dropColumn('keterangan');
        });
    }
};
