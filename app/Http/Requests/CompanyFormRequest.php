<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyFormRequest extends FormRequest
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
            'legal_name'         => 'required|max:50',
            'fantasy_name'       => 'required|max:50',
            'cnpj'               => 'required|min:14|max:14',
            'state_registration' => 'required|min:9|max:12',
        ];
    }
}
