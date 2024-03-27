<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokter';
    protected $fillable = [
        'nama',
        'alamat',
        'tanggal_lahir',
        'nomor_telepon',
        'jenis_kelamin',
        'spesialis',
        'nomor_SIP',
        'email',
        'foto'
    ];


}
