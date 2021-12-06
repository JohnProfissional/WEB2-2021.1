<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnderecoRequest extends FormRequest
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
            'logradouro' => 'required|max:100',
            'bairro' => 'required|max:70',
            'cidade' => 'required|max:80',
            'uf' => 'required|max:2',
            'cliente_id' => 'required|numeric|min:1',
        ];
    }
    public function messages(){
        return[

        'logradouro.required' => 'O campo logradouro é obrigatório.',
        'bairro.required' => 'O campo bairro é obrigatório.',
        'cidade.required' => 'O campo cidade é obrigatório.',
        'uf.required' => 'O campo UF é obrigatório.',
        'cliente_id.required' => 'O campo Id Cliente é obrigatório.',

        ];
    }
}
