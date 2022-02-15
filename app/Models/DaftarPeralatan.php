<?php

namespace App\Models;

use App\Models\peralatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DaftarPeralatan extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function peralatan(){
        return $this->belongsTo(peralatan::class);
    }
}
