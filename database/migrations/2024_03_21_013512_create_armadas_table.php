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
        Schema::create('armadas', function (Blueprint $table) {
            $table->id();
            $table->string('nopol');
            $table->string('namapemilik');
            $table->string('merk');
            $table->string('tipe');
            $table->string('nomesin');
            $table->string('norangka');
            $table->string('tahunproduksi');
            $table->string('gol');
            $table->string('karoseri');
            $table->string('bbm');
            $table->string('inv');
            $table->string('ops');
            $table->date('lastkir');
            $table->date('futurekir');
            $table->date('laststnk');
            $table->date('futurestnk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armadas');
    }
};
