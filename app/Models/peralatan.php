<?php

namespace App\Models;

use App\Models\DaftarPeralatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class peralatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function daftarPeralatan()
    {
        return $this->hasMany(DaftarPeralatan::class);
    }
    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }
    public function merk()
    {
        return $this->belongsTo(Merk::class);
    }
    public function seri()
    {
        return $this->belongsTo(Seri::class);
    }
}
