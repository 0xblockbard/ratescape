<div class="modal image_upload_modal" id="image_upload_modal">
    <div class="modal-dialog">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Add an image</p>
                <button class="delete close" aria-label="close"></button>
            </header>
            <section class="modal-card-body">

                <div>
                    {!! Form::open(['route' => ['admin_upload_image'], 'method' => 'POST', 'files' => true, 'target' => 'upload_target']) !!}

                    <div class="file has-name is-fullwidth is-primary field mt-5">
                        <label class="file-label">
                            <input class="file-input image-file-input" type="file" name="image">
                            <span class="file-cta">
                                <span class="file-icon">
                                 <i class="fas fa-upload"></i>
                                </span>
                                <span class="file-label">
                                    Choose a file…
                                </span>
                            </span>
                            <span class="file-name image-file-name">
                                Upload Image
                            </span>
                        </label>
                    </div>

                    {!! Form::close() !!}
                <div>

                <div id="image_preview" class="image_preview" style="display:none;">
                    <img src="" style="margin-top: 15px; width: 300px">
                </div>

            </section>
        </div>
    </div>
</div>
