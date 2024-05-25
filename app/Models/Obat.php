<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Obat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis',
        'satuan',
        'harga_beli',
        'harga_jual',
        'stok',
        'suplier_id',
    ];

    public function suplier(): BelongsTo
    {
        return $this->belongsTo(Suplier::class);
    }
}
