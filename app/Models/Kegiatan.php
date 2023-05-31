<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function komputer() {
        return $this->belongsTo(Komputer::class);
    }
    public function componen() {
        return $this->belongsTo(Componen::class);
    }
}
