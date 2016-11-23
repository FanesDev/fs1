<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusinessAddressFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'companies_id' => 'required|max:32',
            'state'  => 'required|min:2|max:2',
            'city'        => 'required|min:4|max:50',
            'logradouto'         => 'min:5|max:50',
            'neighborhood'        => 'required|min:4|max:50',
            'number'        => 'required|min:1|max:10',
            'cep'        => 'min:8|max:8',
            'complement'        => 'min:4|max:100',
        ];
    }
}
