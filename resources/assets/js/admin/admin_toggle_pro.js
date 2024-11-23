$('.toggle_pro').on('change', function(){

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
        'url' : toggle_pro_url,
        'success': function(data){
            // do nothing
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
