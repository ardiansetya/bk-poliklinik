<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPeriksa extends Model
{

    protected $table = 'detail_periksas';
    protected $fillable = [
        'tgl_periksa',
        'id_obat',
    ];
    public function obat()
    {
        return $this->belongsTo(Obat::class, 'id_obat');
    }
    public function periksa()
    {
        return $this->belongsTo(Periksa::class, 'id_periksa');
    }
}
