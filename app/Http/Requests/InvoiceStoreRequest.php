<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class InvoiceStoreRequest extends FormRequest
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
            'expiration_date' => 'required|after:today',
            'client_id' => 'required|number|exists:clients,id',
            'seller_id' => 'required|number|exists:sellers,id',
        ];
    }
}
