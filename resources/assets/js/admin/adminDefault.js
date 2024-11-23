window.modals = function(){

    return {
        deleteModal: false,
        bindDeleteForm(e, $dispatch){
            var delete_modal = $('.delete_modal');
            console.log(e.target.attributes);
            var route        = e.target.attributes.route.nodeValue;
            var title        = e.target.attributes.title.nodeValue;
            var desc         = e.target.attributes.desc.nodeValue;
            var buttonText   = e.target.attributes.buttonText.nodeValue;
            delete_modal.find('.delete_form').attr('action', route);
            delete_modal.find('.title').text(title);
            delete_modal.find('.desc').text(desc);
            if(buttonText !== null){
                delete_modal.find('.btn_submit_delete_form').text(buttonText);
            }
        },
        submitDeleteForm(e, $dispatch){

            var title = 'Delete';
            var desc  = 'Are you sure you want to delete this?';
            var delete_modal = $('.delete_modal');
            var delete_form = delete_modal.find('.delete_form');
            delete_form.submit();
            delete_modal.fadeOut(200);
            delete_modal.find('.title').text(title);
            delete_modal.find('.desc').text(desc);
            delete_modal.find('.btn_submit_delete_form').text('Delete');
        },
        imageModal: false,
    }
}