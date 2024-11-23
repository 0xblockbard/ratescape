/******/ (() => { // webpackBootstrap
/*!***************************************************************!*\
  !*** ./resources/assets/js/admin/admin_toggle_custom_slug.js ***!
  \***************************************************************/
$('.toggle_custom_slug_switch').on('change', function () {
  if ($('.toggle_custom_slug_switch').is(':checked')) {
    $('.custom_slug').attr('disabled', false);
  } else {
    $('.custom_slug').attr('disabled', true);
  }
});
/******/ })()
;