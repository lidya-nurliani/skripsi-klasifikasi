<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JenisRequest extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'jenis_kendaraan' => 'required',
        ];
    }
}
