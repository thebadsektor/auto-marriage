/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/core/js/custom/documentation/forms/recaptcha.js":
/*!**************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/forms/recaptcha.js ***!
  \**************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTFormsGoogleRecaptchaDemos = function () {\n  // Private functions\n  var example = function example(element) {\n    document.querySelector(\"#kt_form_submit_button\").addEventListener(\"click\", function (e) {\n      e.preventDefault();\n      grecaptcha.ready(function () {\n        if (grecaptcha.getResponse() === \"\") {\n          alert(\"Please validate the Google reCaptcha.\");\n        } else {\n          alert(\"Successful validation! Now you can submit this form to your server side processing.\");\n        }\n      });\n    });\n  };\n  return {\n    // Public Functions\n    init: function init(element) {\n      example();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTFormsGoogleRecaptchaDemos.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZm9ybXMvcmVjYXB0Y2hhLmpzLmpzIiwibWFwcGluZ3MiOiJBQUFhOztBQUViO0FBQ0EsSUFBSUEsMkJBQTJCLEdBQUcsWUFBWTtFQUMxQztFQUNBLElBQUlDLE9BQU8sR0FBRyxTQUFWQSxPQUFPQSxDQUFhQyxPQUFPLEVBQUU7SUFDN0JDLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLHdCQUF3QixDQUFDLENBQUNDLGdCQUFnQixDQUFDLE9BQU8sRUFBRSxVQUFVQyxDQUFDLEVBQUU7TUFDcEZBLENBQUMsQ0FBQ0MsY0FBYyxFQUFFO01BRWxCQyxVQUFVLENBQUNDLEtBQUssQ0FBQyxZQUFZO1FBQ3pCLElBQUlELFVBQVUsQ0FBQ0UsV0FBVyxFQUFFLEtBQUssRUFBRSxFQUFFO1VBQ2pDQyxLQUFLLENBQUMsdUNBQXVDLENBQUM7UUFDbEQsQ0FBQyxNQUFNO1VBQ0hBLEtBQUssQ0FBQyxxRkFBcUYsQ0FBQztRQUNoRztNQUNKLENBQUMsQ0FBQztJQUNOLENBQUMsQ0FBQztFQUNOLENBQUM7RUFFRCxPQUFPO0lBQ0g7SUFDQUMsSUFBSSxFQUFFLFNBQUFBLEtBQVVWLE9BQU8sRUFBRTtNQUNyQkQsT0FBTyxFQUFFO0lBQ2I7RUFDSixDQUFDO0FBQ0wsQ0FBQyxFQUFFOztBQUVIO0FBQ0FZLE1BQU0sQ0FBQ0Msa0JBQWtCLENBQUMsWUFBWTtFQUNsQ2QsMkJBQTJCLENBQUNZLElBQUksRUFBRTtBQUN0QyxDQUFDLENBQUMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZm9ybXMvcmVjYXB0Y2hhLmpzPzNhNDUiXSwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XHJcblxyXG4vLyBDbGFzcyBkZWZpbml0aW9uXHJcbnZhciBLVEZvcm1zR29vZ2xlUmVjYXB0Y2hhRGVtb3MgPSBmdW5jdGlvbiAoKSB7XHJcbiAgICAvLyBQcml2YXRlIGZ1bmN0aW9uc1xyXG4gICAgdmFyIGV4YW1wbGUgPSBmdW5jdGlvbiAoZWxlbWVudCkge1xyXG4gICAgICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIja3RfZm9ybV9zdWJtaXRfYnV0dG9uXCIpLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCBmdW5jdGlvbiAoZSkge1xyXG4gICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcblxyXG4gICAgICAgICAgICBncmVjYXB0Y2hhLnJlYWR5KGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAgICAgICAgIGlmIChncmVjYXB0Y2hhLmdldFJlc3BvbnNlKCkgPT09IFwiXCIpIHtcclxuICAgICAgICAgICAgICAgICAgICBhbGVydChcIlBsZWFzZSB2YWxpZGF0ZSB0aGUgR29vZ2xlIHJlQ2FwdGNoYS5cIik7XHJcbiAgICAgICAgICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgICAgIGFsZXJ0KFwiU3VjY2Vzc2Z1bCB2YWxpZGF0aW9uISBOb3cgeW91IGNhbiBzdWJtaXQgdGhpcyBmb3JtIHRvIHlvdXIgc2VydmVyIHNpZGUgcHJvY2Vzc2luZy5cIik7XHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH0pO1xyXG4gICAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIHJldHVybiB7XHJcbiAgICAgICAgLy8gUHVibGljIEZ1bmN0aW9uc1xyXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uIChlbGVtZW50KSB7XHJcbiAgICAgICAgICAgIGV4YW1wbGUoKTtcclxuICAgICAgICB9XHJcbiAgICB9O1xyXG59KCk7XHJcblxyXG4vLyBPbiBkb2N1bWVudCByZWFkeVxyXG5LVFV0aWwub25ET01Db250ZW50TG9hZGVkKGZ1bmN0aW9uICgpIHtcclxuICAgIEtURm9ybXNHb29nbGVSZWNhcHRjaGFEZW1vcy5pbml0KCk7XHJcbn0pO1xyXG4iXSwibmFtZXMiOlsiS1RGb3Jtc0dvb2dsZVJlY2FwdGNoYURlbW9zIiwiZXhhbXBsZSIsImVsZW1lbnQiLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJhZGRFdmVudExpc3RlbmVyIiwiZSIsInByZXZlbnREZWZhdWx0IiwiZ3JlY2FwdGNoYSIsInJlYWR5IiwiZ2V0UmVzcG9uc2UiLCJhbGVydCIsImluaXQiLCJLVFV0aWwiLCJvbkRPTUNvbnRlbnRMb2FkZWQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/forms/recaptcha.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/forms/recaptcha.js"]();
/******/ 	
/******/ })()
;