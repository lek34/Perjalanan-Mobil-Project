<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    use HasFactory;

    protected $table = 'armadas';

    protected $fillable = ['nopol', 'namapemilik', 'merk', 'tipe', 'nomesin', 'norangka', 'tahunproduksi', 'gol', 'karoseri', 'bbm', 'inv', 'ops', 'lastkir', 'futurekir', 'laststnk', 'futurestnk'];
}
