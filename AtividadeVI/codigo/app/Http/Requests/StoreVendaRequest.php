<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVendaRequest extends FormRequest
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
            'datavenda' => 'required|date',
            'descontototal' => 'required|numeric',
            'descontoacerto' => 'required|numeric',
            'valortotal' => 'required|numeric',
            'cliente_id' => 'required|numeric|min:1',
        ];
    }
    public function messages(){
        return[

        'datavenda.required' => 'O campo data da venda é obrigatório.',
        'descontototal.required' => 'O campo desconto total é obrigatório.',
        'descontoacerto.required' => 'O campo desconto acerto é obrigatório.',
        'valortotal.required' => 'O campo valor total é obrigatório.',
        'cliente_id.required' => 'O campo Id cliente é obrigatório.',
        
        ];
    }
}
