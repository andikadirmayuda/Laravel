<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $fillable = ['kodebarang','namabarang','jenisbarang','merekbarang','jumlahbarang'];

    protected $table = 'barang';
    public $timestamps = false;
}
