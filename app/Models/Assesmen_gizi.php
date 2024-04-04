<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assesmen_gizi extends Model
{
    use HasFactory;

    protected $table = 'assesmen';

    protected $fillable = [
        'id_pasien',
        'tanggal_assesmen',
        'IMT',
        'status_gizi',
        'saran'
    ];

    /**
     * Get the pasien that owns the Assesmen
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id', 'id_pasien');
    }
}
