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
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/main.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/img/asparagus-meat.jpg":
/*!************************************!*\
  !*** ./src/img/asparagus-meat.jpg ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("../../src/img/asparagus-meat.jpg");

/***/ }),

/***/ "./src/js/gsap/index.js":
/*!******************************!*\
  !*** ./src/js/gsap/index.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

//gsap
gsap.registerPlugin(ScrollTrigger);
gsap.to(".x", {
  x: 5,
  // y: 300,
  //duration: 1,
  scrollTrigger: {//trigger: ".picture-block",
    //start: "top 30%",
    //end: "top 20%",
    //    scrub: true,
    //toggleActions: "restart none none none",
    // pin: ".square",
    // pinSpacing: true,
    // play pause resume reverse restart reset complete none
    //              onEnter onLeave onEnterBack onLeaveBack
    // markers: {
    //   fontSize: "1.4rem",
    //   indent: 200
    // },
    // toggleClass: ".square"
  }
});

/***/ }),

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _gsap__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./gsap */ "./src/js/gsap/index.js");
/* harmony import */ var _gsap__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_gsap__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _slider__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./slider */ "./src/js/slider/index.js");
/* harmony import */ var _slider__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_slider__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _sass_main_scss__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../sass/main.scss */ "./src/sass/main.scss");
/* harmony import */ var _sass_main_scss__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_sass_main_scss__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _img_asparagus_meat_jpg__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../img/asparagus-meat.jpg */ "./src/img/asparagus-meat.jpg");


 // images

 // const section = document.querySelector('section');
// let currentPos = window.pageYOffset;
// const update = () => {
// 	const newPos = window.pageYOffset;
// 	const diff = newPos - currentPos;
// 	const speed = diff * 0.35;
// 	section.style.transform = `skewY(${ speed }deg)`;
// 	currentPos = newPos;
// 	requestAnimationFrame(update);
// }
// update();

/***/ }),

/***/ "./src/js/slider/index.js":
/*!********************************!*\
  !*** ./src/js/slider/index.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

// Call slick slider
(function ($) {
  var SlickSlider = /*#__PURE__*/function () {
    function SlickSlider() {
      _classCallCheck(this, SlickSlider);

      this.initiateSlider();
    } // slick slider settings


    _createClass(SlickSlider, [{
      key: "initiateSlider",
      value: function initiateSlider() {
        $('.front-page-slider').slick({
          autoplay: true,
          autoplaySpeed: 5000,
          fade: true,
          dots: true,
          cssEase: 'linear',
          variableWidth: false
        });
      }
    }]);

    return SlickSlider;
  }();

  new SlickSlider();
})(jQuery); //   ( function( $ ) {
//     class SlickCarousel {
//       constructor() {
//         this.initiateCarousel();
//       }
//       initiateCarousel() {
//         $( '.posts-carousel' ).slick( {
//           autoplay: true,
//           autoplaySpeed: 1000,
//           slidesToShow: 3,
//           slidesToScroll: 1,
//           infinite: true,
//           dots: true,
//           responsive: [
//             {
//               breakpoint: 768,
//               settings: {
//                 slidesToShow: 2,
//                 slidesToScroll: 1,
//               },
//             },
//             {
//               breakpoint: 600,
//               settings: {
//                 slidesToShow: 1,
//                 slidesToScroll: 1,
//               },
//             },
//             {
//               breakpoint: 480,
//               settings: {
//                 slidesToShow: 1,
//                 slidesToScroll: 1,
//               },
//             } ],
//         } );
//       }
//     }
//     new SlickCarousel();
//   } )( jQuery );

/***/ }),

/***/ "./src/sass/main.scss":
/*!****************************!*\
  !*** ./src/sass/main.scss ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ })

/******/ });
//# sourceMappingURL=main.js.map