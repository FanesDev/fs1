<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseOrderFormRequest extends FormRequest
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
            'suppliers_id'         => 'required|max:32',
            'date_purchase_order'  => 'required|date',
            'delivery_date'        => 'required|date',
            'form_payment'         => 'required|min:3|max:20',
            'total_value'          => 'required|max:20',
            'incoming_invoices_id' => 'max:32',
            'status'               => 'required|min:3|max:20',
            'obs'                  => 'required|min:3|max:20',
        ];
    }
}
