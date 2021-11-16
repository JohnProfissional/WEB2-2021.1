<?php

namespace App\Http\Requests;

use App\Rules\UpperCase;
use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
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
            'nomeproduto' => ['required', new UpperCase()],
            'quantidade' => 'required',
            'datavencimento' => 'required',
        ];
    }
    public function messages(){
        return[

        'nomeproduto.required' => 'O campo nome do produto é obrigatório.',
        'quantidade.required' => 'O campo quantidade é obrigatório.',
        'datavencimento.required' => 'O campo data de vencimento é obrigatório.',
        
        ];
    }
}
