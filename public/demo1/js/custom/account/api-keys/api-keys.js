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

/***/ "./resources/assets/core/js/custom/account/api-keys/api-keys.js":
/*!**********************************************************************!*\
  !*** ./resources/assets/core/js/custom/account/api-keys/api-keys.js ***!
  \**********************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTAccountAPIKeys = function () {\n  // Private functions\n  var initLicenceCopy = function initLicenceCopy() {\n    KTUtil.each(document.querySelectorAll('#kt_api_keys_table [data-action=\"copy\"]'), function (button) {\n      var tr = button.closest('tr');\n      var license = KTUtil.find(tr, '[data-bs-target=\"license\"]');\n      var clipboard = new ClipboardJS(button, {\n        target: license,\n        text: function text() {\n          return license.innerHTML;\n        }\n      });\n      clipboard.on('success', function (e) {\n        // Icons\n        var svgIcon = button.querySelector('.svg-icon');\n        var checkIcon = button.querySelector('.bi.bi-check');\n\n        // exit if check icon is already shown\n        if (checkIcon) {\n          return;\n        }\n\n        // Create check icon\n        checkIcon = document.createElement('i');\n        checkIcon.classList.add('bi');\n        checkIcon.classList.add('bi-check');\n        checkIcon.classList.add('fs-2x');\n\n        // Append check icon\n        button.appendChild(checkIcon);\n\n        // Highlight target\n        license.classList.add('text-success');\n\n        // Hide copy icon\n        svgIcon.classList.add('d-none');\n\n        // Set 3 seconds timeout to hide the check icon and show copy icon back\n        setTimeout(function () {\n          // Remove check icon\n          svgIcon.classList.remove('d-none');\n          // Show check icon back\n          button.removeChild(checkIcon);\n\n          // Remove highlight\n          license.classList.remove('text-success');\n        }, 3000);\n      });\n    });\n  };\n\n  // Public methods\n  return {\n    init: function init() {\n      initLicenceCopy();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTAccountAPIKeys.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2FjY291bnQvYXBpLWtleXMvYXBpLWtleXMuanMuanMiLCJtYXBwaW5ncyI6IkFBQWE7O0FBRWI7QUFDQSxJQUFJQSxnQkFBZ0IsR0FBRyxZQUFZO0VBQy9CO0VBQ0EsSUFBSUMsZUFBZSxHQUFHLFNBQWxCQSxlQUFlQSxDQUFBLEVBQWM7SUFDN0JDLE1BQU0sQ0FBQ0MsSUFBSSxDQUFDQyxRQUFRLENBQUNDLGdCQUFnQixDQUFDLHlDQUF5QyxDQUFDLEVBQUUsVUFBU0MsTUFBTSxFQUFFO01BQy9GLElBQUlDLEVBQUUsR0FBR0QsTUFBTSxDQUFDRSxPQUFPLENBQUMsSUFBSSxDQUFDO01BQzdCLElBQUlDLE9BQU8sR0FBR1AsTUFBTSxDQUFDUSxJQUFJLENBQUNILEVBQUUsRUFBRSw0QkFBNEIsQ0FBQztNQUUzRCxJQUFJSSxTQUFTLEdBQUcsSUFBSUMsV0FBVyxDQUFDTixNQUFNLEVBQUU7UUFDcENPLE1BQU0sRUFBRUosT0FBTztRQUNmSyxJQUFJLEVBQUUsU0FBQUEsS0FBQSxFQUFXO1VBQ2IsT0FBT0wsT0FBTyxDQUFDTSxTQUFTO1FBQzVCO01BQ0osQ0FBQyxDQUFDO01BRUZKLFNBQVMsQ0FBQ0ssRUFBRSxDQUFDLFNBQVMsRUFBRSxVQUFTQyxDQUFDLEVBQUU7UUFDaEM7UUFDQSxJQUFJQyxPQUFPLEdBQUdaLE1BQU0sQ0FBQ2EsYUFBYSxDQUFDLFdBQVcsQ0FBQztRQUMvQyxJQUFJQyxTQUFTLEdBQUdkLE1BQU0sQ0FBQ2EsYUFBYSxDQUFDLGNBQWMsQ0FBQzs7UUFFcEQ7UUFDQSxJQUFJQyxTQUFTLEVBQUU7VUFDWjtRQUNIOztRQUVBO1FBQ0FBLFNBQVMsR0FBR2hCLFFBQVEsQ0FBQ2lCLGFBQWEsQ0FBQyxHQUFHLENBQUM7UUFDdkNELFNBQVMsQ0FBQ0UsU0FBUyxDQUFDQyxHQUFHLENBQUMsSUFBSSxDQUFDO1FBQzdCSCxTQUFTLENBQUNFLFNBQVMsQ0FBQ0MsR0FBRyxDQUFDLFVBQVUsQ0FBQztRQUNuQ0gsU0FBUyxDQUFDRSxTQUFTLENBQUNDLEdBQUcsQ0FBQyxPQUFPLENBQUM7O1FBRWhDO1FBQ0FqQixNQUFNLENBQUNrQixXQUFXLENBQUNKLFNBQVMsQ0FBQzs7UUFFN0I7UUFDQVgsT0FBTyxDQUFDYSxTQUFTLENBQUNDLEdBQUcsQ0FBQyxjQUFjLENBQUM7O1FBRXJDO1FBQ0FMLE9BQU8sQ0FBQ0ksU0FBUyxDQUFDQyxHQUFHLENBQUMsUUFBUSxDQUFDOztRQUUvQjtRQUNBRSxVQUFVLENBQUMsWUFBVztVQUNsQjtVQUNBUCxPQUFPLENBQUNJLFNBQVMsQ0FBQ0ksTUFBTSxDQUFDLFFBQVEsQ0FBQztVQUNsQztVQUNBcEIsTUFBTSxDQUFDcUIsV0FBVyxDQUFDUCxTQUFTLENBQUM7O1VBRTdCO1VBQ0FYLE9BQU8sQ0FBQ2EsU0FBUyxDQUFDSSxNQUFNLENBQUMsY0FBYyxDQUFDO1FBQzVDLENBQUMsRUFBRSxJQUFJLENBQUM7TUFDWixDQUFDLENBQUM7SUFDTixDQUFDLENBQUM7RUFDTixDQUFDOztFQUVEO0VBQ0EsT0FBTztJQUNIRSxJQUFJLEVBQUUsU0FBQUEsS0FBQSxFQUFZO01BQ2QzQixlQUFlLEVBQUU7SUFDckI7RUFDSixDQUFDO0FBQ0wsQ0FBQyxFQUFFOztBQUVIO0FBQ0FDLE1BQU0sQ0FBQzJCLGtCQUFrQixDQUFDLFlBQVc7RUFDakM3QixnQkFBZ0IsQ0FBQzRCLElBQUksRUFBRTtBQUMzQixDQUFDLENBQUMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2FjY291bnQvYXBpLWtleXMvYXBpLWtleXMuanM/ZjhmNCJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcclxuXHJcbi8vIENsYXNzIGRlZmluaXRpb25cclxudmFyIEtUQWNjb3VudEFQSUtleXMgPSBmdW5jdGlvbiAoKSB7XHJcbiAgICAvLyBQcml2YXRlIGZ1bmN0aW9uc1xyXG4gICAgdmFyIGluaXRMaWNlbmNlQ29weSA9IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgIEtUVXRpbC5lYWNoKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJyNrdF9hcGlfa2V5c190YWJsZSBbZGF0YS1hY3Rpb249XCJjb3B5XCJdJyksIGZ1bmN0aW9uKGJ1dHRvbikge1xyXG4gICAgICAgICAgICB2YXIgdHIgPSBidXR0b24uY2xvc2VzdCgndHInKTtcclxuICAgICAgICAgICAgdmFyIGxpY2Vuc2UgPSBLVFV0aWwuZmluZCh0ciwgJ1tkYXRhLWJzLXRhcmdldD1cImxpY2Vuc2VcIl0nKTtcclxuXHJcbiAgICAgICAgICAgIHZhciBjbGlwYm9hcmQgPSBuZXcgQ2xpcGJvYXJkSlMoYnV0dG9uLCB7XHJcbiAgICAgICAgICAgICAgICB0YXJnZXQ6IGxpY2Vuc2UsXHJcbiAgICAgICAgICAgICAgICB0ZXh0OiBmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgICAgICAgICByZXR1cm4gbGljZW5zZS5pbm5lckhUTUw7XHJcbiAgICAgICAgICAgICAgICB9ICAgICAgICAgICAgICAgICBcclxuICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgXHJcbiAgICAgICAgICAgIGNsaXBib2FyZC5vbignc3VjY2VzcycsIGZ1bmN0aW9uKGUpIHtcclxuICAgICAgICAgICAgICAgIC8vIEljb25zXHJcbiAgICAgICAgICAgICAgICB2YXIgc3ZnSWNvbiA9IGJ1dHRvbi5xdWVyeVNlbGVjdG9yKCcuc3ZnLWljb24nKTsgICAgICAgICAgICAgICAgXHJcbiAgICAgICAgICAgICAgICB2YXIgY2hlY2tJY29uID0gYnV0dG9uLnF1ZXJ5U2VsZWN0b3IoJy5iaS5iaS1jaGVjaycpO1xyXG4gICAgICAgICAgICAgICAgXHJcbiAgICAgICAgICAgICAgICAvLyBleGl0IGlmIGNoZWNrIGljb24gaXMgYWxyZWFkeSBzaG93blxyXG4gICAgICAgICAgICAgICAgaWYgKGNoZWNrSWNvbikge1xyXG4gICAgICAgICAgICAgICAgICAgcmV0dXJuOyAgXHJcbiAgICAgICAgICAgICAgICB9XHJcblxyXG4gICAgICAgICAgICAgICAgLy8gQ3JlYXRlIGNoZWNrIGljb25cclxuICAgICAgICAgICAgICAgIGNoZWNrSWNvbiA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2knKTtcclxuICAgICAgICAgICAgICAgIGNoZWNrSWNvbi5jbGFzc0xpc3QuYWRkKCdiaScpO1xyXG4gICAgICAgICAgICAgICAgY2hlY2tJY29uLmNsYXNzTGlzdC5hZGQoJ2JpLWNoZWNrJyk7XHJcbiAgICAgICAgICAgICAgICBjaGVja0ljb24uY2xhc3NMaXN0LmFkZCgnZnMtMngnKTtcclxuXHJcbiAgICAgICAgICAgICAgICAvLyBBcHBlbmQgY2hlY2sgaWNvblxyXG4gICAgICAgICAgICAgICAgYnV0dG9uLmFwcGVuZENoaWxkKGNoZWNrSWNvbik7XHJcblxyXG4gICAgICAgICAgICAgICAgLy8gSGlnaGxpZ2h0IHRhcmdldFxyXG4gICAgICAgICAgICAgICAgbGljZW5zZS5jbGFzc0xpc3QuYWRkKCd0ZXh0LXN1Y2Nlc3MnKTtcclxuXHJcbiAgICAgICAgICAgICAgICAvLyBIaWRlIGNvcHkgaWNvblxyXG4gICAgICAgICAgICAgICAgc3ZnSWNvbi5jbGFzc0xpc3QuYWRkKCdkLW5vbmUnKTtcclxuXHJcbiAgICAgICAgICAgICAgICAvLyBTZXQgMyBzZWNvbmRzIHRpbWVvdXQgdG8gaGlkZSB0aGUgY2hlY2sgaWNvbiBhbmQgc2hvdyBjb3B5IGljb24gYmFja1xyXG4gICAgICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgICAgICAgICAvLyBSZW1vdmUgY2hlY2sgaWNvblxyXG4gICAgICAgICAgICAgICAgICAgIHN2Z0ljb24uY2xhc3NMaXN0LnJlbW92ZSgnZC1ub25lJyk7XHJcbiAgICAgICAgICAgICAgICAgICAgLy8gU2hvdyBjaGVjayBpY29uIGJhY2tcclxuICAgICAgICAgICAgICAgICAgICBidXR0b24ucmVtb3ZlQ2hpbGQoY2hlY2tJY29uKTtcclxuXHJcbiAgICAgICAgICAgICAgICAgICAgLy8gUmVtb3ZlIGhpZ2hsaWdodFxyXG4gICAgICAgICAgICAgICAgICAgIGxpY2Vuc2UuY2xhc3NMaXN0LnJlbW92ZSgndGV4dC1zdWNjZXNzJyk7XHJcbiAgICAgICAgICAgICAgICB9LCAzMDAwKTtcclxuICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG4gICAgLy8gUHVibGljIG1ldGhvZHNcclxuICAgIHJldHVybiB7XHJcbiAgICAgICAgaW5pdDogZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICBpbml0TGljZW5jZUNvcHkoKTtcclxuICAgICAgICB9XHJcbiAgICB9XHJcbn0oKTtcclxuXHJcbi8vIE9uIGRvY3VtZW50IHJlYWR5XHJcbktUVXRpbC5vbkRPTUNvbnRlbnRMb2FkZWQoZnVuY3Rpb24oKSB7XHJcbiAgICBLVEFjY291bnRBUElLZXlzLmluaXQoKTtcclxufSk7XHJcbiJdLCJuYW1lcyI6WyJLVEFjY291bnRBUElLZXlzIiwiaW5pdExpY2VuY2VDb3B5IiwiS1RVdGlsIiwiZWFjaCIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvckFsbCIsImJ1dHRvbiIsInRyIiwiY2xvc2VzdCIsImxpY2Vuc2UiLCJmaW5kIiwiY2xpcGJvYXJkIiwiQ2xpcGJvYXJkSlMiLCJ0YXJnZXQiLCJ0ZXh0IiwiaW5uZXJIVE1MIiwib24iLCJlIiwic3ZnSWNvbiIsInF1ZXJ5U2VsZWN0b3IiLCJjaGVja0ljb24iLCJjcmVhdGVFbGVtZW50IiwiY2xhc3NMaXN0IiwiYWRkIiwiYXBwZW5kQ2hpbGQiLCJzZXRUaW1lb3V0IiwicmVtb3ZlIiwicmVtb3ZlQ2hpbGQiLCJpbml0Iiwib25ET01Db250ZW50TG9hZGVkIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/account/api-keys/api-keys.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/account/api-keys/api-keys.js"]();
/******/ 	
/******/ })()
;