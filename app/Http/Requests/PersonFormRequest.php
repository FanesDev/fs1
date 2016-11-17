<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;

class PersonFormRequest extends FormRequest
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
            'first_name' => 'required|min:3|max:20',
            'last_name'  => 'required|min:3|max:20',

            'cpf'        => [
                'required',
                'min:11',
                'max:14',
                Rule::unique('people')->ignore($this->route('pessoa')),
            ],

            'rg'         => [
                'min:5',
                'max:20',
                Rule::unique('people')->ignore($this->route('pessoa')),
            ],

            'sex'        => 'required|in:M,F',
        ];
    }
}

