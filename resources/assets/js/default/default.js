import 'animate.css';

import SmoothScroll from 'smooth-scroll';

var scroll = new SmoothScroll('a[href*="#"]', {
    topOnEmptyHash: true, // Scroll to the top of the page for links with href="#"
    offset: 100
});

document.addEventListener("DOMContentLoaded", function() {
    // If there's a hash in the URL (e.g., arriving from another page with an anchor link)
    if (window.location.hash) {
        // Use setTimeout to ensure all other document onload scripts have executed
        setTimeout(function() {
            const targetElement = document.querySelector(window.location.hash);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 250,
                    behavior: "smooth"
                });
            }
        }, 0);
    }
});

var typedIntro = new Typed('#typed-intro', {
    strings: ['Do you want to...'],
    typeSpeed: 40,
    backSpeed: 0,
    startDelay: 500,
    backDelay: 1000,
    loop: false,

    onComplete: function () {

        new Typed('#typed-heading', {
            strings: ['Escape The <span class="text-yellow-300">Rat Race</span>?'],
            typeSpeed: 50,
            backSpeed: 0,
            startDelay: 1200,
            backDelay: 1500,
            loop: false,
            showCursor: false,
            onComplete: function () {

                new Typed('#typed-paragraph-1', {
                    strings: [
                        '"Too many bag holders are stuck in the rat race.'
                    ],
                    typeSpeed: 25,
                    backSpeed: 0,
                    startDelay: 800,
                    backDelay: 1000,
                    loop: false,
                    showCursor: false,

                    onComplete: function () {

                        new Typed('#typed-paragraph-2', {
                            strings: ['So I created RAT to help them escape!"'],
                            typeSpeed: 25,
                            backSpeed: 0,
                            startDelay: 500,
                            loop: false,
                            showCursor: false,

                            onComplete: function () {

                                new Typed('#typed-paragraph-3', {
                                    strings: ['<span class="text-yellow-300">~ Rattus, RAT Escape Creator</span>'],
                                    typeSpeed: 25,
                                    backSpeed: 0,
                                    startDelay: 500,
                                    loop: false,
                                    showCursor: false,

                                    onComplete: function () {

                                        new Typed('#typed-paragraph-4', {
                                            strings: ['<span class="text-yellow-300"><></span>'],
                                            typeSpeed: 25,
                                            backSpeed: 0,
                                            startDelay: 500,
                                            loop: false,
                                            showCursor: false,

                                        });
                                    },
                                });
                            },
                        });
                    },
                });
            },
        });
    },
});

