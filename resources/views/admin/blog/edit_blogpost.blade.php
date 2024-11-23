@extends('default_admin')

@section('content_admin')

    <div class="w-full pt-2 pb-16 h-full min-h-screen">

        <div class="flex items-center max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <div class="flex mr-3">
                <a href="{{ route('admin_blogposts_overview') }}" class="hover:text-neongreen-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
            </div>
            <h1 class="flex items-center text-2xl flex-1 font-semibold text-gray-900">
                <span class="w-24 text-base sm:w-auto sm:text-xl">Edit Post:</span>
                <span class="text-gray-800 text-base pl-0 sm:pl-3 sm:text-xl">
                    {{ $post->title }}
                    <a href="{{ route('show_blogpost', $post->slug) }}" class="text-sm ml-2 text-gray-700 hover:text-neongreen-500 dark:text-neongreen-200 dark:hover:text-neongreen-300" target="_blank">
                        (View
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>)
                    </a>
                </span>
            </h1>

            <div class="flex justify-end">

                @include('admin.partials.button_toggle')

                <button type="submit" class="button ml-3" form="post_form">
                    Save Changes
                </button>
            </div>

        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">

            @include('partials.flash_messages')

            {!! Html::script('js/tinymce/tinymce.min.js') !!}
            <script type="text/javascript">

                const css_path = '{{ asset_path('assets/css/tinymce/tinymce_post.css') }}';
                tinymce.init({
                    selector: '#tinymce',
                    body_class: 'tinymce',
                    content_css : css_path,
                    plugins: [
                        "link image code fullscreen adminimageupload paste"
                    ],

                    paste_auto_cleanup_on_paste : true,
                    paste_remove_styles: true,
                    paste_remove_styles_if_webkit: true,
                    paste_strip_class_attributes: 'all',
                    paste_retain_style_properties: 'none',

                    toolbar: "undo redo | bold italic removeformat | alignleft aligncenter alignright alignjustify | formatselect fontselect fontsizeselect | link | adminimageupload media | code",

                    relative_urls: false,
                    convert_urls: false,
                    remove_script_host : false,

                    menubar: false,
                    forced_root_block: "",
                    insert_toolbar: 'quickimage quicktable'
                });
            </script>

            {!! Form::model($post, ['route' => ['admin_blogposts_update', $post->uuid], 'files' => 'true', 'method' => 'PUT', 'id' => 'post_form'])  !!}

            <div class="md:grid md:grid-cols-12 mt-4">

                <div class="page_main_content {{ session('toggleSidebar') == true ? 'lg:col-span-12' : 'lg:col-span-9' }} mt-3 sm:mt-2 space-y-6 sm:space-y-5">

                    <div class="sm:grid sm:grid-cols-10 sm:gap-4 sm:items-start sm:pt-1">
                        <div class="page_main_field sm:col-span-12 mt-1 sm:mt-0 ">
                            <input type="text" placeholder="Title of Blogpost" value="{{ $post->title }}" name="title" id="title" autocomplete="title" class="block sm:text-lg font-semibold w-full shadow-sm focus:ring-neongreen-300 focus:border-neongreen-300 border-neongreen-300 rounded-md bg-cream-200">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-10 sm:gap-4 sm:items-start sm:pt-1">
                        <div class="page_main_field sm:col-span-12 mt-1 sm:mt-0">
                            <textarea name="tagline" placeholder="Tagline" rows="2" style="resize:none" class="italic shadow-sm block w-full focus:ring-neongreen-300 focus:border-neongreen-300 sm:text-sm border-neongreen-300 rounded-md bg-cream-200">{{ $post->tagline }}</textarea>
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-10 sm:gap-4 sm:items-start sm:pt-1">
                        <div class="page_main_field sm:col-span-12 mt-1 sm:mt-0">
                            <div class="w-full flex rounded-md shadow-sm">
                              <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-neongreen-300 bg-gray-50 text-gray-500 sm:text-sm">
                                {{ config('app.url').'/' }}
                              </span>
                                <input type="text" placeholder="custom-slug" @if(old('custom_slug_toggle')) @elseif($post->custom_slug !== 1) disabled @endif  value="{{ $post->slug }}" name="custom_slug" id="custom_slug" autocomplete="custom_slug" class="custom_slug italic flex-1 block w-full @if(old('custom_slug_toggle')) @elseif($post->custom_slug !== 1) bg-gray-200 text-gray-600 cursor-not-allowed @endif focus:ring-neongreen-300 focus:border-neongreen-300 min-w-0 rounded-none rounded-r-md sm:text-sm border-neongreen-200">
                            </div>
                        </div>
                    </div>



                    <div class="sm:grid sm:grid-cols-10 sm:gap-4 sm:items-start sm:pt-1">
                        <div class="page_main_field sm:col-span-12 mt-1 sm:mt-0">
                            <textarea name="excerpt" placeholder="Excerpt" rows="3" style="resize:none" class="italic shadow-sm block w-full focus:ring-neongreen-300 focus:border-neongreen-300 sm:text-sm border-neongreen-300 rounded-md bg-cream-200">{{  $post->excerpt  }}</textarea>
                        </div>
                    </div>



                    <div class="sm:grid sm:grid-cols-10 sm:gap-4 sm:items-start sm:pt-1">
                        <div class="page_main_field sm:col-span-12 mt-1 sm:mt-0">
                            <textarea id="tinymce" name="content" rows="20" class="shadow-sm block w-full focus:ring-neongreen-300 focus:border-neongreen-300 sm:text-sm border-neongreen-300 rounded-md">{!!  $post->content  !!}</textarea>
                        </div>
                    </div>


                    <div class="sm:grid sm:grid-cols-10 sm:gap-4 sm:items-start sm:pt-1">

                        @include('admin.partials.categories_select_dropdown_edit')

                    </div>



                    <div class="sm:grid sm:grid-cols-10 sm:gap-4 sm:items-start sm:pt-1">
                        <div class="page_main_field sm:col-span-12 mt-1 sm:mt-0">
                            <input type="text" placeholder="Meta Title" value="{{ $post->meta_title }}" name="meta_title" id="meta_title" autocomplete="meta_title" class="block w-full shadow-sm focus:ring-neongreen-300 focus:border-neongreen-300 sm:text-sm border-neongreen-300 rounded-md bg-cream-200">
                        </div>
                    </div>

                    <div class="sm:grid sm:grid-cols-10 sm:gap-4 sm:items-start sm:pt-1">
                        <div class="page_main_field sm:col-span-12 mt-1 sm:mt-0">
                            <input type="text" placeholder="Meta Description" value="{{ $post->meta_description }}" name="meta_description" id="meta_description" autocomplete="meta_description" class="block w-full shadow-sm focus:ring-neongreen-300 focus:border-neongreen-300 sm:text-sm border-neongreen-300 rounded-md bg-cream-200">
                        </div>
                    </div>

                </div>

                <div class="page_sidebar {{ session('toggleSidebar') == true ? 'hidden' : '' }} col-span-3 lg:col-span-3 lg:pl-6 lg:pr-6 lg:ml-6 lg:border-l lg:border-neongreen-300  rounded mt-3 max-w-3xl sm:mt-3 space-y-6 sm:space-y-5">

                    <div class="sm:grid sm:grid-cols-10 sm:gap-4 sm:items-start sm:pt-1">
                        <label for="status" class="block text-sm font-medium text-gray-700 sm:col-span-3 sm:mt-px sm:pt-2">
                            Status
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-7">
                            <select id="status" name="status" autocomplete="status" class="block focus:ring-neongreen-300 focus:border-neongreen-300 w-full shadow-sm sm:text-sm border-neongreen-300 rounded-md">
                                <option value="1" {{ $post->status == 1 ? 'selected' :''  }}>Published</option>
                                <option value="0" {{ $post->status == 0 ? 'selected' :''  }}>Draft</option>
                            </select>
                        </div>
                    </div>

                    <div class="pt-4 flex items-center justify-between sm:border-t sm:border-neongreen-300 " x-data="{ on: {{ $post->custom_slug == 1 ? 'true' : 'false'  }}  }">
                        <div class="flex flex-col">
                            <p class="text-sm font-medium text-gray-900" id="custom_slug_toggle_label">
                                Custom Slug
                            </p>
                        </div>

                        <div class="relative inline-block w-10 mr-2 align-middle select-none">
                            <input type="checkbox" name="custom_slug_toggle" id="custom_slug_toggle"
                                   x-on:click='on = !on' :class="{'right-4': !on, '-right-1': on}" x-bind:checked="{{ $post->custom_slug == 1 ? 'true' : 'false'  }} "
                                   class="custom_slug_toggle checked:bg-white focus:bg-white bg-white outline-none right-4 checked:-right-1 duration-200 ease-in absolute block w-5 h-5 top-0.5 rounded-full hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neongreen-500 appearance-none cursor-pointer border-neongreen-300 border-2"/>
                            <label for="custom_slug_toggle"
                                :class="{ 'bg-neongreen-100': on, 'bg-gray-300': !(on) }"
                                class="block checked:bg-neongreen-100 overflow-hidden h-6 w-12 rounded-full cursor-pointer">
                            </label>
                        </div>
                    </div>


                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-neongreen-300  sm:pt-3">
                        <label for="featured_image" class=" sm:col-span-3 block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                            Featured Image
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-3">

                            <div class="featured_image {{ $post->featured_image !== NULL ? '' : 'hidden' }}">

                                <div class="flex relative w-full">
                                    <img class="current-image {{ $post->featured_image == NULL ? 'no-image' : '' }} object-cover rounded-md" src="{{ $post->featured_image }}" >
                                    <img class="loading-spinner hidden absolute w-40p inset-0 m-auto" 
                                        src="https://res.cloudinary.com/sitename/image/upload/v1689102911/assets/loaders/simple-spinner.gif"
                                        style="top: 50%; left: 40%; transform: translate(-50%, -50%);">
                                </div>


                                <div class="flex text-sm text-gray-600 justify-left pt-3">
                                    <label for="featured_image_upload" class="relative cursor-pointer py-1 px-2 mb-2 rounded-md font-medium text-neongreen-600 hover:text-neongreen-500">
                                        <span>Change featured image</span>
                                        <input id="featured_image_update" name="featured_image_update" type="file" uuid="{{ $post->uuid }}" route="{{ route('admin_upload_featured_image') }}" class="featured_image_update sr-only">
                                    </label>
                                </div>
                            </div>

                            <div class="featured_image_upload_container {{ $post->featured_image !== NULL ? 'hidden' : '' }} flex justify-center px-6 pt-5 pb-6 border-2 border-neongreen-300 border-dashed rounded-md">
                                <div class="relative w-full h-32">

                                    <div class="upload-container-text space-y-1 text-center pt-2">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm text-gray-600 justify-center">
                                            <label for="featured_image_upload" class="relative cursor-pointer px-2 bg-white rounded-md font-medium text-neongreen-500 hover:text-neongreen-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-neongreen-300">
                                                <span>Upload a file</span>
                                                <input id="featured_image_upload" name="featured_image_upload" type="file" uuid="{{ $uuid }}" route="{{ route('admin_upload_featured_image') }}" class="featured_image_upload sr-only">
                                            </label>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            PNG, JPG, GIF up to 20MB
                                        </p>
                                    </div>

                                    <img class="upload-box-loading-spinner hidden absolute w-40p inset-0 m-auto" 
                                        src="https://res.cloudinary.com/sitename/image/upload/v1689102911/assets/loaders/simple-spinner.gif"
                                        style="top: 50%; left: 40%; transform: translate(-50%, -50%);"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Privacy section -->
        <div class="pt-6 mt-8 border-t  border-neongreen-300 ">
            <div class="mt-4 py-4 px-4 flex justify-end sm:px-6">
                <button type="submit" class="button ml-5">
                    Save Changes
                </button>
            </div>
        </div>

        {!! Form::close() !!}

    </div>

@endsection

@section('scripts')

    @include('admin.partials.image_upload_modal')

    <script>

        // Current Model
        var model       = 'posts';

        // Init Variables
        var csrf_token  = '{{ csrf_token() }}';
        var uuid        = '{{ $post->uuid }}';
        var route       = '{{ route('admin_upload_image') }}';

        // Set model for featured image upload
        $('.featured_image_upload').attr('model', model);

        function openImageModal(){
            $('.image_upload_modal').removeClass('hidden');
            $this = $('#modal_image_input');
            $this.attr('uuid', uuid);
            $this.attr('route', route);
            $this.attr('model', model);
        }
    </script>


    <script src="{{ asset_path('/assets/js/admin/admin.js') }}"></script>
    <script src="{{ asset_path('/assets/js/admin/content_image_upload.js') }}"></script>
    <script src="{{ asset_path('/assets/js/admin/featured_image_upload.js') }}"></script>

@endsection
