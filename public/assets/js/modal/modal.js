/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/modal/modal.js":
/*!********************************************!*\
  !*** ./resources/assets/js/modal/modal.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).on('click', '.close', closeModal);
$(document).on('click', '.btn_delete_modal', openDeleteModal);
$(document).on('click', '.btn_submit_form', confirmDelete);

function openImageModal() {
  $("html").addClass("is-clipped");
  $('.image_upload_modal').addClass('is-active');
}

function openModal() {
  $("html").addClass("is-clipped");
  $('.modal').addClass('is-active');
}

function closeModal() {
  $("html").removeClass("is-clipped");
  $('.modal').removeClass('is-active');
}

$(document).on('keypress', function (e) {
  if (e.which == 27) {
    closeModal();
  }
});
$(document).click(function (e) {
  if ($(e.target).is('.modal-background')) {
    closeModal();
  }
}); // Delete Modal

function openDeleteModal(e) {
  $("html").addClass("is-clipped");
  var delete_modal = $('.delete_modal');
  delete_modal.addClass('is-active');
  $message = $(this).data('message');
  delete_modal.find('.modal-card-body p').text($message);
  $title = $(this).data('title');
  delete_modal.find('.modal-card-title').text($title);
  $name = $(this).data('name');
  delete_modal.find('.item-name').text($name); // Pass form reference to modal for submission on yes/ok

  var form = $(this).closest('form');
  delete_modal.find('.btn_submit_form').data('form', form);
}

;

function confirmDelete() {
  $(this).data('form').submit();
}

;

/***/ }),

/***/ 2:
/*!**************************************************!*\
  !*** multi ./resources/assets/js/modal/modal.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/tim/Desktop/Code/timongty/resources/assets/js/modal/modal.js */"./resources/assets/js/modal/modal.js");


/***/ })

/******/ });