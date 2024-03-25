<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    use SoftDeletes;

    public function up(): void
    {
        Schema::create('order_detail_spareparts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pembelian_sparepart_id')->constrained();
            $table->foreignId('sparepart_id')->constrained();
            $table->string('uom');
            $table->string('qty');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_detail_spareparts');
    }
};
