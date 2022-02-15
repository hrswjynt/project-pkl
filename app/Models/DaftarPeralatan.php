<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarPeralatan extends Model
{
    use HasFactory;
    public function peralatan(){
        return $this->hasMany(DaftarPeralatan::class,'peralatans_id');
    }
}
