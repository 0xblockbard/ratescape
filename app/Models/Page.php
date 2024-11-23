<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    protected $table = 'pages';

    /*
     * Dates
     */
    protected $dates =['deleted_at', 'published_at'];

    public function scopePublished($query){
        return $query->where('status', 1);
    }

    public function scopeDraft($query){
        return $query->where('status', 0);
    }

    public function categories(){
        return $this->belongsToMany('App\Models\Category', 'category_model', 'model_id', 'category_id');
    }

}
