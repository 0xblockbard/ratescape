/******/ (() => { // webpackBootstrap
/*!*******************************************!*\
  !*** ./resources/assets/js/pages/home.js ***!
  \*******************************************/
// Can also be included with a regular script tag
// import Typed from '../../../../node_modules/typed.js/lib/typed';

// var options = {
//     strings: ['Web3 and Crypto', 'Smart Contract Development', 'Decentralised Finance', 'DAOs', 'Entrepreneurship', 'Building Stuff'],
//     typeSpeed: 70,
//     backSpeed: 0,
//     startDelay: 700,
//     backDelay: 700,
//     loop: true,
//     shuffle: true,
// };

// var typed = new Typed('.typed_header', options);

function randomIntFromInterval(min, max) {
  // min and max included 
  return Math.floor(Math.random() * (max - min + 1) + min);
}
var images = [];
// images[0] = "https://crossroadsmyth.test/storage/assets/home/hero/dwarf-home-hero-1920.png";
// images[1] = "https://crossroadsmyth.test/storage/assets/home/hero/elf-home-hero-1920.png";
// images[2] = "https://crossroadsmyth.test/storage/assets/home/hero/human-home-hero-1920.png";

var i = 0;
var previous = 0;
// setInterval(fadeDivs, 5000);

function fadeDivs() {
  i = randomIntFromInterval(0, images.length - 1);
  while (i == previous) {
    i = randomIntFromInterval(0, images.length - 1);
  }

  // set previous to new random index
  previous = i;
  $('.homepage_content .hero_container .hero_image_back').attr('src', images[i]);
  $('.homepage_content .hero_container .hero_image_back').show();
  $('.homepage_content .hero_container .hero_image').fadeOut(700, "linear", function () {
    $(this).attr('src', images[i]).fadeIn();
  });
}
$('.sidebar .menu_items li').hover(function () {
  // Hover in
  if ($('.sidebar').hasClass('w-52')) {
    return; // if the sidebar has a class of w-52, then we don't want to run the code below
  }
  if ($('.menu_item_text').hasClass('hidden')) {
    $(this).data('isHovered', true); // set isHovered to true for this tooltip
    $(this).find('.tooltip').removeClass('hidden'); // select the tooltip within the context of '#link'
  }
}, function () {
  // Hover out

  if ($('.sidebar').hasClass('w-52')) {
    return; // if the sidebar has a class of w-52, then we don't want to run the code below
  }
  $(this).data('isHovered', false); // set isHovered to false for this tooltip
  var tooltip = $('.tooltip', this); // select the tooltip within the context of '#link'

  if (!$(this).data('isHovered')) {
    // check isHovered for this tooltip
    tooltip.addClass('hidden');
  }
});
/******/ })()
;