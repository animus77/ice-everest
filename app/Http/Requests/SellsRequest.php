<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellsRequest extends FormRequest
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
            'date' => ['required', 'date'],
            'user_id' => ['required','numeric'],
            'amount' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],
            'paid_amount' => ['required', 'numeric'],
            'debt_amount' => ['required', 'numeric'],
            'product' => 'required',
            'order' => ['required', 'numeric'],
            'trip' => ['required', 'numeric'],
        ];
    }
}
