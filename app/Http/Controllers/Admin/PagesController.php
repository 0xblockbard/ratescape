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

use App\Models\Page;

use App\Traits\HelpersTrait;
use App\Http\Requests\AdminRequests\PageRequests\CreateNewPageRequest;
use App\Http\Requests\AdminRequests\PageRequests\UpdatePageRequest;

class PagesController extends Controller
{

    use HelpersTrait;

    const MODEL = "pages";

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function overview(){
        try{
            $pages = Page::orderBy('updated_at', 'desc')->get();
            return view('admin.page.overview_pages', compact('pages'));
        } catch(\Exception $e){
            abort(400);
        }
    }

    public function create(){
        try{
            $uuid = $this->generatePseudoUUID(8);
            return view('admin.page.create_page', compact('uuid'));
        } catch(\Exception $e){
            abort(400);
        }
    }

    public function store(CreateNewPageRequest $request){
        try{

            $page = new Page();

            $title = $request->get('title');
            $page->title = $title;
            $page->tagline = Purify::clean($request->get('tagline'));

            // Count if title/slug has been repeated before
            if ($request->get('custom_slug_toggle') == 'on') {
                $custom_slug = $request->get('custom_slug');
                $page->slug = $this->saveSlug(self::MODEL, $title, $page->id, $custom_slug);
                $page->custom_slug = 1;
            } else {
                $page->slug = $this->saveSlug(self::MODEL, $title, $page->id);
                $page->custom_slug = 0;
            }

            // Purify and sanitize html input
            // May have to consider when adding any special elements (eg. youtube video embed / IG embed)
            $page->content = Purify::clean($request->get('content'));
            $page->uuid    = $this->generatePseudoUUID(8);

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

                $page->featured_image = $uploadedFileUrl;
            } else{
                $page->featured_image = NULL;
            }

            $page->type               = "page";
            $page->meta_title         = $request->get('meta_title') == NULL ? $title : $request->get('meta_title');
            $page->meta_description   = $request->get('meta_description') == NULL ? $title : $request->get('meta_description');
            
            $page->published_at    = Carbon::now();

            if($request->get('status') == 0){
                $page->status = 0;
            } else if ($request->get('status') == 1){
                $page->status = 1;
            }

            $page->save();

            return Redirect::route('admin_pages_edit', $page->uuid)->with('success', 'New page created: '.$page->title);

        } catch(\Exception $e){
            dd($e);
            abort(400);
        }
    }

    public function edit($uuid){
        try{

            $page = Page::where('uuid', $uuid)->firstOrFail();

            return view('admin.page.edit_page', compact('page', 'uuid'));

        } catch(\Exception $e){
            abort(400);
        }
    }

    public function update(UpdatePageRequest $request, $uuid){
        try{
            $page = Page::where('uuid', $uuid)->firstOrFail();

            $title = $request->get('title');
            $page->title = $title;

            $page->tagline = Purify::clean($request->get('tagline'));

            // Count if title/slug has been repeated before
            if ($request->get('custom_slug_toggle') == 'on') {
                $custom_slug = $request->get('custom_slug');
                $page->slug = $this->saveSlug(self::MODEL, $title, $page->id, $custom_slug);
                $page->custom_slug = 1;
            } else {
                $page->slug = $this->saveSlug(self::MODEL, $title, $page->id);
                $page->custom_slug = 0;
            }

            // Purify and sanitize html input
            // May have to consider when adding any special elements (eg. youtube video embed / IG embed)
            $page->content = Purify::clean($request->get('content'));

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

                $page->featured_image = $uploadedFileUrl;
            } else{
                $page->featured_image = NULL;
            }

            $page->type               = "page";
            $page->meta_title         = $request->get('meta_title') == NULL ? $title : $request->get('meta_title');
            $page->meta_description   = $request->get('meta_description') == NULL ? $title : $request->get('meta_description');

            $page->published_at    = Carbon::now();

            if($request->get('status') == 0){
                $page->status = 0;
            } else if ($request->get('status') == 1){
                $page->status = 1;
            }

            $page->save();

            return Redirect::back()->with('success', 'Page has been updated!');

        } catch(\Exception $e){
            dd($e);
            abort(400);
        }
    }

    public function delete($uuid){
        try{
            $page = Page::where('uuid', $uuid)->firstOrFail();
            $page->delete();

            return Redirect::route('admin_pages_overview')->with('warning', 'Page has been deleted: ' . $page->title);

        } catch(\Exception $e){
            abort(400);
        }
    }

}
