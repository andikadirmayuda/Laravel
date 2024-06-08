<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konsumen extends Model
{
    use HasFactory;

    protected $fillable = ['nama','notelpon','kota','alamat'];

    protected $table = 'konsumen';

    public $timestamps=false;
}
