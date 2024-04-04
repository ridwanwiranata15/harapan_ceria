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
/**
 * Get the user associated with the Dokter
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasOne
 */
public function jadwal()
{
    return $this->hasOne(Jadwal::class, 'id_dokter', 'id');
}
/**
 * Get the dokter associated with the Dokter
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasOne
 */
public function rawat()
{
    return $this->hasOne(User::class, 'dokter_id', 'id');
}


}
