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

/***/ "./resources/assets/core/js/custom/documentation/forms/formrepeater/basic.js":
/*!***********************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/forms/formrepeater/basic.js ***!
  \***********************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTFormRepeaterBasic = function () {\n  // Private functions\n  var example1 = function example1() {\n    $('#kt_docs_repeater_basic').repeater({\n      initEmpty: false,\n      defaultValues: {\n        'text-input': 'foo'\n      },\n      show: function show() {\n        $(this).slideDown();\n      },\n      hide: function hide(deleteElement) {\n        $(this).slideUp(deleteElement);\n      }\n    });\n  };\n  return {\n    // Public Functions\n    init: function init() {\n      example1();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTFormRepeaterBasic.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZm9ybXMvZm9ybXJlcGVhdGVyL2Jhc2ljLmpzLmpzIiwibWFwcGluZ3MiOiJBQUFhOztBQUViO0FBQ0EsSUFBSUEsbUJBQW1CLEdBQUcsWUFBWTtFQUNsQztFQUNBLElBQUlDLFFBQVEsR0FBRyxTQUFYQSxRQUFRQSxDQUFBLEVBQWU7SUFDdkJDLENBQUMsQ0FBQyx5QkFBeUIsQ0FBQyxDQUFDQyxRQUFRLENBQUM7TUFDbENDLFNBQVMsRUFBRSxLQUFLO01BRWhCQyxhQUFhLEVBQUU7UUFDWCxZQUFZLEVBQUU7TUFDbEIsQ0FBQztNQUVEQyxJQUFJLEVBQUUsU0FBQUEsS0FBQSxFQUFZO1FBQ2RKLENBQUMsQ0FBQyxJQUFJLENBQUMsQ0FBQ0ssU0FBUyxFQUFFO01BQ3ZCLENBQUM7TUFFREMsSUFBSSxFQUFFLFNBQUFBLEtBQVVDLGFBQWEsRUFBRTtRQUMzQlAsQ0FBQyxDQUFDLElBQUksQ0FBQyxDQUFDUSxPQUFPLENBQUNELGFBQWEsQ0FBQztNQUNsQztJQUNKLENBQUMsQ0FBQztFQUNOLENBQUM7RUFFRCxPQUFPO0lBQ0g7SUFDQUUsSUFBSSxFQUFFLFNBQUFBLEtBQUEsRUFBWTtNQUNkVixRQUFRLEVBQUU7SUFDZDtFQUNKLENBQUM7QUFDTCxDQUFDLEVBQUU7O0FBRUg7QUFDQVcsTUFBTSxDQUFDQyxrQkFBa0IsQ0FBQyxZQUFZO0VBQ2xDYixtQkFBbUIsQ0FBQ1csSUFBSSxFQUFFO0FBQzlCLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9qcy9jdXN0b20vZG9jdW1lbnRhdGlvbi9mb3Jtcy9mb3JtcmVwZWF0ZXIvYmFzaWMuanM/NTJhYiJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcclxuXHJcbi8vIENsYXNzIGRlZmluaXRpb25cclxudmFyIEtURm9ybVJlcGVhdGVyQmFzaWMgPSBmdW5jdGlvbiAoKSB7XHJcbiAgICAvLyBQcml2YXRlIGZ1bmN0aW9uc1xyXG4gICAgdmFyIGV4YW1wbGUxID0gZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICQoJyNrdF9kb2NzX3JlcGVhdGVyX2Jhc2ljJykucmVwZWF0ZXIoe1xyXG4gICAgICAgICAgICBpbml0RW1wdHk6IGZhbHNlLFxyXG5cclxuICAgICAgICAgICAgZGVmYXVsdFZhbHVlczoge1xyXG4gICAgICAgICAgICAgICAgJ3RleHQtaW5wdXQnOiAnZm9vJ1xyXG4gICAgICAgICAgICB9LFxyXG5cclxuICAgICAgICAgICAgc2hvdzogZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICAgICAgJCh0aGlzKS5zbGlkZURvd24oKTtcclxuICAgICAgICAgICAgfSxcclxuXHJcbiAgICAgICAgICAgIGhpZGU6IGZ1bmN0aW9uIChkZWxldGVFbGVtZW50KSB7XHJcbiAgICAgICAgICAgICAgICAkKHRoaXMpLnNsaWRlVXAoZGVsZXRlRWxlbWVudCk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICByZXR1cm4ge1xyXG4gICAgICAgIC8vIFB1YmxpYyBGdW5jdGlvbnNcclxuICAgICAgICBpbml0OiBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgIGV4YW1wbGUxKCk7XHJcbiAgICAgICAgfVxyXG4gICAgfTtcclxufSgpO1xyXG5cclxuLy8gT24gZG9jdW1lbnQgcmVhZHlcclxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbiAoKSB7XHJcbiAgICBLVEZvcm1SZXBlYXRlckJhc2ljLmluaXQoKTtcclxufSk7XHJcbiJdLCJuYW1lcyI6WyJLVEZvcm1SZXBlYXRlckJhc2ljIiwiZXhhbXBsZTEiLCIkIiwicmVwZWF0ZXIiLCJpbml0RW1wdHkiLCJkZWZhdWx0VmFsdWVzIiwic2hvdyIsInNsaWRlRG93biIsImhpZGUiLCJkZWxldGVFbGVtZW50Iiwic2xpZGVVcCIsImluaXQiLCJLVFV0aWwiLCJvbkRPTUNvbnRlbnRMb2FkZWQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/forms/formrepeater/basic.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/forms/formrepeater/basic.js"]();
/******/ 	
/******/ })()
;