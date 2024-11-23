<?php

namespace App\Http\Requests\AdminRequests\CategoryRequests;

use App\Http\Requests\Request;
use Auth;

class CreateNewCategoryRequest extends Request
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
            'name'                 => 'required|max:255',
            'parent_id'            => '',
        ];
    }

    public function attributes()
    {
        return[
            'parent_id'            => 'parent id'
        ];

    }


}
