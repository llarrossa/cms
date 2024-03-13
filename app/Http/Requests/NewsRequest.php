<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title' => 'required|min:3',
            'subtitle' => 'required|min:3',
            'text' => 'required|min:10'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'O campo título é obrigatório!',
            'title.min' => 'Digite ao menos 3 caracteres para o título!',
            'subtitle.required' => 'O campo subtítulo é obrigatório!',
            'subtitle.min' => 'Digite ao menos 3 caracteres para o subtítulo!',
            'text.required' => 'O campo texto é obrigatório!',
            'text.min' => 'Digite ao menos 10 caracteres para o texto!'
        ];
    }
}
