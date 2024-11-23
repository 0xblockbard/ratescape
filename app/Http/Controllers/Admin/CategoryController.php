<?php

namespace App\Http\Controllers\Admin;


use Auth;
use Validator;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;

use Stevebauman\Purify\Facades\Purify;

use App\Models\Category;

use App\Http\Requests\AdminRequests\CategoryRequests\UpdateCategoryRequest;
use App\Http\Requests\AdminRequests\CategoryRequests\CreateNewCategoryRequest;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function overview(){
        try{
            
            $categories = Category::parent()->with('posts', 'children', 'children.posts', 'children.children', 'children.children.posts')->get();
            
            return view('admin.category.overview_categories', compact('categories'));

        } catch(\Exception $e){
            dd($e);
            abort(400);
        }
    }


    public function create(){
        try{
            
            $categories = Category::typePosts()->parent()->with('children', 'children.children')->get();
            return view('admin.category.create_category', compact('categories'));

        } catch(\Exception $e){
            abort(400);
        }
    }

    public function store(CreateNewCategoryRequest $request){
        try{

            $category = new Category();

            $name        = Purify::clean($request->get('name'));
            $description = Purify::clean($request->get('description'));
            $type        = Purify::clean($request->get('type'));

            if($request->get('categories') == null){ 
                $parent = 0;
            } else {
                $parent = $request->get('categories')[0];
            }
            
            $category->name               = $name;
            $category->slug               = $this->saveCategorySlug($name, $category->id);
            $category->description        = $description;
            $category->type               = $type;
            $category->parent_id          = $parent;
            
            $category->save();

            return Redirect::route('admin_categories_edit', [$category->type, $category->slug])->with('success', 'New category created: '.$category->name);

        } catch(\Exception $e){
            dd($e);
            abort(400);
        }
    }

    public function edit($type, $slug){
        try{

            $category = Category::where('type', $type)->where('slug', $slug)->firstOrFail();
            $categories = Category::typePosts()->parent()->with('children', 'children.children')->get();

            $current_post_categories = collect([$category->parent_id]);
            
            return view('admin.category.edit_category', compact('category', 'categories', 'current_post_categories'));

        } catch(\Exception $e){
            dd($e);
            abort(400);
        }
    }

    public function update(UpdateCategoryRequest $request, $type, $slug){
        try{

            $category = Category::where('type', $type)->where('slug', $slug)->firstOrFail();

            $name           = Purify::clean($request->get('name'));
            $description    = Purify::clean($request->get('description'));
            $type           = Purify::clean($request->get('type'));
            if($request->get('categories') == null){ 
                $parent = 0;
            } else {
                $parent = $request->get('categories')[0];
            }

            $category->name               = $name;
            $category->slug               = $this->saveCategorySlug($name, $category->id);
            $category->description        = $description;
            $category->type               = $type;
            $category->parent_id          = $parent;
            
            $category->save();

            return Redirect::route('admin_categories_edit', [$category->type, $category->slug])->with('success', 'Category has been updated: '.$category->name);

        } catch(\Exception $e){
            dd($e);
            abort(400);
        }
    }

    public function delete($type, $slug){
        try{
            
            $category = Category::where('type', $type)->where('slug', $slug)->firstOrFail();
            $category->delete();

            return Redirect::route('admin_categories_overview')->with('warning', 'Category has been deleted: ' . $category->name.' | Type: ' . ucfirst($category->type));

        } catch(\Exception $e){
            dd($e);
            abort(400);
        }
    }



    // Check if slug exists and save
    // Add a count increment if slug exists
    protected function saveCategorySlug($name, $category_id){

        $slug = Str::slug($name, '-');

        $slug_count = Category::where('id', '!=', $category_id)->whereRaw("slug REGEXP '^{$slug}(-[0-9]+)?$'")->count();

        if($slug_count == 0){
            return $slug;
        } elseif($slug_count !== 0){
            $slug_count = $slug_count + 1;
            return $slug.'-'.$slug_count;
        }
    }


}
