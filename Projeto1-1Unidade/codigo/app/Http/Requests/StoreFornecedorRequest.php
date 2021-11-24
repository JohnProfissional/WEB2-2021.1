<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFornecedorRequest extends FormRequest
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
            'nomefornecedor' => 'required|min:10',
            'endereco' => 'required|max:150',
            'email' => 'required|email',
        ];
    }
    public function messages(){
        return[

        'nomefornecedor.required' => 'O campo nome do fornecedor é obrigatório.',
        'nome.min' => 'O campo deve ter no mínimo:min',
        'endereco.required' => 'O campo endereço é obrigatório.',
        'email.required' => 'O campo email é obrigatório.'

        ];
    }
}
