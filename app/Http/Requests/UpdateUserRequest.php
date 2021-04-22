<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required','min:3'],
            'ingredientes'  => ['required','min:20'],
            'preparacion'  => ['required','min:20'],
            'categorias' => ['required'],
            'avatar' => ['nullable','image','max:1000']
        ];
    }
}
