<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_kesehatan_anak extends Model
{
    use HasFactory;
    protected $table = 'riwayat_kesehatan_anak';
    protected $fillable =
    [
    'id',
    'id_pasien',
    'penyakit',
    'tanggal_diagnosis',
    'pengobatan',
    'catatan'];

    /**
     * Get thepasien that owns the Riwayat_kesehatan_anak
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id');
    }
}
