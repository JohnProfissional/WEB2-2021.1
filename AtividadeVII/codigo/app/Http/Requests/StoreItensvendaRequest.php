<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItensvendaRequest extends FormRequest
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
            'quantidadeitens' => 'required',
            'valor' => 'required',
            'desconto' => 'required',
            'venda_id' => 'required',
            'produto_id' => 'required',
        ];
    }
    public function messages(){
        return[

        'quantidadeitens.required' => 'O campo quantidade de itens é obrigatório.',
        'valor.required' => 'O campo valor é obrigatório.',
        'desconto.required' => 'O campo desconto é obrigatório.',
        'venda_id.required' => 'O campo Id venda é obrigatório.',
        'produto_id.required' => 'O campo Id produto é obrigatório.',

        ];
    }
}
