<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentTaggable\Taggable;
use CloudinaryLabs\CloudinaryLaravel\MediaAlly;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blogpost extends Model
{
    use SoftDeletes;
    use Taggable;
    use MediaAlly;
    use HasFactory;

    protected $table = 'blogposts';

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
