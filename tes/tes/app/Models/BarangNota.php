<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangNota extends Model
{
    protected $fillable = ['KodeNota', 'KodeBarang', 'JumlahBarang', 'HargaSatuan', 'Jumlah'];
}