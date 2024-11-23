jQuery(function(){

    var loadImages = new LazyLoad({
        elements_selector: 'img.lazy',
        threshold: 0,
        cancel_on_exit: true,
    });

    setTimeout(
        function() {
            loadImages.loadAll();
        }, 1000);
});