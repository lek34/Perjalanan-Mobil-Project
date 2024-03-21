<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Armada extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'armadas';

    protected $fillable = ['nopol', 'namapemilik', 'merk', 'tipe', 'nomesin', 'norangka', 'tahunproduksi', 'gol', 'karoseri', 'bbm', 'inv', 'ops', 'lastkir', 'futurekir', 'laststnk', 'futurestnk'];
}
