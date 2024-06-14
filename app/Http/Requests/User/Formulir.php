<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class Formulir extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check() && Auth::user()->role == '1';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'asal_sekolah' => 'string',
            'npsn_asal_sekolah' => 'string',
            'jurusan' => 'string',
            'nik' => 'string|digits:16',
            'kewernegaraan' => 'string',
            'nama_lengkap' => 'string',
            'tempat' => 'string',
            'tanggal_lahir' => 'date',
            'jenis_kelamin' => 'string',
            'anak_dari' => 'string',
            'jumlah_saudara' => 'string',
            'agama' => 'string',
            'cita_cita' => 'string',
            'hobi' => 'string',
            'email' => 'email',
            'handphone' => 'string',
            'biaya_sekolah' => 'string',
            'paud' => 'string',
            'tk' => 'string',
            'hepatitis' => 'string',
            'polio' => 'string',
            'bcg' => 'string',
            'campak' => 'string',
            'dpt' => 'string',
            'covid' => 'string',
            'no_kip' => 'nullable|string',
            'no_kk' => 'string|digits:16',
            'kepala_keluarga' => 'string',

        ];
    }
}
