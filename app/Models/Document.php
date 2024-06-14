<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    use HasFactory;
    protected $fillable = ['siswas_id','kartu_keluarga','akta_kelahiran','ijazah','rapor'];
    
    public function Siswas(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }
}
