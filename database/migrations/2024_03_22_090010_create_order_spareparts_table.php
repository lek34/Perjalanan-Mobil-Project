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
        Schema::create('order_spareparts', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pesan');
            $table->string('supplier');
            $table->string('no_order');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_spareparts');
    }
};
