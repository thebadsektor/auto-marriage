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

/***/ "./resources/assets/core/js/custom/account/referrals/referral-program.js":
/*!*******************************************************************************!*\
  !*** ./resources/assets/core/js/custom/account/referrals/referral-program.js ***!
  \*******************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTAccountReferralsReferralProgram = function () {\n  // Private functions\n\n  var initReferralProgrammClipboard = function initReferralProgrammClipboard() {\n    var button = document.querySelector('#kt_referral_program_link_copy_btn');\n    var input = document.querySelector('#kt_referral_link_input');\n    var clipboard = new ClipboardJS(button);\n    clipboard.on('success', function (e) {\n      var buttonCaption = button.innerHTML;\n      //Add bgcolor\n      input.classList.add('bg-success');\n      input.classList.add('text-inverse-success');\n      button.innerHTML = 'Copied!';\n      setTimeout(function () {\n        button.innerHTML = buttonCaption;\n\n        // Remove bgcolor\n        input.classList.remove('bg-success');\n        input.classList.remove('text-inverse-success');\n      }, 3000); // 3seconds\n\n      e.clearSelection();\n    });\n  };\n\n  // Public methods\n  return {\n    init: function init() {\n      initReferralProgrammClipboard();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTAccountReferralsReferralProgram.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2FjY291bnQvcmVmZXJyYWxzL3JlZmVycmFsLXByb2dyYW0uanMuanMiLCJtYXBwaW5ncyI6IkFBQWE7O0FBRWI7QUFDQSxJQUFJQSxpQ0FBaUMsR0FBRyxZQUFZO0VBQ2hEOztFQUVBLElBQUlDLDZCQUE2QixHQUFHLFNBQWhDQSw2QkFBNkJBLENBQUEsRUFBYztJQUMzQyxJQUFJQyxNQUFNLEdBQUdDLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLG9DQUFvQyxDQUFDO0lBQ3pFLElBQUlDLEtBQUssR0FBR0YsUUFBUSxDQUFDQyxhQUFhLENBQUMseUJBQXlCLENBQUM7SUFDN0QsSUFBSUUsU0FBUyxHQUFHLElBQUlDLFdBQVcsQ0FBQ0wsTUFBTSxDQUFDO0lBRXZDSSxTQUFTLENBQUNFLEVBQUUsQ0FBQyxTQUFTLEVBQUUsVUFBU0MsQ0FBQyxFQUFFO01BQ2hDLElBQUlDLGFBQWEsR0FBR1IsTUFBTSxDQUFDUyxTQUFTO01BQ3BDO01BQ0FOLEtBQUssQ0FBQ08sU0FBUyxDQUFDQyxHQUFHLENBQUMsWUFBWSxDQUFDO01BQ2pDUixLQUFLLENBQUNPLFNBQVMsQ0FBQ0MsR0FBRyxDQUFDLHNCQUFzQixDQUFDO01BRTNDWCxNQUFNLENBQUNTLFNBQVMsR0FBRyxTQUFTO01BRTVCRyxVQUFVLENBQUMsWUFBVztRQUNsQlosTUFBTSxDQUFDUyxTQUFTLEdBQUdELGFBQWE7O1FBRWhDO1FBQ0FMLEtBQUssQ0FBQ08sU0FBUyxDQUFDRyxNQUFNLENBQUMsWUFBWSxDQUFDO1FBQ3BDVixLQUFLLENBQUNPLFNBQVMsQ0FBQ0csTUFBTSxDQUFDLHNCQUFzQixDQUFDO01BQ2xELENBQUMsRUFBRSxJQUFJLENBQUMsQ0FBQyxDQUFFOztNQUVYTixDQUFDLENBQUNPLGNBQWMsRUFBRTtJQUN0QixDQUFDLENBQUM7RUFDTixDQUFDOztFQUVEO0VBQ0EsT0FBTztJQUNIQyxJQUFJLEVBQUUsU0FBQUEsS0FBQSxFQUFZO01BQ2RoQiw2QkFBNkIsRUFBRTtJQUNuQztFQUNKLENBQUM7QUFDTCxDQUFDLEVBQUU7O0FBRUg7QUFDQWlCLE1BQU0sQ0FBQ0Msa0JBQWtCLENBQUMsWUFBVztFQUNqQ25CLGlDQUFpQyxDQUFDaUIsSUFBSSxFQUFFO0FBQzVDLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9qcy9jdXN0b20vYWNjb3VudC9yZWZlcnJhbHMvcmVmZXJyYWwtcHJvZ3JhbS5qcz81NGFhIl0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xyXG5cclxuLy8gQ2xhc3MgZGVmaW5pdGlvblxyXG52YXIgS1RBY2NvdW50UmVmZXJyYWxzUmVmZXJyYWxQcm9ncmFtID0gZnVuY3Rpb24gKCkge1xyXG4gICAgLy8gUHJpdmF0ZSBmdW5jdGlvbnNcclxuXHJcbiAgICB2YXIgaW5pdFJlZmVycmFsUHJvZ3JhbW1DbGlwYm9hcmQgPSBmdW5jdGlvbigpIHtcclxuICAgICAgICB2YXIgYnV0dG9uID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2t0X3JlZmVycmFsX3Byb2dyYW1fbGlua19jb3B5X2J0bicpO1xyXG4gICAgICAgIHZhciBpbnB1dCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNrdF9yZWZlcnJhbF9saW5rX2lucHV0Jyk7XHJcbiAgICAgICAgdmFyIGNsaXBib2FyZCA9IG5ldyBDbGlwYm9hcmRKUyhidXR0b24pO1xyXG5cclxuICAgICAgICBjbGlwYm9hcmQub24oJ3N1Y2Nlc3MnLCBmdW5jdGlvbihlKSB7XHJcbiAgICAgICAgICAgIHZhciBidXR0b25DYXB0aW9uID0gYnV0dG9uLmlubmVySFRNTDtcclxuICAgICAgICAgICAgLy9BZGQgYmdjb2xvclxyXG4gICAgICAgICAgICBpbnB1dC5jbGFzc0xpc3QuYWRkKCdiZy1zdWNjZXNzJyk7XHJcbiAgICAgICAgICAgIGlucHV0LmNsYXNzTGlzdC5hZGQoJ3RleHQtaW52ZXJzZS1zdWNjZXNzJyk7XHJcblxyXG4gICAgICAgICAgICBidXR0b24uaW5uZXJIVE1MID0gJ0NvcGllZCEnO1xyXG5cclxuICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgICAgIGJ1dHRvbi5pbm5lckhUTUwgPSBidXR0b25DYXB0aW9uO1xyXG5cclxuICAgICAgICAgICAgICAgIC8vIFJlbW92ZSBiZ2NvbG9yXHJcbiAgICAgICAgICAgICAgICBpbnB1dC5jbGFzc0xpc3QucmVtb3ZlKCdiZy1zdWNjZXNzJyk7IFxyXG4gICAgICAgICAgICAgICAgaW5wdXQuY2xhc3NMaXN0LnJlbW92ZSgndGV4dC1pbnZlcnNlLXN1Y2Nlc3MnKTsgXHJcbiAgICAgICAgICAgIH0sIDMwMDApOyAgLy8gM3NlY29uZHNcclxuXHJcbiAgICAgICAgICAgIGUuY2xlYXJTZWxlY3Rpb24oKTtcclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICAvLyBQdWJsaWMgbWV0aG9kc1xyXG4gICAgcmV0dXJuIHtcclxuICAgICAgICBpbml0OiBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgIGluaXRSZWZlcnJhbFByb2dyYW1tQ2xpcGJvYXJkKCk7XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG59KCk7XHJcblxyXG4vLyBPbiBkb2N1bWVudCByZWFkeVxyXG5LVFV0aWwub25ET01Db250ZW50TG9hZGVkKGZ1bmN0aW9uKCkge1xyXG4gICAgS1RBY2NvdW50UmVmZXJyYWxzUmVmZXJyYWxQcm9ncmFtLmluaXQoKTtcclxufSk7XHJcbiJdLCJuYW1lcyI6WyJLVEFjY291bnRSZWZlcnJhbHNSZWZlcnJhbFByb2dyYW0iLCJpbml0UmVmZXJyYWxQcm9ncmFtbUNsaXBib2FyZCIsImJ1dHRvbiIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsImlucHV0IiwiY2xpcGJvYXJkIiwiQ2xpcGJvYXJkSlMiLCJvbiIsImUiLCJidXR0b25DYXB0aW9uIiwiaW5uZXJIVE1MIiwiY2xhc3NMaXN0IiwiYWRkIiwic2V0VGltZW91dCIsInJlbW92ZSIsImNsZWFyU2VsZWN0aW9uIiwiaW5pdCIsIktUVXRpbCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/account/referrals/referral-program.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/account/referrals/referral-program.js"]();
/******/ 	
/******/ })()
;