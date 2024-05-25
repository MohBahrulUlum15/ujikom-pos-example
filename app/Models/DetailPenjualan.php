<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'penjualan_id',
        'obat_id',
        'jumlah',
    ];

    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class);
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class);
    }
}
