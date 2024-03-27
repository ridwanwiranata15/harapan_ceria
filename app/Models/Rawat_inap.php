<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rawat_inap extends Model
{
    use HasFactory;

    protected $table = 'rawat_inap';
    protected $fillable = [
        'pasien_id',
        'dokter_id',
        'tanggal_masuk',
        'tanggal_keluar',
        'kelas',
        'diagnosis',
        'tindakan'
    ];

    /**
     * Get the pasien that owns the Rawat_inap
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id');
    }
    /**
     * Get the dokter that owns the Rawat_inap
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id');
    }
}
