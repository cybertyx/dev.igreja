<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventoRequest extends FormRequest
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
            'title'         => 'required|min:3|max:30',
            'descricao'     => 'required|min:3|max:2000',
            'localizacao'   => 'required|min:10|max:50',
            'linkFacebook'  => 'required|unique:events',
            'linkTwitter'   => 'required|unique:events',
            'dataInicio'    => 'required',
            'dataFinal'     => 'required',
            'image'         => 'image'
        ];
    }
}
