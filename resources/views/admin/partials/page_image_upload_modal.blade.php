<div id="image_upload_modal"
     class="image_upload_modal hidden fixed z-10 inset-0 overflow-y-auto overlay">

    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:p-0">

        <div class="fixed inset-0 transition-opacity" aria-hidden="true">

            {{--        <div class="fixed inset-0 transition-opacity" aria-hidden="true">--}}
            {{--            <div class=""></div>--}}
            <a href="#" class="cancel absolute inset-0 bg-gray-500 opacity-75"></a>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:py-10" role="dialog" aria-modal="true" aria-labelledby="modal-headline">

            {{--        <div class="ease-in-out duration-100 inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-opacity transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">--}}

            {{--        <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">--}}
            <div class="hidden sm:block absolute top-0 right-0 pt-4 pr-4">
                <button type="button" class="cancel bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <a href="#" class="sr-only">Close</a>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="sm:flex sm:items-start">
{{--                <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">--}}
{{--                    <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />--}}
{{--                    </svg>--}}
{{--                </div>--}}
                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:mr-4 sm:text-left">
                    <h3 class="title text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                        Upload Image
                    </h3>
                    <div class="mt-2">
{{--                        <p class="desc text-sm text-gray-500">--}}
{{--                            Are you sure you want to delete this?--}}
{{--                        </p>--}}
{{--                        {!! Form::open(['route' => ['admin_upload_image'], 'method' => 'POST', 'files' => true, 'target' => 'upload_target']) !!}--}}

{{--                        <div class="file has-name is-fullwidth is-primary field mt-5">--}}
{{--                            <label class="file-label">--}}
{{--                                <input class="file-input image-file-input" type="file" name="image">--}}
{{--                                <span class="file-cta">--}}
{{--                                <span class="file-icon">--}}
{{--                                 <i class="fas fa-upload"></i>--}}
{{--                                </span>--}}
{{--                                <span class="file-label">--}}
{{--                                    Choose a file…--}}
{{--                                </span>--}}
{{--                            </span>--}}
{{--                                <span class="file-name image-file-name">--}}
{{--                                Upload Image--}}
{{--                            </span>--}}
{{--                            </label>--}}
{{--                        </div>--}}

                        <div class="modal_image_input_container flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="modal_upload_initial_text">
                                    <div class="flex text-sm text-gray-600 justify-center">
                                        <label for="modal_image_input" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>Upload a file</span>
                                            <input id="modal_image_input" name="modal_image_input" type="file" uuid="{{ isset($page) ? $page->uuid : ''  }}" route="" model_type="" class="modal_image_input sr-only">
                                        </label>
                                        {{--                                        <p class="pl-1">or drag and drop</p>--}}
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        PNG, JPG, GIF up to 20MB
                                    </p>
                                </div>
                                <div class="modal_upload_in_progress hidden">
                                    <p class="text-sm text-gray-500">Uploading in progress...</p>
                                </div>
                            </div>
                        </div>

{{--                        {!! Form::close() !!}--}}

                        <div id="image_preview" class="image_preview" style="display:none;">
                            <img src="" style="margin-top: 15px; width: 300px">
                        </div>

                    </div>
                </div>
            </div>
{{--            <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">--}}
{{--                <form method="GET" action="#" accept-charset="UTF-8" class="delete_form">--}}
{{--                    <button x-on:click="submitDeleteForm($event, $dispatch)" type="button" class="btn_submit_delete_form w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">--}}
{{--                        Delete--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--                <a href="#">--}}
{{--                    <button x-on:click="deleteModal = false;" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">--}}
{{--                        Cancel--}}
{{--                    </button>--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>
    </div>
</div>




{{--<div class="modal image_upload_modal" id="image_upload_modal">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-background"></div>--}}
{{--        <div class="modal-card">--}}
{{--            <header class="modal-card-head">--}}
{{--                <p class="modal-card-title">Add an image</p>--}}
{{--                <button class="delete close" aria-label="close"></button>--}}
{{--            </header>--}}
{{--            <section class="modal-card-body">--}}

{{--                <div>--}}
{{--                    {!! Form::open(['route' => ['admin_upload_image'], 'method' => 'POST', 'files' => true, 'target' => 'upload_target']) !!}--}}

{{--                    <div class="file has-name is-fullwidth is-primary field mt-5">--}}
{{--                        <label class="file-label">--}}
{{--                            <input class="file-input image-file-input" type="file" name="image">--}}
{{--                            <span class="file-cta">--}}
{{--                                <span class="file-icon">--}}
{{--                                 <i class="fas fa-upload"></i>--}}
{{--                                </span>--}}
{{--                                <span class="file-label">--}}
{{--                                    Choose a file…--}}
{{--                                </span>--}}
{{--                            </span>--}}
{{--                            <span class="file-name image-file-name">--}}
{{--                                Upload Image--}}
{{--                            </span>--}}
{{--                        </label>--}}
{{--                    </div>--}}

{{--                    {!! Form::close() !!}--}}
{{--                <div>--}}

{{--                <div id="image_preview" class="image_preview" style="display:none;">--}}
{{--                    <img src="" style="margin-top: 15px; width: 300px">--}}
{{--                </div>--}}

{{--            </section>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
