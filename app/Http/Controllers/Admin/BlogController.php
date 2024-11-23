<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Validator;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;

use Stevebauman\Purify\Facades\Purify;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

use App\Models\Category;
use App\Models\Blogpost;

use App\Traits\HelpersTrait;
use App\Http\Requests\AdminRequests\BlogpostRequests\UpdateBlogpostRequest;
use App\Http\Requests\AdminRequests\BlogpostRequests\CreateNewBlogpostRequest;

class BlogController extends Controller
{

    use HelpersTrait;
    const MODEL = "posts";

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function overview(){
        try{
            $blogposts = Blogpost::orderBy('updated_at', 'desc')->get();
            return view('admin.blog.overview_blogposts', compact('blogposts'));
        } catch(\Exception $e){
            abort(400);
        }
    }

    public function preview($uuid){
        try{

            $post = Blogpost::where('uuid', $uuid)->firstOrFail();

            if($post->status == 1){
                return redirect()->route('show_blogpost', $post->slug);
            }

            return View('blog.show', compact('post'));

        } catch(\Exception $e){
            abort(404);
        }
    }

    public function create(){
        try{
            $uuid       = $this->generatePseudoUUID(8);
            $categories = Category::typePosts()->parent()->with('children', 'children.children')->get();
            $type       = 'post';

            return view('admin.blog.create_blogpost', compact('uuid', 'categories', 'type'));

        } catch(\Exception $e){
            dd($e);
            abort(400);
        }
    }

    public function store(CreateNewBlogpostRequest $request){
        try{

            $post = new Blogpost();

            $title = Purify::clean($request->get('title'));
            $post->title = $title;

            $post->tagline = Purify::clean($request->get('tagline'));
            $post->excerpt = Purify::clean($request->get('excerpt'));

            // Count if title/slug has been repeated before
            if ($request->get('custom_slug_toggle') == 'on') {
                $custom_slug = $request->get('custom_slug');
                $post->slug = $this->saveSlug(self::MODEL, $title, $post->id, $custom_slug);
                $post->custom_slug = 1;
            } else {
                $post->slug = $this->saveSlug(self::MODEL, $title, $post->id);
                $post->custom_slug = 0;
            }

            // Purify and sanitize html input
            // May have to consider when adding any special elements (eg. youtube video embed / IG embed)
            $post->content = Purify::clean($request->get('content'));

            $uuid = $this->generatePseudoUUID(8);

            // Optimise image, move and save image
            if($request->file('featured_image') !== NULL){

                $image              = $request->file('featured_image');
                $image_real_path    = $image->getRealPath();
                $originalName       = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);

                $uploadedFileUrl = Cloudinary::upload($image_real_path, [
                    'public_id'     => $originalName,
                    'upload_preset' => env('CLOUDINARY_UPLOAD_PRESET'),
                    'overwrite'     => true,
                    'folder'        => self::MODEL.'/'.$uuid,
                    'transformation' => [
                        'crop'          => 'scale',
                        'width'         => 'auto',
                        'quality'       => 'auto',
                        'fetch_format'  => 'auto',
                        'flags'         => 'lossy'
                    ]
                ])->getSecurePath();

                $post->featured_image = $uploadedFileUrl;

            } else{
                $post->featured_image = NULL;
            }

            $post->type               = $request->get('type');
            $post->layout_type        = $request->get('layout_type');
            $post->meta_title         = $request->get('meta_title') == NULL ? $title : $request->get('meta_title');
            $post->meta_description   = $request->get('meta_description') == NULL ? $title : $request->get('meta_description');

            $post->uuid            = $uuid;
            $post->published_at    = Carbon::now();

            if($request->get('status') == 0){
                $post->status = 0;
            } else if ($request->get('status') == 1){
                $post->status = 1;
            }

            $post->save();

            if(isset($request->categories)){
                $categories = $request->categories;
                $categories_array = explode(',', $categories);
                $pivotData   = array_fill(0, count($categories_array), ['model_type' => 'post']);
                $syncData    = array_combine($categories_array, $pivotData);
                $post->categories()->attach($syncData);
            }

            return Redirect::route('admin_blogposts_edit', $post->uuid)->with('success', 'New post created: '.$post->title);

        } catch(\Exception $e){
            dd($e);
            abort(400);
        }
    }

    public function edit($uuid){
        try{

            $post       = Blogpost::where('uuid', $uuid)->with('categories')->firstOrFail();
            $current_post_categories = $post->categories()->pluck('id');
            $categories = Category::typePosts()->parent()->with('children', 'children.children')->get();
            $type       = 'post';
            
            return view('admin.blog.edit_blogpost', compact('post', 'uuid', 'current_post_categories', 'categories', 'type'));

        } catch(\Exception $e){
            abort(400);
        }
    }

    public function update(UpdateBlogpostRequest $request, $uuid){
        try{
            
            $post = Blogpost::where('uuid', $uuid)->firstOrFail();

            $title       = Purify::clean($request->get('title'));
            $post->title = $title;

            $post->tagline = Purify::clean($request->get('tagline'));
            $post->excerpt = Purify::clean($request->get('excerpt'));

            // Count if title/slug has been repeated before
            if ($request->get('custom_slug_toggle') == 'on') {
                $custom_slug = $request->get('custom_slug');
                $post->slug = $this->saveSlug(self::MODEL, $title, $post->id, $custom_slug);
                $post->custom_slug = 1;
            } else {
                $post->slug = $this->saveSlug(self::MODEL, $title, $post->id);
                $post->custom_slug = 0;
            }

            // Purify and sanitize html input
            // May have to consider when adding any special elements (eg. youtube video embed / IG embed)
            $post->content = Purify::clean($request->get('content'));

            // Optimise image, move and save image
            if($request->file('featured_image_upload') !== NULL){
                $image              = $request->file('featured_image_upload');
                $image_real_path    = $image->getRealPath();
                $originalName       = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);

                $uploadedFileUrl = Cloudinary::upload($image_real_path, [
                    'public_id'     => $originalName,
                    'upload_preset' => env('CLOUDINARY_UPLOAD_PRESET'),
                    'overwrite'     => true,
                    'folder'        => self::MODEL.'/'.$uuid,
                    'transformation' => [
                        'crop'          => 'scale',
                        'width'         => 'auto',
                        'quality'       => 'auto',
                        'fetch_format'  => 'auto',
                        'flags'         => 'lossy'
                    ]
                ])->getSecurePath();

                $post->featured_image = $uploadedFileUrl;
            }

            $post->type               = $request->get('type');
            $post->layout_type        = $request->get('layout_type');
            $post->meta_title         = $request->get('meta_title') == NULL ? $title : $request->get('meta_title');
            $post->meta_description   = $request->get('meta_description') == NULL ? $title : $request->get('meta_description');

            if($request->get('status') == 0){
                $post->status = 0;
            } else if ($request->get('status') == 1){
                $post->status = 1;
            }

            $post->published_at = Carbon::now();

            $post->save();

            if(isset($request->categories)){
                $categories = $request->categories;
                $categories_array = explode(',', $categories);
                $pivotData   = array_fill(0, count($categories_array), ['model_type' => 'post']);
                $syncData    = array_combine($categories_array, $pivotData);
                $post->categories()->sync($syncData);
            }

            return Redirect::back()->with('success', 'Post has been updated: '.$post->title);

        } catch(\Exception $e){
            dd($e);
            abort(400);
        }
    }

    public function delete($uuid){
        try{
            $post = Blogpost::where('uuid', $uuid)->firstOrFail();
            $post->delete();

            return Redirect::route('admin_blogposts_overview')->with('warning', 'Post has been deleted: ' . $post->title);

        } catch(\Exception $e){
            abort(400);
        }
    }



}
