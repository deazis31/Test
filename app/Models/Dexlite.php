<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dexlite extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',           
        'shift',
        'tanggal_masuk',
        'nilai_akhir',
        'nilai_awal',
        'hasil_penjualan',
	    'harga',
        'total_harga',
       ];

        // Accessor untuk memformat total_harga
    public function getFormattedTotalHargaAttribute()
    {
        return 'Rp ' . number_format($this->total_harga, 0, ',', '.');
    }

    // Accessor untuk memformat hasil_penjualan
    public function getFormattedHasilPenjualanAttribute()
    {
        return number_format($this->hasil_penjualan, 0, ',', '.');
    }

}
