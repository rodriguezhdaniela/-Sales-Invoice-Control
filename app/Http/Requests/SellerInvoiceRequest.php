<?php

namespace App\Http\Requests;

use App\seller;
use Illuminate\Foundation\Http\FormRequest;

class SellerInvoiceRequest extends FormRequest
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
    public function rules(Seller $seller)
    {
        return [
            'type_id' => 'required',
            'personal_id' => 'required|min:8',
            'name' => 'required|string|max:50',
            'address' => 'required',
            'phone_number' => 'required|min:7|numeric',
            'e_mail' => 'required|email|unique:clients,e_mail,'.$seller->id,
        ];
    }
}
