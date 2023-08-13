<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KlasifikasiRequest extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'dataken_id' => 'required',
            'bahan_bakar' => 'required',
            'komponen_mesin' => 'required',
            'ban' => 'required',
            'lampu_utama' => 'required',
            'kondisi_rem' => 'required',
            'kelayakan' => 'required',
        ];
    }
}
