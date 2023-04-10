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

/***/ "./resources/assets/core/js/custom/utilities/modals/create-project/complete.js":
/*!*************************************************************************************!*\
  !*** ./resources/assets/core/js/custom/utilities/modals/create-project/complete.js ***!
  \*************************************************************************************/
/***/ ((module) => {

eval("\n\n// Class definition\nvar KTModalCreateProjectComplete = function () {\n  // Variables\n  var startButton;\n  var form;\n  var stepper;\n\n  // Private functions\n  var handleForm = function handleForm() {\n    startButton.addEventListener('click', function () {\n      stepper.goTo(1);\n    });\n  };\n  return {\n    // Public functions\n    init: function init() {\n      form = KTModalCreateProject.getForm();\n      stepper = KTModalCreateProject.getStepperObj();\n      startButton = KTModalCreateProject.getStepper().querySelector('[data-kt-element=\"complete-start\"]');\n      handleForm();\n    }\n  };\n}();\n\n// Webpack support\nif ( true && typeof module.exports !== 'undefined') {\n  window.KTModalCreateProjectComplete = module.exports = KTModalCreateProjectComplete;\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL3V0aWxpdGllcy9tb2RhbHMvY3JlYXRlLXByb2plY3QvY29tcGxldGUuanMuanMiLCJtYXBwaW5ncyI6IkFBQWE7O0FBRWI7QUFDQSxJQUFJQSw0QkFBNEIsR0FBRyxZQUFZO0VBQzlDO0VBQ0EsSUFBSUMsV0FBVztFQUNmLElBQUlDLElBQUk7RUFDUixJQUFJQyxPQUFPOztFQUVYO0VBQ0EsSUFBSUMsVUFBVSxHQUFHLFNBQWJBLFVBQVVBLENBQUEsRUFBYztJQUMzQkgsV0FBVyxDQUFDSSxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsWUFBWTtNQUNqREYsT0FBTyxDQUFDRyxJQUFJLENBQUMsQ0FBQyxDQUFDO0lBQ2hCLENBQUMsQ0FBQztFQUNILENBQUM7RUFFRCxPQUFPO0lBQ047SUFDQUMsSUFBSSxFQUFFLFNBQUFBLEtBQUEsRUFBWTtNQUNqQkwsSUFBSSxHQUFHTSxvQkFBb0IsQ0FBQ0MsT0FBTyxFQUFFO01BQ3JDTixPQUFPLEdBQUdLLG9CQUFvQixDQUFDRSxhQUFhLEVBQUU7TUFDOUNULFdBQVcsR0FBR08sb0JBQW9CLENBQUNHLFVBQVUsRUFBRSxDQUFDQyxhQUFhLENBQUMsb0NBQW9DLENBQUM7TUFFbkdSLFVBQVUsRUFBRTtJQUNiO0VBQ0QsQ0FBQztBQUNGLENBQUMsRUFBRTs7QUFFSDtBQUNBLElBQUksS0FBNkIsSUFBSSxPQUFPUyxNQUFNLENBQUNDLE9BQU8sS0FBSyxXQUFXLEVBQUU7RUFDM0VDLE1BQU0sQ0FBQ2YsNEJBQTRCLEdBQUdhLE1BQU0sQ0FBQ0MsT0FBTyxHQUFHZCw0QkFBNEI7QUFDcEYiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL3V0aWxpdGllcy9tb2RhbHMvY3JlYXRlLXByb2plY3QvY29tcGxldGUuanM/Y2Y2MyJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcclxuXHJcbi8vIENsYXNzIGRlZmluaXRpb25cclxudmFyIEtUTW9kYWxDcmVhdGVQcm9qZWN0Q29tcGxldGUgPSBmdW5jdGlvbiAoKSB7XHJcblx0Ly8gVmFyaWFibGVzXHJcblx0dmFyIHN0YXJ0QnV0dG9uO1xyXG5cdHZhciBmb3JtO1xyXG5cdHZhciBzdGVwcGVyO1xyXG5cclxuXHQvLyBQcml2YXRlIGZ1bmN0aW9uc1xyXG5cdHZhciBoYW5kbGVGb3JtID0gZnVuY3Rpb24oKSB7XHJcblx0XHRzdGFydEJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcclxuXHRcdFx0c3RlcHBlci5nb1RvKDEpO1xyXG5cdFx0fSk7XHJcblx0fVxyXG5cclxuXHRyZXR1cm4ge1xyXG5cdFx0Ly8gUHVibGljIGZ1bmN0aW9uc1xyXG5cdFx0aW5pdDogZnVuY3Rpb24gKCkge1xyXG5cdFx0XHRmb3JtID0gS1RNb2RhbENyZWF0ZVByb2plY3QuZ2V0Rm9ybSgpO1xyXG5cdFx0XHRzdGVwcGVyID0gS1RNb2RhbENyZWF0ZVByb2plY3QuZ2V0U3RlcHBlck9iaigpO1xyXG5cdFx0XHRzdGFydEJ1dHRvbiA9IEtUTW9kYWxDcmVhdGVQcm9qZWN0LmdldFN0ZXBwZXIoKS5xdWVyeVNlbGVjdG9yKCdbZGF0YS1rdC1lbGVtZW50PVwiY29tcGxldGUtc3RhcnRcIl0nKTtcclxuXHJcblx0XHRcdGhhbmRsZUZvcm0oKTtcclxuXHRcdH1cclxuXHR9O1xyXG59KCk7XHJcblxyXG4vLyBXZWJwYWNrIHN1cHBvcnRcclxuaWYgKHR5cGVvZiBtb2R1bGUgIT09ICd1bmRlZmluZWQnICYmIHR5cGVvZiBtb2R1bGUuZXhwb3J0cyAhPT0gJ3VuZGVmaW5lZCcpIHtcclxuXHR3aW5kb3cuS1RNb2RhbENyZWF0ZVByb2plY3RDb21wbGV0ZSA9IG1vZHVsZS5leHBvcnRzID0gS1RNb2RhbENyZWF0ZVByb2plY3RDb21wbGV0ZTtcclxufVxyXG4iXSwibmFtZXMiOlsiS1RNb2RhbENyZWF0ZVByb2plY3RDb21wbGV0ZSIsInN0YXJ0QnV0dG9uIiwiZm9ybSIsInN0ZXBwZXIiLCJoYW5kbGVGb3JtIiwiYWRkRXZlbnRMaXN0ZW5lciIsImdvVG8iLCJpbml0IiwiS1RNb2RhbENyZWF0ZVByb2plY3QiLCJnZXRGb3JtIiwiZ2V0U3RlcHBlck9iaiIsImdldFN0ZXBwZXIiLCJxdWVyeVNlbGVjdG9yIiwibW9kdWxlIiwiZXhwb3J0cyIsIndpbmRvdyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/utilities/modals/create-project/complete.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module is referenced by other modules so it can't be inlined
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/assets/core/js/custom/utilities/modals/create-project/complete.js");
/******/ 	
/******/ })()
;