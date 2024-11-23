<?php

namespace App\Http\Requests\AdminRequests\BlogpostRequests;

use App\Http\Requests\Request;
use Auth;

class CreateNewBlogpostRequest extends Request
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
            'title'                => 'required|max:255',
            'tagline'              => 'max:255',
            'excerpt'              => 'max:255',
            'content'              => 'required',
            'type'                 => '',
            'layout_type'          => '',
            'custom_slug'          => '',
            'custom_slug_switch'   => '',
            'meta_title'           => '',
            'meta_description'     => '',
            'featured_image'       => 'mimes:png,jpeg,jpg|max:20480',
        ];
    }

    public function attributes()
    {
        return[
            'featured_image'       => 'featured image',
            'meta_title'           => 'meta title',
            'meta_description'     => 'meta description',
            'layout_type'          => 'layout type',
            'custom_slug'          => 'custom slug',
            'custom_slug_switch'   => 'custom slug switch',
        ];

    }


}
