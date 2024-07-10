<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepatu extends Model
{
    use HasFactory;
    protected $fillable = [
    'merk_sepatu',
    'warna_sepatu',
    'jenis_sepatu',
    'bahan_sepatu',
    'tgl_launching',
];
}
