<?php

namespace App\Http\Requests;

use App\Rules\FullNome;
use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
            'nome' => ['required', new FullNome],
            'endereco' => 'required|min:20',
            'debito' => 'required|numeric',
        ];
    }

    public function messages(){
        return[

        'nome.required' => 'O campo nome é obrigatório.',
        'endereco.required' => 'O campo endereço é obrigatório.',
        'debito.required' => 'O campo débito é obrigatório.'

        ];
    }
}
