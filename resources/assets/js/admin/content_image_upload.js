$(document).on('click', '.cancel', closeModal);

$(document).on('keypress',function(e) {
    if(e.keyCode === 27) {
        closeModal();
    }
});

function closeModal(){
    $('.image_upload_modal').addClass('hidden');
}


// Tinymce modal upload image and add into content
var modalImageInput = document.querySelector('.modal_image_input');
modalImageInput.onchange = () => {
    if(modalImageInput.files.length > 0){

        $modal = $('.image_upload_modal');
        $this  = $('.modal_image_input');
        var uploaded_image = $this.prop('files')[0];
        var uuid           = $this.attr('uuid');
        var route          = $this.attr('route');
        var type           = $this.attr('model_type');

        console.log('set modal upload image');

        adminUploadImage(uploaded_image, uuid, type, route);

        $modal.find('.modal_upload_initial_text').addClass('hidden');
        $modal.find('.modal_upload_in_progress').removeClass('hidden');
    }
}

function adminUploadImage(image, uuid, type, route){

    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': csrf_token }
    });

    var newForm = new FormData();
    newForm.append('image', image);
    newForm.append('type', type);
    newForm.append('uuid', uuid);

    console.log('admin upload image');
    console.log(`route: ${route}`);

    $.ajax({
        url : route,
        method: 'post',
        data :newForm,
        processData: false,
        cache : false,
        contentType : false,
    })
        .done(function(data) {

            console.log('upload done');
            console.log(data);
            parent.tinymce.EditorManager.activeEditor.insertContent('<img src="' + data.image_path +'">');

            $modal = $('.image_upload_modal');
            $modal.addClass('hidden');
            $modal.find('.modal_upload_initial_text').removeClass('hidden');
            $modal.find('.modal_upload_in_progress').addClass('hidden');

        })
        .catch(function (error) {
            console.log('upload error');
            console.error('Oops, something went wrong!', error);
            console.log(error);
        });

}
