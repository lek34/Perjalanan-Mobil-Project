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
        Schema::table('spareparts', function (Blueprint $table) {


            //
            $table->dropColumn('qty');
            $table->dropColumn('uom');
            $table->bigInteger('qtykecil');
            $table->string('uomkecil');
            $table->bigInteger('qtybesar');
            $table->string('uombesar');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('spareparts', function (Blueprint $table) {
            //
            $table->dropColumn('qtykecil');
            $table->dropColumn('uomkecil');
            $table->dropColumn('qtybesar');
            $table->dropColumn('uombesar');
        });
    }
};
