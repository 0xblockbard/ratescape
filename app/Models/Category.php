<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'type'
    ];

    // Category can belong to many posts
    public function posts(){
        return $this->belongsToMany('App\Models\Blogpost', 'category_model', 'model_id', 'category_id');
    }

    public function isParentCategory(){
        return $this->parent_id == 0;
    }
    /*
     * Category can have many children categories
     */
    public function children()
    {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }

    public function countChildren($node = null)
    {
        $query = $this->children();
        return (!empty($node)) ? $query->where('node', $node)->count() : $query->count();
    }

    public function scopeParent($query){
        return $query->where('parent_id', 0);
    }

    public function scopeTypePosts($query){
        return $query->where('type', 'post');
    }

    public function scopeTypePage($query){
        return $query->where('type', 'page');
    }


}
