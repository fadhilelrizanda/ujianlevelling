<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'email', 'jenis', 'anggota1', 'anggota2', 'link'
    ];
}
