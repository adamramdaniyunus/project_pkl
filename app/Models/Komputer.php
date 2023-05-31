<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komputer extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function componen() {
        return $this->hasMany(Componen::class,'komputer_id');
    }
    public function kegiatan() {
        return $this->hasMany(Kegiatan::class, 'komputer_id');
    }
}
