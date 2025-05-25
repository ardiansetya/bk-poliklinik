<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    public function obat()
    {
        return $this->hasMany(DetailPeriksa::class, 'id_obat');
    }
}
