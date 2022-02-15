<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seri extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function peralatan()
    {
        return $this->hasMany(peralatan::class);
    }
    public function daftarPeralatan()
    {
        return $this->hasMany(DaftarPeralatan::class);
    }
}
