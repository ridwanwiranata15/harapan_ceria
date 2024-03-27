<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran';

    protected $fillable = ['pasien_id', 'dokter_id', 'poliklinik_id', 'tanggal_pendaftaran', 'jam_pendaftaran', 'keluhan', 'status'];

    /**
     * Get the  that owns the Pendaftaran
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id');
    }
    /**
     * Get the dokter that owns the Pendaftaran
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id');
    }
    /**
     * Get the poliklinik that owns the Pendaftaran
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function poliklinik()
    {
        return $this->belongsTo(Poliklinik::class, 'id');
    }
}
