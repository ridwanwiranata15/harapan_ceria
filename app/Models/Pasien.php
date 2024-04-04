<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasien';

    protected $fillable = [
        'nama',
        'alamat',
        'tanggal_lahir',
        'nomor_telepon',
        'jenis_kelamin',
        'golongan_darah',
        'status_pernikahan',
        'agama',
        'pekerjaan',
        'nama_asuransi',
        'nomor_assuransi',
    ];

    /**
     * Get the jadwal associated with the Pasien
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function jadwal()
    {
        return $this->hasOne(Jadwal::class, 'id_pasien', 'id');
    }
    /**
     * Get the ruang associated with the Pasien
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ruang()
    {
        return $this->hasOne(Rawat_inap::class, 'pasien_id', 'id');
    }
}
