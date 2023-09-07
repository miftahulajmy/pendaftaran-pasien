<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trx_pelayanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pelayanan', 'waktu_mulai', 'waktu_selesai',
    ];
}
