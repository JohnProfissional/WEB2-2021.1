<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItensentradaRequest extends FormRequest
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
            'precocompra' => 'required|numeric|min:2',
            'quantidade' => 'required|numeric',
            'unidade' => 'required|min:2',
            'ipi' => 'required|numeric',
            'frete' => 'required|numeric',
            'icms' => 'required|numeric',
            'entrada_id' => 'required|numeric|min:1',
            'produto_id' => 'required|numeric|min:1',
        ];
    }
    public function messages(){
        return[

        'precocompra.required' => 'O campo preço de compra é obrigatório.',
        'quantidade.required' => 'O campo quantidade é obrigatório.',
        'unidade.required' => 'O campo unidade é obrigatório.',
        'ipi.required' => 'O campo ipi é obrigatório.',
        'frete.required' => 'O campo frete é obrigatório.',
        'icms.required' => 'O campo icms é obrigatório.',
        'entrada_id.required' => 'O campo Id entrada é obrigatório.',
        'produto_id.required' => 'O campo Id produto é obrigatório.',

        ];
    }
}
