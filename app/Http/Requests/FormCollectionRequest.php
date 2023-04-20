<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormCollectionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required','max:50'],
            'description' => ['required'],
            'genre' => ['required'],
            'files' => ['required']
        ];
    }
}
