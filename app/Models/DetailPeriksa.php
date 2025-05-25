<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPeriksa extends Model
{
    public function obat()
    {
        return $this->belongsTo(Obat::class, 'id_obat');
    }
    public function periksa()
    {
        return $this->belongsTo(Periksa::class, 'id_periksa');
    }
}
