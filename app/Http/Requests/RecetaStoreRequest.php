<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecetaStoreRequest extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required','min:3'],
            'ingredientes'  => ['required','min:20'],
            'preparacion'  => ['required','min:20'],
            'avatar' => ['nullable']
        ];
    }
}
