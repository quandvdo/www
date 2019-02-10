<?php

namespace App\Http\Requests;

use Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreBasket extends FormRequest
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
            'name' => 'required',
            'email.*' => 'required|emails',
            'activity_date' => 'required|date|after:today',
            'quantity' => 'required|integer|min:1|max:100',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A valid message is required',
            'email.required' => 'We need to know your valid e-mail address!',
            'date.required' => 'The date is too closed to departure date. Please contact our service desk to override this.',
            'quantity.required' => 'There have to be at least 1 person'
        ];
    }

    public function filters()
    {
        return [
            'name' => 'trim|strip_tags',
            'email' => 'trim|strip_tags'
        ];
    }
}
