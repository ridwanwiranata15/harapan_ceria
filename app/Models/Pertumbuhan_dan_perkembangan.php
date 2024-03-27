<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pertumbuhan_dan_perkembangan extends Model
{
    use HasFactory;

    protected $table = 'pertumbuhan_dan_perkembangan';
    protected $fillable = ['pasien_id', 'usia', 'berat_badan', 'tinggi_badan', 'lingkar_kepala', 'tahap_perkembangan'];

    /**
     * Get the user that owns the Pertumbuhan_dan_perkembangan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasien_id', 'id');
    }
}
