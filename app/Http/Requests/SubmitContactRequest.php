<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class SubmitContactRequest extends Request
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
            'name'                => 'required|string|max:90',
            'email'               => 'required|string|email:filter|max:255',
            'subject'             => 'required|string|max:200',
            'message'             => 'required|string|max:1000',
            'captcha'             => 'hiddencaptcha'
        ];
    }

    public function attributes()
    {
        return[

        ];

    }


}