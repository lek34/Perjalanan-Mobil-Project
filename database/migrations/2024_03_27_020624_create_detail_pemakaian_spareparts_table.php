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
        Schema::create('detail_pemakaian_spareparts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemakaian_sparepart_id')->constrained();
            $table->foreignId('sparepart_id')->constrained();
            $table->string('merk');
            $table->string('qty');
            $table->string('uom');
            $table->bigInteger('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pemakaian_spareparts');
    }
};
