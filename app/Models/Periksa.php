<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    public function detailPeriksas()
    {
        return $this->hasMany(DetailPeriksa::class, 'id_periksa');
    }

    public function janjiPeriksa()
    {
        return $this->belongsTo(JanjiPeriksa::class, 'id_janji_periksa');
    }
  
}
