<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PemakaianSparepart extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pemakaian_spareparts';

    protected $fillable = ['tanggal','armada_id'];


}
