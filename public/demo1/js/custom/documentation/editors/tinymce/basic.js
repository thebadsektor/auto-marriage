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

/***/ "./resources/assets/core/js/custom/documentation/editors/tinymce/basic.js":
/*!********************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/editors/tinymce/basic.js ***!
  \********************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTFormsTinyMCEBasic = function () {\n  // Private functions\n  var exampleBasic = function exampleBasic() {\n    var options = {\n      selector: \"#kt_docs_tinymce_basic\",\n      height: \"480\"\n    };\n    if (KTThemeMode.getMode() === \"dark\") {\n      options[\"skin\"] = \"oxide-dark\";\n      options[\"content_css\"] = \"dark\";\n    }\n    tinymce.init(options);\n  };\n  return {\n    // Public Functions\n    init: function init() {\n      exampleBasic();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTFormsTinyMCEBasic.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZWRpdG9ycy90aW55bWNlL2Jhc2ljLmpzLmpzIiwibWFwcGluZ3MiOiJBQUFhOztBQUViO0FBQ0EsSUFBSUEsbUJBQW1CLEdBQUcsWUFBVztFQUNqQztFQUNBLElBQUlDLFlBQVksR0FBRyxTQUFmQSxZQUFZQSxDQUFBLEVBQWM7SUFDMUIsSUFBSUMsT0FBTyxHQUFHO01BQUNDLFFBQVEsRUFBRSx3QkFBd0I7TUFBR0MsTUFBTSxFQUFHO0lBQUssQ0FBQztJQUVuRSxJQUFJQyxXQUFXLENBQUNDLE9BQU8sRUFBRSxLQUFLLE1BQU0sRUFBRTtNQUNsQ0osT0FBTyxDQUFDLE1BQU0sQ0FBQyxHQUFHLFlBQVk7TUFDOUJBLE9BQU8sQ0FBQyxhQUFhLENBQUMsR0FBRyxNQUFNO0lBQ25DO0lBRUFLLE9BQU8sQ0FBQ0MsSUFBSSxDQUFDTixPQUFPLENBQUM7RUFDekIsQ0FBQztFQUVELE9BQU87SUFDSDtJQUNBTSxJQUFJLEVBQUUsU0FBQUEsS0FBQSxFQUFXO01BQ2JQLFlBQVksRUFBRTtJQUNsQjtFQUNKLENBQUM7QUFDTCxDQUFDLEVBQUU7O0FBRUg7QUFDQVEsTUFBTSxDQUFDQyxrQkFBa0IsQ0FBQyxZQUFXO0VBQ2pDVixtQkFBbUIsQ0FBQ1EsSUFBSSxFQUFFO0FBQzlCLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9qcy9jdXN0b20vZG9jdW1lbnRhdGlvbi9lZGl0b3JzL3RpbnltY2UvYmFzaWMuanM/MGJiOSJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcclxuXHJcbi8vIENsYXNzIGRlZmluaXRpb25cclxudmFyIEtURm9ybXNUaW55TUNFQmFzaWMgPSBmdW5jdGlvbigpIHtcclxuICAgIC8vIFByaXZhdGUgZnVuY3Rpb25zXHJcbiAgICB2YXIgZXhhbXBsZUJhc2ljID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgdmFyIG9wdGlvbnMgPSB7c2VsZWN0b3I6IFwiI2t0X2RvY3NfdGlueW1jZV9iYXNpY1wiLCAgaGVpZ2h0IDogXCI0ODBcIn07XHJcbiAgICAgICAgXHJcbiAgICAgICAgaWYgKEtUVGhlbWVNb2RlLmdldE1vZGUoKSA9PT0gXCJkYXJrXCIpIHtcclxuICAgICAgICAgICAgb3B0aW9uc1tcInNraW5cIl0gPSBcIm94aWRlLWRhcmtcIjtcclxuICAgICAgICAgICAgb3B0aW9uc1tcImNvbnRlbnRfY3NzXCJdID0gXCJkYXJrXCI7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIFxyXG4gICAgICAgIHRpbnltY2UuaW5pdChvcHRpb25zKTtcclxuICAgIH1cclxuXHJcbiAgICByZXR1cm4ge1xyXG4gICAgICAgIC8vIFB1YmxpYyBGdW5jdGlvbnNcclxuICAgICAgICBpbml0OiBmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgZXhhbXBsZUJhc2ljKCk7XHJcbiAgICAgICAgfVxyXG4gICAgfTtcclxufSgpO1xyXG5cclxuLy8gT24gZG9jdW1lbnQgcmVhZHlcclxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbigpIHtcclxuICAgIEtURm9ybXNUaW55TUNFQmFzaWMuaW5pdCgpO1xyXG59KTtcclxuIl0sIm5hbWVzIjpbIktURm9ybXNUaW55TUNFQmFzaWMiLCJleGFtcGxlQmFzaWMiLCJvcHRpb25zIiwic2VsZWN0b3IiLCJoZWlnaHQiLCJLVFRoZW1lTW9kZSIsImdldE1vZGUiLCJ0aW55bWNlIiwiaW5pdCIsIktUVXRpbCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/editors/tinymce/basic.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/editors/tinymce/basic.js"]();
/******/ 	
/******/ })()
;