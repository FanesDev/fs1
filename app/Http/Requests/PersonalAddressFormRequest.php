<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalAddressFormRequest extends FormRequest
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
            'people_id' => 'required|max:32',
            'state'  => 'required|min:2|max:2',
            'city'        => 'required|min:4|max:50',
            'logradouto'         => 'min:5|max:50',
            'neighborhood'        => 'required|min:4|max:50',
            'number'        => 'required|min:1|max:10',
            'cep'        => 'required|min:8|max:8',
            'complement'        => 'required|min:4|max:100',
        ];
    }
}
