// $(document).on('click', '.close', closeModal);
// $(document).on('click', '.delete-icon', openDeleteModal);
// // $(document).on('click', '.btn_confirm_delete', confirmDelete);
//
// $(document).on('click', '.restore-icon', openRestoreModal);
// $(document).on('click', '.btn_submit_form', submitForm);
//
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
//
// // Delete Modal
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
// // function confirmDelete(){
// //     $(this).data('form').submit();
// // };
//
//
// function openRestoreModal(e){
//     $("html").addClass("is-clipped");
//
//     var modal = $('.restore_modal');
//     modal.addClass('is-active');
//
//     $message = $(this).data('message');
//     modal.find('.modal-card-body p').text($message);
//
//     $title = $(this).data('title');
//     modal.find('.modal-card-title').text($title);
//
//     $name = $(this).data('name');
//     modal.find('.item-name').text($name);
//
//     // Pass form reference to modal for submission on yes/ok
//     var form = $(this).closest('form');
//     modal.find('.btn_submit_form').data('form', form);
// };
//
// function submitForm(){
//     $(this).data('form').submit();
// };
