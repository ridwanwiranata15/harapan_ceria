<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poliklinik extends Model
{
    use HasFactory;

    protected $table = 'poliklinik';

    protected $fillable = ['nama', 'lantai', 'ruangan', 'jam_buka', 'jam_tutup'];
}
