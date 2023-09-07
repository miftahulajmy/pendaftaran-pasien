<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_pasien extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pasien', 'no_rekam_medis', 'nama_pasien', 'jenis_kelamin', 'tanggal_lahir',
    ];
}
