<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalPeriksa extends Model
{
    public function dokter()
    {
        return $this->belongsTo(User::class, 'id_dokter');
    }
    public function janjiPeriksa() 
    {
        return $this->hasMany(JanjiPeriksa::class, 'id_jadwal');
    }
}
