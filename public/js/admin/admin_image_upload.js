
var imageFileInput = document.querySelector('.image-file-input');

imageFileInput.onchange = () => {
    if(imageFileInput.files.length > 0){
        var fileName = document.querySelector('.image-file-name');
        fileName.textContent = imageFileInput.files[0].name;

        var uploaded_image = $('.image-file-input').prop('files')[0];
        adminUploadDesign(uploaded_image);
    }
}

var ImageUpload = {
    inProgress : function() {
        // $('.image_upload_modal .insert_image_btn').addClass('is-loading');
        // document.getElementById("image_upload_modal").innerHTML = '<br><p>Uploading Image...</p>';
    },
    uploadSuccess : function(result) {
        $(".image_upload_modal .image_preview").css('display', 'block');
        // document.getElementById("upload_form").innerHTML = '<br><p>Upload Success!</p>';
        parent.tinymce.EditorManager.activeEditor.insertContent('<img src="' + result.code +'">');
    }
};


function adminUploadDesign(image){

    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': csrf_token }
    });

    var newForm = new FormData();
    newForm.append('image', image);

    $.ajax({
        url : image_upload_route,
        method: 'post',
        data :newForm,
        processData: false,
        cache : false,
        contentType : false,
    })
        .done(function(data) {

            $('.image_upload_modal .image_preview img').attr('src', data.image_path);
            $('.image_upload_modal .image_preview').show();

            parent.tinymce.EditorManager.activeEditor.insertContent('<img src="' + data.image_path +'">');

        })
        .catch(function (error) {
            console.error('Oops, something went wrong!', error);
        });

}
