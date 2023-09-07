<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_jenis_pembayaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_pembayaran', 'jenis_pembayaran',
    ];
}
