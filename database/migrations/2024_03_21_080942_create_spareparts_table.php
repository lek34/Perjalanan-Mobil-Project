<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    use SoftDeletes;

    public function up(): void
    {
        Schema::create('spareparts', function (Blueprint $table) {
            //
            $table->id();
            $table->string('kode_barang');
            $table->string('nama');
            $table->string('satuan');
            $table->foreignId('rekening_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
            //
            Schema::dropIfExists('spareparts');
    }
};
