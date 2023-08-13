<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MerkRequest extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'merk' => 'required',
        ];
    }
}
