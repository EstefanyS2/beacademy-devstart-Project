<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
         return [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'filme' => 'string|max:255',
            'duracao'  => 'string|max:255',
            'genero' => 'string|max:255',
            'classificacao' => 'string|max:255',
            'dtbirth' => 'nullable',
            'sinopse'   => 'string|max:255',
            'plataformas' => 'string|max:255|',
            'direcao' => 'string|max:255',
            'premio' => 'string|max:255'
         ];
    }

}
