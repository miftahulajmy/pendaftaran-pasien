<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_layanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_layanan', 'nama_layanan',
    ];
}
