$(document).on('click', '.close', closeModal);

function closeModal(){
    $("html").removeClass("is-clipped");
    $('.modal').removeClass('is-active');
}

$(document).on('keypress',function(e) {
    if(e.which == 27) {
        closeModal();
    }
});

$(document).click(function (e) {
    if($(e.target).is('.modal-background')) {
        closeModal();
    }
});
