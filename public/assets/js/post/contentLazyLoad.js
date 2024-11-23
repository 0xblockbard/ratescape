/******/ (() => { // webpackBootstrap
/*!*****************************************************!*\
  !*** ./resources/assets/js/post/contentLazyLoad.js ***!
  \*****************************************************/
jQuery(function () {
  $('article img').each(function () {
    $this = $(this);
    var src = $this.attr('src');
    $this.attr('data-src', src);
    $this.addClass('lazy');
    $this.removeAttr('src');
  });
});
/******/ })()
;