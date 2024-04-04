<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekam_medis extends Model
{
    use HasFactory;

    protected $table = 'rekam_medis';
    protected $fillable = [
        'id_pendaftaran',
        'anamnesis',
        'pemeriksaan_fisik',
        'diagnosis',
        'tindakan',
        'resep_obat',
        'pronogsis'
    ];

    /**
     * Get the pendaftaran that owns the Rekam_medis
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'id_pendaftaran', 'id');
    }
}
