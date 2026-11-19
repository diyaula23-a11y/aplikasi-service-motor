<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DaftarService extends Model
{
    protected $primaryKey = 'id_servis';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_servis', 'no_plat', 'id_pelanggan', 'nama_pelanggan', 'keluhan_kendaraan', 'tanggal_servis'
    ];
}
