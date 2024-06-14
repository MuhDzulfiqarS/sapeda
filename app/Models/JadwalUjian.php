<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalUjian extends Model
{
   
    use HasFactory;
    protected $table = 'jadwal_ujian';
    protected $fillable = ['id','tanggal','waktu_selesai','waktu_mulai'];
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}
