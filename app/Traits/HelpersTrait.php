<?php

namespace App\Traits;

use App\Models\Blogpost;
use App\Models\Page;

use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Str;
use Spatie\Image\Image;
use Spatie\Image\Manipulations;

trait HelpersTrait
{

    // Check if slug exists and save
    // Add a count increment if slug exists
    protected function saveSlug($model, $title, $model_id, $custom_slug = NULL){

        if($custom_slug == NULL){
            $slug = Str::slug($title, '-');
        } else{
            $slug = Str::slug($custom_slug, '-');
        }

        $slug_count = 0;

        if($model == 'blogposts'){
            $slug_count = Blogpost::where('id', '!=', $model_id)->whereRaw("slug REGEXP '^{$slug}(-[0-9]+)?$'")->count();
        } else if ($model == 'pages'){
            $slug_count = Page::where('id', '!=', $model_id)->whereRaw("slug REGEXP '^{$slug}(-[0-9]+)?$'")->count();
        } 
        
        if($slug_count == 0){
            return $slug;
        } elseif($slug_count !== 0){
            $slug_count = $slug_count + 1;
            return $slug.'-'.$slug_count;
        }
    }

    protected function generatePseudoUUID($length){
        if($length > 0) {
            // Limit length to 32 for MD5
            if($length > 32) {
                $length = 32;
            }
            // Generate a random string
            $randomString = md5(uniqid(rand(), true));
            // Return the substr of the generated string
            return substr($randomString, 0, $length);
        } else {
            return '';
        }
    }

}
