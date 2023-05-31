<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Componen extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function kegiatan() {
        return $this->hasMany(Kegiatan::class, 'komponen_id');
    }

    public function komputer() {
        return $this->belongsTo(Komputer::class);
    }
}
