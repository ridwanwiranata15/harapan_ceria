<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Imunisasi extends Model
{
    use HasFactory;

    protected $table = 'imunisasi';

    protected $fillable = [
        'pasien_id',
        'nama_imunisasi',
        'tanggal_pemberian',
        'dosis'
    ];


    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasien_id', 'id');
    }
}
