<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Redirect;
use Validator;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Stevebauman\Purify\Facades\Purify;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

use App\Models\Blogpost;
use App\Models\Page;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function uploadImage(Request $request){

        try{

            $validator = Validator::make($request->only('image'), [
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20480',
            ]);

            if($validator->fails()) {
                return response()->json([
                    'errors'  => $validator->errors()->all()
                ], 400);
            }

            $type = $request->get('type');
            $uuid = $request->get('uuid');

            $image              = $request->file('image');
            $image_real_path    = $image->getRealPath();
            $originalName       = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);

            $uploadedFileUrl = Cloudinary::upload($image_real_path, [
                'public_id'     => $originalName,
                'upload_preset' => env('CLOUDINARY_UPLOAD_PRESET'),
                'overwrite'     => true,
                'transformation' => [
                    'crop'          => 'scale',
                    'width'         => 'auto',
                    'quality'       => 'auto',
                    'fetch_format'  => 'auto',
                    'flags'         => 'lossy'
                ]
            ])->getSecurePath();

            return response()->json([
                'image_path'   => $uploadedFileUrl
            ], 200);
        
        } catch (\Exception $e){
            return response()->json([
                'errors' => $e
            ]);
        }

    }


    public function uploadFeaturedImage(Request $request){
        try{

            $rules = [
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20480',
                'model' => 'required'
            ];

            $messages = [
                'image' => 'You must upload an image.',
                'mimes' => 'Your image must be a jpg, jpeg, png, gif, or svg file.',
                'max'   => 'Your image size must be less than 20mb'
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            if($validator->fails()) {
                session()->flash('errors', $validator->errors());
                return View::make('partials/flash_messages', ['errors' => $validator->errors()]);
            }

            $model = $request->get('model');
            $uuid  = Purify::clean($request->get('uuid'));

            \Log::info('Model: '.$model);
            \Log::info('UUID: '.$uuid);

            if($model == 'posts'){
                $object = Blogpost::where('uuid', $uuid)->first();
            } elseif ($model == 'pages'){
                $object = Page::where('uuid', $uuid)->first();
            } 

            $image              = $request->file('image');
            $image_real_path    = $image->getRealPath();
            $originalName       = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $originalName       = Str::slug($originalName, '-');

            $uploadedFileUrl    = '';
            
            if($object !== null){

                $uploadedFileUrl = Cloudinary::upload($image_real_path, [
                    'public_id'     => $originalName,
                    'upload_preset' => env('CLOUDINARY_UPLOAD_PRESET'),
                    'overwrite'     => true,
                    'invalidate'    => true,
                    'folder'        => $model.'/'.$uuid,
                    'transformation' => [
                        'crop'          => 'scale',
                        'width'         => 'auto',
                        'quality'       => 'auto',
                        'fetch_format'  => 'auto',
                        'flags'         => 'lossy'
                    ]
                ])->getSecurePath();

                $object->featured_image = $uploadedFileUrl;
                $object->save();

            } else{

                // for creating new object
                $uploadedFileUrl = Cloudinary::upload($image_real_path, [
                    'public_id'     => $originalName,
                    'upload_preset' => env('CLOUDINARY_UPLOAD_PRESET'),
                    'overwrite'     => true,
                    'invalidate'    => true,
                    'folder'        => 'temp/'.$uuid,
                    'transformation' => [
                        'crop'          => 'scale',
                        'width'         => 'auto',
                        'quality'       => 'auto',
                        'fetch_format'  => 'auto',
                        'flags'         => 'lossy'
                    ]
                ])->getSecurePath();
            }

            return response()->json([
                'status'         => 'success',
                'image_path'     => $uploadedFileUrl
            ], 200);

        } catch(\Exception $e){
            return response()->json([
                'errors' => $e
            ]);
        }
    }



}
