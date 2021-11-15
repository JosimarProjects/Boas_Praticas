<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'status' => 'required',
            'track_code' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'status.required' => 'Por favor preencha o status',
            'track_code.required' => 'Por favor preencha o código de envio',
            'track_code.min' => 'O código de envio deve ter no mínimo 5 caracteres'
        ];

    }
}
