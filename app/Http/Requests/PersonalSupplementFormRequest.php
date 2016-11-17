<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalSupplementFormRequest extends FormRequest
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
            'people_id'       => 'required|max:32',
            'supplement_name' => 'required|max:30',
            'supplement'      => 'required|max:100',
        ];
    }
}
