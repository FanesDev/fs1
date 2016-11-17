<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusinessEmailFormRequest extends FormRequest
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
            'companies_id'  => 'required|max:32',
            'email'        => 'required|min:3|max:50',
        ];
    }
}
