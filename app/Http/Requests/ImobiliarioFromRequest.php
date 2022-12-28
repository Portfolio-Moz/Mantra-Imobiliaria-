<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImobiliarioFromRequest extends FormRequest
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
            'categoria_id'=>[
                'required',
                'integer'
            ],
            'nome'=>[
                'required',
                'string',
            ],
            'p_discricao'=>[
                'required',
                'string',
            ],
            'disc'=>[
                'required',
                'string',
            ],
            'local'=>[
                'required',
                'string',
            ],
            'montante'=>[
                'nullable',
                
            ],
            'quartos'=>[
                'nullable',
                'integer'
            ],
            'numero'=>[
                'integer'
            ],
            'casaBanho'=>[
                'nullable',
                'integer'
            ],
            'estado'=>[
                'nullable',
            ],
            'image' =>[
                'nullable',
               
                
            ],
        ];
    }
}
