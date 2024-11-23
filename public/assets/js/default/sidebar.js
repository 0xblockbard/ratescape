/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************************!*\
  !*** ./resources/assets/js/default/sidebar.js ***!
  \************************************************/
function shortenSidebar() {
  $('.sidebar').removeClass('w-52');
  $('.sidebar a').addClass('group');
  $('.sidebar .menu_items a').addClass('px-2');
  $('.sidebar .menu_items a').removeClass('w-full px-3');
  $('.menu_items').css('width', 'auto');
  // $('.menu_item_text .inner_text').hide();
  $('.menu_item_text').hide();
}
function expandSidebar() {
  $('.sidebar').addClass('w-52');
  $('.sidebar a').removeClass('group');
  $('.sidebar .menu_items a').removeClass('px-2');
  $('.sidebar .menu_items a').addClass('w-full px-3');
  $('.menu_items').css('width', '90%');
  // $('.menu_item_text .inner_text').show('slow');

  $('.menu_items .menu_item_text').show(220);
}
$('.sidebar .logo').bind('mouseenter', expandSidebar);
$('.sidebar').bind('mouseleave', shortenSidebar);
/******/ })()
;