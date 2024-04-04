<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rekening extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'rekenings';

    protected $fillable = ['kode_rekening','nama_rekening'];

    public function sparepart(): HasMany
    {
        return $this->hasMany(Sparepart::class);
    }
}
