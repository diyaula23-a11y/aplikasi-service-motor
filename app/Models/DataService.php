<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataService extends Model
{
    protected $fillable = [
        'id_servis', 'keluhan_kendaraan', 'estimasi_service', 'nama_mekanik', 'sparepart_pengganti'
    ];
}
