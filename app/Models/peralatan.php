<?php

namespace App\Models;

use App\Models\DaftarPeralatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class peralatan extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    public function daftarPeralatan(){
        return $this->hasMany(DaftarPeralatan::class);
    }
}


