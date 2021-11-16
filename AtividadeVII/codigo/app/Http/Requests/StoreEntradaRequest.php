<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntradaRequest extends FormRequest
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
            'valortotaldanota' => 'required',
            'dataentrada' => 'required',
            'fornecedor_id' => 'required',
        ];
    }
    public function messages(){
        return[

        'valortotaldanota.required' => 'O campo Valor total da nota é obrigatório.',
        'dataentrada.required' => 'O campo data entrada é obrigatório.',
        'fornecedor_id.required' => 'O campo Id fornecedor é obrigatório.'

        ];
    }
}
