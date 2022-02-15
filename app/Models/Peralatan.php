<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peralatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis',
        'merk',
        'seri'
    ];

    public function daftarPeralatan()
    {
        return $this->belongsToMany(DaftarPeralatan::class);
    }
}
