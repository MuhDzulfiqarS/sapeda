<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 'nilai';
      protected $fillable = ['id','matematika','bahasa_indonesia','bahasa_inggris','ipa','agama','bacaan_quran','praktek_ibadah','doa_harian'
                        ];
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
    public function Sekolahs(): BelongsTo
    {
        return $this->belongsTo(Sekolah::class);
    }
}


