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

/***/ "./resources/assets/core/js/custom/utilities/modals/share-earn.js":
/*!************************************************************************!*\
  !*** ./resources/assets/core/js/custom/utilities/modals/share-earn.js ***!
  \************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTModalShareEarn = function () {\n  // Private functions\n  var handleForm = function handleForm() {\n    var button = document.querySelector('#kt_share_earn_link_copy_button');\n    var input = document.querySelector('#kt_share_earn_link_input');\n    var clipboard = new ClipboardJS(button);\n    if (!clipboard) {\n      return;\n    }\n\n    //  Copy text to clipboard. For more info check the plugin's documentation: https://clipboardjs.com/\n    clipboard.on('success', function (e) {\n      var buttonCaption = button.innerHTML;\n      //Add bgcolor\n      input.classList.add('bg-success');\n      input.classList.add('text-inverse-success');\n      button.innerHTML = 'Copied!';\n      setTimeout(function () {\n        button.innerHTML = buttonCaption;\n\n        // Remove bgcolor\n        input.classList.remove('bg-success');\n        input.classList.remove('text-inverse-success');\n      }, 3000); // 3seconds\n\n      e.clearSelection();\n    });\n  };\n\n  // Public methods\n  return {\n    init: function init() {\n      handleForm();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTModalShareEarn.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL3V0aWxpdGllcy9tb2RhbHMvc2hhcmUtZWFybi5qcy5qcyIsIm1hcHBpbmdzIjoiQUFBYTs7QUFFYjtBQUNBLElBQUlBLGdCQUFnQixHQUFHLFlBQVk7RUFDL0I7RUFDQSxJQUFJQyxVQUFVLEdBQUcsU0FBYkEsVUFBVUEsQ0FBQSxFQUFjO0lBQ3hCLElBQUlDLE1BQU0sR0FBR0MsUUFBUSxDQUFDQyxhQUFhLENBQUMsaUNBQWlDLENBQUM7SUFDdEUsSUFBSUMsS0FBSyxHQUFHRixRQUFRLENBQUNDLGFBQWEsQ0FBQywyQkFBMkIsQ0FBQztJQUMvRCxJQUFJRSxTQUFTLEdBQUcsSUFBSUMsV0FBVyxDQUFDTCxNQUFNLENBQUM7SUFFdkMsSUFBSSxDQUFDSSxTQUFTLEVBQUU7TUFDWjtJQUNKOztJQUVBO0lBQ0FBLFNBQVMsQ0FBQ0UsRUFBRSxDQUFDLFNBQVMsRUFBRSxVQUFTQyxDQUFDLEVBQUU7TUFDaEMsSUFBSUMsYUFBYSxHQUFHUixNQUFNLENBQUNTLFNBQVM7TUFDcEM7TUFDQU4sS0FBSyxDQUFDTyxTQUFTLENBQUNDLEdBQUcsQ0FBQyxZQUFZLENBQUM7TUFDakNSLEtBQUssQ0FBQ08sU0FBUyxDQUFDQyxHQUFHLENBQUMsc0JBQXNCLENBQUM7TUFFM0NYLE1BQU0sQ0FBQ1MsU0FBUyxHQUFHLFNBQVM7TUFFNUJHLFVBQVUsQ0FBQyxZQUFXO1FBQ2xCWixNQUFNLENBQUNTLFNBQVMsR0FBR0QsYUFBYTs7UUFFaEM7UUFDQUwsS0FBSyxDQUFDTyxTQUFTLENBQUNHLE1BQU0sQ0FBQyxZQUFZLENBQUM7UUFDcENWLEtBQUssQ0FBQ08sU0FBUyxDQUFDRyxNQUFNLENBQUMsc0JBQXNCLENBQUM7TUFDbEQsQ0FBQyxFQUFFLElBQUksQ0FBQyxDQUFDLENBQUU7O01BRVhOLENBQUMsQ0FBQ08sY0FBYyxFQUFFO0lBQ3RCLENBQUMsQ0FBQztFQUNOLENBQUM7O0VBRUQ7RUFDQSxPQUFPO0lBQ0hDLElBQUksRUFBRSxTQUFBQSxLQUFBLEVBQVk7TUFDZGhCLFVBQVUsRUFBRTtJQUNoQjtFQUNKLENBQUM7QUFDTCxDQUFDLEVBQUU7O0FBRUg7QUFDQWlCLE1BQU0sQ0FBQ0Msa0JBQWtCLENBQUMsWUFBVztFQUNqQ25CLGdCQUFnQixDQUFDaUIsSUFBSSxFQUFFO0FBQzNCLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9qcy9jdXN0b20vdXRpbGl0aWVzL21vZGFscy9zaGFyZS1lYXJuLmpzP2M1MDciXSwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XHJcblxyXG4vLyBDbGFzcyBkZWZpbml0aW9uXHJcbnZhciBLVE1vZGFsU2hhcmVFYXJuID0gZnVuY3Rpb24gKCkge1xyXG4gICAgLy8gUHJpdmF0ZSBmdW5jdGlvbnNcclxuICAgIHZhciBoYW5kbGVGb3JtID0gZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgdmFyIGJ1dHRvbiA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNrdF9zaGFyZV9lYXJuX2xpbmtfY29weV9idXR0b24nKTtcclxuICAgICAgICB2YXIgaW5wdXQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcja3Rfc2hhcmVfZWFybl9saW5rX2lucHV0Jyk7XHJcbiAgICAgICAgdmFyIGNsaXBib2FyZCA9IG5ldyBDbGlwYm9hcmRKUyhidXR0b24pO1xyXG5cclxuICAgICAgICBpZiAoIWNsaXBib2FyZCkge1xyXG4gICAgICAgICAgICByZXR1cm47XHJcbiAgICAgICAgfVxyXG5cclxuICAgICAgICAvLyAgQ29weSB0ZXh0IHRvIGNsaXBib2FyZC4gRm9yIG1vcmUgaW5mbyBjaGVjayB0aGUgcGx1Z2luJ3MgZG9jdW1lbnRhdGlvbjogaHR0cHM6Ly9jbGlwYm9hcmRqcy5jb20vXHJcbiAgICAgICAgY2xpcGJvYXJkLm9uKCdzdWNjZXNzJywgZnVuY3Rpb24oZSkge1xyXG4gICAgICAgICAgICB2YXIgYnV0dG9uQ2FwdGlvbiA9IGJ1dHRvbi5pbm5lckhUTUw7XHJcbiAgICAgICAgICAgIC8vQWRkIGJnY29sb3JcclxuICAgICAgICAgICAgaW5wdXQuY2xhc3NMaXN0LmFkZCgnYmctc3VjY2VzcycpO1xyXG4gICAgICAgICAgICBpbnB1dC5jbGFzc0xpc3QuYWRkKCd0ZXh0LWludmVyc2Utc3VjY2VzcycpO1xyXG5cclxuICAgICAgICAgICAgYnV0dG9uLmlubmVySFRNTCA9ICdDb3BpZWQhJztcclxuXHJcbiAgICAgICAgICAgIHNldFRpbWVvdXQoZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgICAgICBidXR0b24uaW5uZXJIVE1MID0gYnV0dG9uQ2FwdGlvbjtcclxuXHJcbiAgICAgICAgICAgICAgICAvLyBSZW1vdmUgYmdjb2xvclxyXG4gICAgICAgICAgICAgICAgaW5wdXQuY2xhc3NMaXN0LnJlbW92ZSgnYmctc3VjY2VzcycpOyBcclxuICAgICAgICAgICAgICAgIGlucHV0LmNsYXNzTGlzdC5yZW1vdmUoJ3RleHQtaW52ZXJzZS1zdWNjZXNzJyk7IFxyXG4gICAgICAgICAgICB9LCAzMDAwKTsgIC8vIDNzZWNvbmRzXHJcblxyXG4gICAgICAgICAgICBlLmNsZWFyU2VsZWN0aW9uKCk7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG4gICAgLy8gUHVibGljIG1ldGhvZHNcclxuICAgIHJldHVybiB7XHJcbiAgICAgICAgaW5pdDogZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICBoYW5kbGVGb3JtKCk7XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG59KCk7XHJcblxyXG4vLyBPbiBkb2N1bWVudCByZWFkeVxyXG5LVFV0aWwub25ET01Db250ZW50TG9hZGVkKGZ1bmN0aW9uKCkge1xyXG4gICAgS1RNb2RhbFNoYXJlRWFybi5pbml0KCk7XHJcbn0pO1xyXG4iXSwibmFtZXMiOlsiS1RNb2RhbFNoYXJlRWFybiIsImhhbmRsZUZvcm0iLCJidXR0b24iLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJpbnB1dCIsImNsaXBib2FyZCIsIkNsaXBib2FyZEpTIiwib24iLCJlIiwiYnV0dG9uQ2FwdGlvbiIsImlubmVySFRNTCIsImNsYXNzTGlzdCIsImFkZCIsInNldFRpbWVvdXQiLCJyZW1vdmUiLCJjbGVhclNlbGVjdGlvbiIsImluaXQiLCJLVFV0aWwiLCJvbkRPTUNvbnRlbnRMb2FkZWQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/utilities/modals/share-earn.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/utilities/modals/share-earn.js"]();
/******/ 	
/******/ })()
;