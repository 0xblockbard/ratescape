function preload(arrayOfImages) {
    $(arrayOfImages).each(function(){
        $('<img/>')[0].src = this;
    });
}

// Usage:

preload([
	// add files to preload here: e.g. "https://cdn.site.com/assets/file.png"
]);