<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_petugas extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_petugas', 'nama_petugas',
    ];
}
