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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/scripts/app.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/scripts/app.js":
/*!****************************!*\
  !*** ./src/scripts/app.js ***!
  \****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ \"jquery\");\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _input__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./input */ \"./src/scripts/input.js\");\n/* harmony import */ var _burger__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./burger */ \"./src/scripts/burger.js\");\n/* harmony import */ var _swipers__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./swipers */ \"./src/scripts/swipers.js\");\n/* harmony import */ var _map__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./map */ \"./src/scripts/map.js\");\n/* harmony import */ var _scrollup__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./scrollup */ \"./src/scripts/scrollup.js\");\n\n\n\n\n\n\njquery__WEBPACK_IMPORTED_MODULE_0___default()(function () {});\n\n//# sourceURL=webpack:///./src/scripts/app.js?");

/***/ }),

/***/ "./src/scripts/burger.js":
/*!*******************************!*\
  !*** ./src/scripts/burger.js ***!
  \*******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ \"jquery\");\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);\n\njquery__WEBPACK_IMPORTED_MODULE_0___default()(function () {\n  //перенос контента в бургер\n  function burgerContent() {\n    if (window.innerWidth <= 1024) {\n      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.header__contacts').appendTo('.header__nav');\n      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.header__socials').appendTo('.header__nav');\n    } else if (window.innerWidth > 1024) {\n      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.header__contacts').insertAfter('.header__search');\n      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.header__socials').insertAfter('.header__contacts');\n    }\n  } //активация бургера\n\n\n  function burgerToggle() {\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()('body').on('click', '.js-burger', function () {\n      if (jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).hasClass('_active')) {\n        jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).removeClass('_active');\n        bodyScrollLock.clearAllBodyScrollLocks();\n      } else {\n        jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).addClass('_active');\n        bodyScrollLock.disableBodyScroll(jquery__WEBPACK_IMPORTED_MODULE_0___default()(this));\n      }\n    });\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).mouseup(function (e) {\n      var burgerMenu = jquery__WEBPACK_IMPORTED_MODULE_0___default()(\".header__nav\");\n\n      if (!burgerMenu.is(e.target) && burgerMenu.has(e.target).length === 0 && !jquery__WEBPACK_IMPORTED_MODULE_0___default()('.js-burger').is(e.target)) {\n        jquery__WEBPACK_IMPORTED_MODULE_0___default()('.js-burger').removeClass('_active');\n        bodyScrollLock.clearAllBodyScrollLocks();\n      }\n    });\n  }\n\n  burgerContent();\n  burgerToggle();\n  jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).on('resize', function () {\n    burgerContent();\n    burgerToggle();\n  });\n});\n\n//# sourceURL=webpack:///./src/scripts/burger.js?");

/***/ }),

/***/ "./src/scripts/input.js":
/*!******************************!*\
  !*** ./src/scripts/input.js ***!
  \******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ \"jquery\");\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);\n\njquery__WEBPACK_IMPORTED_MODULE_0___default()(function () {\n  jquery__WEBPACK_IMPORTED_MODULE_0___default()(\".input\").keyup(function () {\n    var inputFilled = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).val();\n\n    if (inputFilled) {\n      jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).addClass(\"input-active\");\n    } else {\n      jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).removeClass(\"input-active\");\n    }\n  });\n  jquery__WEBPACK_IMPORTED_MODULE_0___default()('body').on('click', '.js-search', function (e) {\n    e.preventDefault();\n    e.stopPropagation();\n    var searchInput = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.header__search_input');\n\n    if (searchInput.val()) {\n      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.header__search').submit();\n    } else {\n      searchInput.toggleClass('input-active');\n    }\n  });\n  jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).mouseup(function (e) {\n    var searchInput = jquery__WEBPACK_IMPORTED_MODULE_0___default()(\".header__search_input\");\n\n    if (!searchInput.is(e.target) && !jquery__WEBPACK_IMPORTED_MODULE_0___default()('.js-search').is(e.target) && !searchInput.val()) {\n      searchInput.removeClass('input-active');\n    }\n  });\n  jquery__WEBPACK_IMPORTED_MODULE_0___default()('.js-phone-mask').mask(\"+7 (999) 999 99 99\", {\n    placeholder: \"_\"\n  });\n});\n\n//# sourceURL=webpack:///./src/scripts/input.js?");

/***/ }),

/***/ "./src/scripts/map.js":
/*!****************************!*\
  !*** ./src/scripts/map.js ***!
  \****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ \"jquery\");\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);\n\nymaps.ready(init);\n\nfunction init() {\n  var indexMapCenter = [55.720773, 37.770515];\n\n  if (jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).width() <= 768) {\n    indexMapCenter = [55.720956, 37.773619];\n  }\n\n  var indexMap = new ymaps.Map(\"map\", {\n    center: indexMapCenter,\n    zoom: 17,\n    controls: []\n  });\n  indexMap.geoObjects.options.set({\n    preset: 'islands#Icon',\n    iconColor: '#42c1c7'\n  });\n  indexMap.geoObjects.add(new ymaps.Placemark([55.720956, 37.773619], {\n    balloonContent: 'г. Москва, Рязанский пр-т 24, к. 1'\n  }, {\n    iconLayout: 'default#image',\n    iconImageHref: '/assets/images/pin.svg',\n    iconImageSize: [37, 37],\n    iconImageOffset: [0, 0]\n  }));\n}\n\n//# sourceURL=webpack:///./src/scripts/map.js?");

/***/ }),

/***/ "./src/scripts/scrollup.js":
/*!*********************************!*\
  !*** ./src/scripts/scrollup.js ***!
  \*********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ \"jquery\");\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);\n\njquery__WEBPACK_IMPORTED_MODULE_0___default()(function () {\n  var btn = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.js-scroll-up');\n  jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).scroll(function () {\n    if (jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).scrollTop() > 300) {\n      btn.addClass('_visible');\n    } else {\n      btn.removeClass('_visible');\n    }\n  });\n  btn.on('click', function (e) {\n    e.preventDefault();\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()('html, body').animate({\n      scrollTop: 0\n    }, '300');\n  });\n});\n\n//# sourceURL=webpack:///./src/scripts/scrollup.js?");

/***/ }),

/***/ "./src/scripts/swipers.js":
/*!********************************!*\
  !*** ./src/scripts/swipers.js ***!
  \********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ \"jquery\");\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);\n\njquery__WEBPACK_IMPORTED_MODULE_0___default()(function () {\n  var indexBanner = new Swiper('.banner', {\n    speed: 400,\n    spaceBetween: 0,\n    loop: true,\n    navigation: {\n      nextEl: '.banner__control.button-control-next',\n      prevEl: '.banner__control.button-control-prev'\n    }\n  });\n  var indexWorks = new Swiper('.works__slider', {\n    speed: 400,\n    spaceBetween: 0,\n    loop: true,\n    navigation: {\n      nextEl: '.works__control.button-control-next',\n      prevEl: '.works__control.button-control-prev'\n    }\n  });\n  var indexReviews = new Swiper('.reviews__slider', {\n    speed: 400,\n    spaceBetween: 30,\n    loop: true,\n    navigation: {\n      nextEl: '.reviews__control.button-control-next',\n      prevEl: '.reviews__control.button-control-prev'\n    },\n    breakpoints: {\n      320: {\n        slidesPerView: 1\n      },\n      1024: {\n        slidesPerView: 2\n      },\n      1600: {\n        slidesPerView: 3\n      }\n    }\n  });\n  var indexPartners = new Swiper('.partners__slider', {\n    speed: 400,\n    spaceBetween: 0,\n    loop: true,\n    navigation: {\n      nextEl: '.partners__control.button-control-next',\n      prevEl: '.partners__control.button-control-prev'\n    },\n    breakpoints: {\n      320: {\n        slidesPerView: 1\n      },\n      600: {\n        slidesPerView: 2\n      },\n      768: {\n        slidesPerView: 3\n      },\n      1024: {\n        slidesPerView: 4\n      },\n      1201: {\n        slidesPerView: 5\n      },\n      1601: {\n        slidesPerView: 6\n      }\n    }\n  });\n});\n\n//# sourceURL=webpack:///./src/scripts/swipers.js?");

/***/ }),

/***/ "jquery":
/*!*************************!*\
  !*** external "jQuery" ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("module.exports = jQuery;\n\n//# sourceURL=webpack:///external_%22jQuery%22?");

/***/ })

/******/ });