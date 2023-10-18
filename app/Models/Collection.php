<?php

namespace App\Models;

// 6706220021 - M Raihan Al Ayyubi

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameKoleksi',
        'jenisKoleksi',
        'jumlahKoleksi',
    ];

    // protected $guarded = ['id'];
}
