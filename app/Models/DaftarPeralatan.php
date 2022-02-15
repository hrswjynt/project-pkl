<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarPeralatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'peralatan_id',
        'kode_barang',
        'tahun_pengadaan',
        'divisi',
        'info'
    ];

    public function peralatan()
    {
        return $this->hasOne(DaftarPeralatan::class);
    }
}
