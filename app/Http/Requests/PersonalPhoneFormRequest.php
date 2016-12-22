<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalPhoneFormRequest extends FormRequest
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
            'person_id'    => 'required|max:32',
            'phone_operator' => 'required|min:2|max:25',
            'ddd'      => 'required|min:2|max:2|
                in:11, 12, 13, 14, 15, 16, 17, 18, 19, 21, 22, 24, 27, 28, 
                    31, 32, 33, 34, 35, 37, 38, 41, 42, 43, 44, 45, 46, 47, 48, 49, 
                    51, 53, 54, 55, 61, 62, 63, 64, 65, 66, 67, 68, 69, 71, 73, 74, 
                    75, 77, 79, 81, 82, 83, 84, 85, 86, 87, 88, 89, 91, 92, 93, 94, 
                    95, 96, 97, 98, 99',
            'phone'      => 'required|min:8|max:9',
        ];
    }
}
