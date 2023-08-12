<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatakenRequest extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'merk_id' => 'required',
            'jenis_id' => 'required',
            'tahun_pembuatan' => 'required',
            'no_polisi' => 'required',
            'no_mesin' => 'required',
            'no_rangka' => 'required',
        ];
    }
}
