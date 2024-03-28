<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailPemakaianSparepart extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'detail_pemakaian_spareparts';

    protected $fillable = ['pemakaian_sparepart_id','asal','sparepart_id','merk','qty','uom','harga'];

}
