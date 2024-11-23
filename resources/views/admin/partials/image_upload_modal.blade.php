<div id="image_upload_modal"
     class="image_upload_modal hidden fixed z-50 inset-0 overflow-y-auto overlay">

    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:p-0">

        <div class="fixed inset-0 transition-opacity" aria-hidden="true">

            <a href="#" class="cancel absolute inset-0 bg-gray-500 opacity-75"></a>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:py-10" role="dialog" aria-modal="true" aria-labelledby="modal-headline">

            <div class="hidden sm:block absolute top-0 right-0 pt-4 pr-4">
                <button type="button" class="cancel bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <a href="#" class="sr-only">Close</a>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="sm:flex sm:items-start">

                <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:mr-4 sm:text-left">
                    <h3 class="title text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                        Upload Image
                    </h3>
                    <div class="mt-2">

                        <div class="modal_image_input_container flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="modal_upload_initial_text">
                                    <div class="flex text-sm text-gray-600 justify-center">
                                        <label for="modal_image_input" class="relative cursor-pointer bg-white rounded-md font-medium text-neongreen-500 hover:text-neongreen-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-neongreen-500">
                                            <span>Upload a file</span>
                                            <input id="modal_image_input" name="modal_image_input" type="file" uuid="{{ isset($uuid) ? $uuid : '' }}" model="" route="" class="modal_image_input sr-only">
                                        </label>
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

                        <div id="image_preview" class="image_preview" style="display:none;">
                            <img src="" style="margin-top: 15px; width: 300px">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
