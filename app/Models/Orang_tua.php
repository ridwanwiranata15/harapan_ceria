<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orang_tua extends Model
{
    use HasFactory;
    protected $table = 'orang_tua';
    protected $fillable = [
        'pasien_id',
        'nama',
        'alamat',
        'tanggal_lahir',
        'nomor_telepon',
        'hubungan_dengan_pasien'
    ];

    /**
     * Get the pasien that owns the Orang_tua
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id');
    }
}
