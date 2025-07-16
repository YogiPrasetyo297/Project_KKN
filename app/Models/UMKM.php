<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMKM extends Model
{
    use HasFactory;

    protected $table = 'umkm'; // wajib karena nama model tidak umum

    protected $fillable = [
        'nama',
        'pemilik',
        'kategori',
        'status',
    ];
}
