<?php

namespace App\Http\Requests\AdminRequests\UserRequests;

use App\Http\Requests\Request;
use Auth;

class UpdateUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::user()->hasRole(['admin'])){
            return true;
        } else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'                 => 'required|string|max:255',
            'email'                => 'required|string|email:filter|max:255|unique:users',
            'password'             => 'nullable|string|min:8',
            'image'                => 'mimes:png,jpeg,jpg|max:20480',
        ];
    }

    public function attributes()
    {
        return[

        ];

    }


}
