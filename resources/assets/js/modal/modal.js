// $(document).on('click', '.close', closeModal);
// $(document).on('click', '.btn_delete_modal', openDeleteModal);
// $(document).on('click', '.btn_submit_form', confirmDelete);

function openImageModal(){
    $("html").addClass("is-clipped");
    $('.image_upload_modal').addClass('is-active');
}

// function openModal(){
//     $("html").addClass("is-clipped");
//     $('.modal').addClass('is-active');
// }

// function closeModal(){
//     $("html").removeClass("is-clipped");
//     $('.modal').removeClass('is-active');
// }
//
// $(document).on('keypress',function(e) {
//     if(e.which == 27) {
//         closeModal();
//     }
// });
//
// $(document).click(function (e) {
//     if($(e.target).is('.modal-background')) {
//         closeModal();
//     }
// });

// Delete Modal
// function openDeleteModal(e){
//     $("html").addClass("is-clipped");
//
//     var delete_modal = $('.delete_modal');
//     delete_modal.addClass('is-active');
//
//     $message = $(this).data('message');
//     delete_modal.find('.modal-card-body p').text($message);
//
//     $title = $(this).data('title');
//     delete_modal.find('.modal-card-title').text($title);
//
//     $name = $(this).data('name');
//     delete_modal.find('.item-name').text($name);
//
//     // Pass form reference to modal for submission on yes/ok
//     var form = $(this).closest('form');
//     delete_modal.find('.btn_submit_form').data('form', form);
// };
//
// function confirmDelete(){
//     $(this).data('form').submit();
// };
