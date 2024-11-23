// toggle custom slug
$('.custom_slug_toggle').on('change', function(){
    $this = $('.custom_slug');
    if($('.custom_slug_toggle').is(':checked')){
        $this.attr('disabled', false);
        $this.removeClass('bg-neongreen-100 text-gray-600 cursor-not-allowed').addClass('bg-cream-200');
    } else{
        $this.attr('disabled', true);
        $this.addClass('bg-neongreen-100 text-gray-600 cursor-not-allowed').removeClass('bg-cream-200');
    }
});

$('.toggle_page_sidebar').on('click', togglePageSidebar);

function togglePageSidebar(){

    // $('.toggle_page_sidebar').find('i').toggleClass('fa-arrow-to-right fa-arrow-to-left');
    $('.toggle_page_sidebar').find('.arrow_right').toggleClass('hidden');
    $('.toggle_page_sidebar').find('.arrow_left').toggleClass('hidden');

    $('.page_sidebar').toggleClass('hidden');
    $('.page_main_content').toggleClass('lg:col-span-9 lg:col-span-12');


    $.ajax({
        'type': 'GET',
        'url': '/api/toggleSidebar',
        'success': function(data){
            // $('body').addClass('isDark');
        }
    });
}

window.categorySelect = function(){
    return {
        options: [],
        selected: [],
        open() { this.show = true },
        close() { this.show = false },
        isOpen() { return this.show === true },
        select(index, event) {

            if (!this.options[index].selected) {

                this.options[index].selected = true;
                this.options[index].element = event.target;
                this.selected.push(index);

            } else {
                this.selected.splice(this.selected.lastIndexOf(index), 1);
                this.options[index].selected = false
            }
        },
        remove(index, option) {
            this.options[option].selected = false;
            this.selected.splice(index, 1);
        },
        loadOptions() {

            const options = document.getElementById('categorySelect').options;

            for (let i = 0; i < options.length; i++) {

                option_id = options[i].value;
                parent_id = options[i].getAttribute('parent');
                innerText = options[i].innerText;

                isParent = parent_id == 0 ? true : false;
                isSelected = options[i].getAttribute('selected') != null ? options[i].getAttribute('selected') : false;

                this.options.push({
                    value: option_id,
                    text: innerText,
                    isParent: isParent,
                    selected: isSelected
                });

                if(options[i].getAttribute('selected') != null){
                    this.selected.push(i);
                }
            }
        },
        selectedValues(){
            return this.selected.map((option)=>{
                return this.options[option].value;
            })
        },
    }
}
