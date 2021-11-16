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
            'precocompra' => 'required',
            'quantidade' => 'required',
            'unidade' => 'required',
            'ipi' => 'required',
            'frete' => 'required',
            'icms' => 'required',
            'entrada_id' => 'required',
            'produto_id' => 'required',
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
