<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sparepart extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'spareparts';

    protected $fillable = ['kode_barang','nama','satuan','rekening_id'];

    public function rekening(): BelongsTo
    {
        return $this->belongsTo(Rekening::class);
    }
}
