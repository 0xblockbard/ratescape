$('.toggle_status').on('change', function(){

    var uuid   = $(this).data('uuid');
    var type   = $(this).data('type');

    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': csrf_token }
    });

    $.ajax({
        'data' : {
            'uuid' : uuid,
            'type' : type
        },
        'type' :'POST',
        'url' : toggle_status_url,
        'success': function(data){
            $("label[for='status']").html(data.status);
        },
        error: function(data) {

            jQuery('.alert-danger').children().remove();
            var errors = $.parseJSON(data.responseText);
            jQuery.each(errors, function(key, value){
                jQuery('.alert-danger').fadeIn(500);
                jQuery('.alert-danger').append('<p>'+value+'</p>');
            });

        }
    });
})
