<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DataAlamat extends FormRequest
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
            'stts_tempat_tinggal' => 'string|required',
            'alamat' => 'string|required',
            'rt' => 'string|required',
            'rw'=> 'string|required',
            'desa'=>'string|required',
            'kecamatan'=> 'string|required',
            'kabupaten' => 'string|required',
            'provinsi' => 'string|required',
            'kode_pos' => 'integer|required',
            'koordinat_alamat'=> 'string|required',
            'transportasi' => 'string|required',
            'jarak' => 'string|required',
            'waktu_tempu' => 'string|required'
        ];
    }
}
