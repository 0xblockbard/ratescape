// Upload featured image
var featuredImageUpload = document.querySelector('.featured_image_upload[type=file]');
var featuredImageUpdate = document.querySelector('.featured_image_update[type=file]');

featuredImageUpload.onchange = () => {
    if (featuredImageUpload.files.length > 0) {
        $this = $('.featured_image_upload');
        var uploaded_image = $this.prop('files')[0];
        var route          = $this.attr('route');
        var uuid           = $this.attr('uuid');
        uploadImage(uploaded_image, route, uuid);
    }
}

featuredImageUpdate.onchange = () => {
    if (featuredImageUpdate.files.length > 0) {
        $this = $('.featured_image_update');
        var uploaded_image = $this.prop('files')[0];
        var route          = $this.attr('route');
        var uuid           = $this.attr('uuid');
        uploadImage(uploaded_image, route, uuid);
    }
}

function uploadImage(image, route, uuid){

    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': csrf_token }
    });

    var newForm = new FormData();
    newForm.append('image', image);
    newForm.append('uuid', uuid);

    console.log('start upload image');
    
    // Show the spinner
    $('.current-image').addClass('opacity-60');

    if($('.current-image').hasClass('no-image')){
        $('.upload-container-text').hide();
        $('.upload-box-loading-spinner').show();
    } else {
        $('.loading-spinner').show();
    }

    $.ajax({
        url: route,
        method: 'post',
        data: newForm,
        processData: false,
        cache: false,
        contentType: false,
    })
        .done(function (data) {

            $('.notification_container').html(data);

            console.log('success test');
            console.log(data.image_path);
            console.log(data);

            setTimeout(function() {

                $image = $('.featured_image');
                $image.find('.current-image ').attr('src', data.image_path);
                $image.removeClass('hidden');
    
                $('.featured_image_upload_container').hide();

                // Hide the spinner
                // $('.loading-spinner').hide();
                // $('.current-image').removeClass('opacity-60');

                if($('.current-image').hasClass('no-image')){
                    $('.upload-box-loading-spinner').hide();
                    $('.current-image').removeClass('opacity-60 no-image');
                } else {
                    $('.loading-spinner').hide();
                    $('.current-image').removeClass('opacity-60');
                }

            }, 1000);

        }).fail(function (error) {

            console.log(error);
            
            // Hide the spinner even on failure
            $('.loading-spinner').hide();
            $('.current-image').removeClass('opacity-60');

        });

}