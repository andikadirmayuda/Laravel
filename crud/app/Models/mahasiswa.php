<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $fillable = [
        'nim', 'nama', 'jurusan',
    ];
    protected $table = 'mahasiswa';
    public $timestamps = false;
}
