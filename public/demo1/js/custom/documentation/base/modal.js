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

/***/ "./resources/assets/core/js/custom/documentation/base/modal.js":
/*!*********************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/base/modal.js ***!
  \*********************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTDocsModal = function () {\n  // Shared variables\n  var element;\n\n  // Private functions\n  var initDraggableModal = function initDraggableModal() {\n    // Make the DIV element draggable:\n    dragElement(element);\n    function dragElement(elmnt) {\n      var pos1 = 0,\n        pos2 = 0,\n        pos3 = 0,\n        pos4 = 0;\n      if (elmnt.querySelector('.modal-content')) {\n        // if present, the modal container is where you move the DIV from:\n        elmnt.querySelector('.modal-content').onmousedown = dragMouseDown;\n      } else {\n        // otherwise, move the DIV from anywhere inside the DIV:\n        elmnt.onmousedown = dragMouseDown;\n      }\n      function dragMouseDown(e) {\n        e = e || window.event;\n        e.preventDefault();\n        // get the mouse cursor position at startup:\n        pos3 = e.clientX;\n        pos4 = e.clientY;\n        document.onmouseup = closeDragElement;\n        // call a function whenever the cursor moves:\n        document.onmousemove = elementDrag;\n      }\n      function elementDrag(e) {\n        e = e || window.event;\n        e.preventDefault();\n        // calculate the new cursor position:\n        pos1 = pos3 - e.clientX;\n        pos2 = pos4 - e.clientY;\n        pos3 = e.clientX;\n        pos4 = e.clientY;\n        // set the element's new position:\n        elmnt.style.top = elmnt.offsetTop - pos2 + \"px\";\n        elmnt.style.left = elmnt.offsetLeft - pos1 + \"px\";\n      }\n      function closeDragElement() {\n        // stop moving when mouse button is released:\n        document.onmouseup = null;\n        document.onmousemove = null;\n      }\n    }\n  };\n\n  // Public methods\n  return {\n    init: function init() {\n      // Elements\n      element = document.querySelector('#kt_modal_3');\n      if (!element) {\n        return;\n      }\n      initDraggableModal();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTDocsModal.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vYmFzZS9tb2RhbC5qcy5qcyIsIm1hcHBpbmdzIjoiQUFBYTs7QUFFYjtBQUNBLElBQUlBLFdBQVcsR0FBRyxZQUFZO0VBQzFCO0VBQ0EsSUFBSUMsT0FBTzs7RUFFWDtFQUNBLElBQU1DLGtCQUFrQixHQUFHLFNBQXJCQSxrQkFBa0JBLENBQUEsRUFBUztJQUM3QjtJQUNBQyxXQUFXLENBQUNGLE9BQU8sQ0FBQztJQUVwQixTQUFTRSxXQUFXQSxDQUFDQyxLQUFLLEVBQUU7TUFDeEIsSUFBSUMsSUFBSSxHQUFHLENBQUM7UUFBRUMsSUFBSSxHQUFHLENBQUM7UUFBRUMsSUFBSSxHQUFHLENBQUM7UUFBRUMsSUFBSSxHQUFHLENBQUM7TUFDMUMsSUFBSUosS0FBSyxDQUFDSyxhQUFhLENBQUMsZ0JBQWdCLENBQUMsRUFBRTtRQUN2QztRQUNBTCxLQUFLLENBQUNLLGFBQWEsQ0FBQyxnQkFBZ0IsQ0FBQyxDQUFDQyxXQUFXLEdBQUdDLGFBQWE7TUFDckUsQ0FBQyxNQUFNO1FBQ0g7UUFDQVAsS0FBSyxDQUFDTSxXQUFXLEdBQUdDLGFBQWE7TUFDckM7TUFFQSxTQUFTQSxhQUFhQSxDQUFDQyxDQUFDLEVBQUU7UUFDdEJBLENBQUMsR0FBR0EsQ0FBQyxJQUFJQyxNQUFNLENBQUNDLEtBQUs7UUFDckJGLENBQUMsQ0FBQ0csY0FBYyxFQUFFO1FBQ2xCO1FBQ0FSLElBQUksR0FBR0ssQ0FBQyxDQUFDSSxPQUFPO1FBQ2hCUixJQUFJLEdBQUdJLENBQUMsQ0FBQ0ssT0FBTztRQUNoQkMsUUFBUSxDQUFDQyxTQUFTLEdBQUdDLGdCQUFnQjtRQUNyQztRQUNBRixRQUFRLENBQUNHLFdBQVcsR0FBR0MsV0FBVztNQUN0QztNQUVBLFNBQVNBLFdBQVdBLENBQUNWLENBQUMsRUFBRTtRQUNwQkEsQ0FBQyxHQUFHQSxDQUFDLElBQUlDLE1BQU0sQ0FBQ0MsS0FBSztRQUNyQkYsQ0FBQyxDQUFDRyxjQUFjLEVBQUU7UUFDbEI7UUFDQVYsSUFBSSxHQUFHRSxJQUFJLEdBQUdLLENBQUMsQ0FBQ0ksT0FBTztRQUN2QlYsSUFBSSxHQUFHRSxJQUFJLEdBQUdJLENBQUMsQ0FBQ0ssT0FBTztRQUN2QlYsSUFBSSxHQUFHSyxDQUFDLENBQUNJLE9BQU87UUFDaEJSLElBQUksR0FBR0ksQ0FBQyxDQUFDSyxPQUFPO1FBQ2hCO1FBQ0FiLEtBQUssQ0FBQ21CLEtBQUssQ0FBQ0MsR0FBRyxHQUFJcEIsS0FBSyxDQUFDcUIsU0FBUyxHQUFHbkIsSUFBSSxHQUFJLElBQUk7UUFDakRGLEtBQUssQ0FBQ21CLEtBQUssQ0FBQ0csSUFBSSxHQUFJdEIsS0FBSyxDQUFDdUIsVUFBVSxHQUFHdEIsSUFBSSxHQUFJLElBQUk7TUFDdkQ7TUFFQSxTQUFTZSxnQkFBZ0JBLENBQUEsRUFBRztRQUN4QjtRQUNBRixRQUFRLENBQUNDLFNBQVMsR0FBRyxJQUFJO1FBQ3pCRCxRQUFRLENBQUNHLFdBQVcsR0FBRyxJQUFJO01BQy9CO0lBQ0o7RUFDSixDQUFDOztFQUVEO0VBQ0EsT0FBTztJQUNITyxJQUFJLEVBQUUsU0FBQUEsS0FBQSxFQUFZO01BQ2Q7TUFDQTNCLE9BQU8sR0FBR2lCLFFBQVEsQ0FBQ1QsYUFBYSxDQUFDLGFBQWEsQ0FBQztNQUUvQyxJQUFJLENBQUNSLE9BQU8sRUFBRTtRQUNWO01BQ0o7TUFFQUMsa0JBQWtCLEVBQUU7SUFDeEI7RUFDSixDQUFDO0FBQ0wsQ0FBQyxFQUFFOztBQUVIO0FBQ0EyQixNQUFNLENBQUNDLGtCQUFrQixDQUFDLFlBQVk7RUFDbEM5QixXQUFXLENBQUM0QixJQUFJLEVBQUU7QUFDdEIsQ0FBQyxDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2Jhc2UvbW9kYWwuanM/OWUzNiJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcclxuXHJcbi8vIENsYXNzIGRlZmluaXRpb25cclxudmFyIEtURG9jc01vZGFsID0gZnVuY3Rpb24gKCkge1xyXG4gICAgLy8gU2hhcmVkIHZhcmlhYmxlc1xyXG4gICAgdmFyIGVsZW1lbnQ7XHJcblxyXG4gICAgLy8gUHJpdmF0ZSBmdW5jdGlvbnNcclxuICAgIGNvbnN0IGluaXREcmFnZ2FibGVNb2RhbCA9ICgpID0+IHtcclxuICAgICAgICAvLyBNYWtlIHRoZSBESVYgZWxlbWVudCBkcmFnZ2FibGU6XHJcbiAgICAgICAgZHJhZ0VsZW1lbnQoZWxlbWVudCk7XHJcblxyXG4gICAgICAgIGZ1bmN0aW9uIGRyYWdFbGVtZW50KGVsbW50KSB7XHJcbiAgICAgICAgICAgIHZhciBwb3MxID0gMCwgcG9zMiA9IDAsIHBvczMgPSAwLCBwb3M0ID0gMDtcclxuICAgICAgICAgICAgaWYgKGVsbW50LnF1ZXJ5U2VsZWN0b3IoJy5tb2RhbC1jb250ZW50JykpIHtcclxuICAgICAgICAgICAgICAgIC8vIGlmIHByZXNlbnQsIHRoZSBtb2RhbCBjb250YWluZXIgaXMgd2hlcmUgeW91IG1vdmUgdGhlIERJViBmcm9tOlxyXG4gICAgICAgICAgICAgICAgZWxtbnQucXVlcnlTZWxlY3RvcignLm1vZGFsLWNvbnRlbnQnKS5vbm1vdXNlZG93biA9IGRyYWdNb3VzZURvd247XHJcbiAgICAgICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgICAgICAvLyBvdGhlcndpc2UsIG1vdmUgdGhlIERJViBmcm9tIGFueXdoZXJlIGluc2lkZSB0aGUgRElWOlxyXG4gICAgICAgICAgICAgICAgZWxtbnQub25tb3VzZWRvd24gPSBkcmFnTW91c2VEb3duO1xyXG4gICAgICAgICAgICB9XHJcblxyXG4gICAgICAgICAgICBmdW5jdGlvbiBkcmFnTW91c2VEb3duKGUpIHtcclxuICAgICAgICAgICAgICAgIGUgPSBlIHx8IHdpbmRvdy5ldmVudDtcclxuICAgICAgICAgICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuICAgICAgICAgICAgICAgIC8vIGdldCB0aGUgbW91c2UgY3Vyc29yIHBvc2l0aW9uIGF0IHN0YXJ0dXA6XHJcbiAgICAgICAgICAgICAgICBwb3MzID0gZS5jbGllbnRYO1xyXG4gICAgICAgICAgICAgICAgcG9zNCA9IGUuY2xpZW50WTtcclxuICAgICAgICAgICAgICAgIGRvY3VtZW50Lm9ubW91c2V1cCA9IGNsb3NlRHJhZ0VsZW1lbnQ7XHJcbiAgICAgICAgICAgICAgICAvLyBjYWxsIGEgZnVuY3Rpb24gd2hlbmV2ZXIgdGhlIGN1cnNvciBtb3ZlczpcclxuICAgICAgICAgICAgICAgIGRvY3VtZW50Lm9ubW91c2Vtb3ZlID0gZWxlbWVudERyYWc7XHJcbiAgICAgICAgICAgIH1cclxuXHJcbiAgICAgICAgICAgIGZ1bmN0aW9uIGVsZW1lbnREcmFnKGUpIHtcclxuICAgICAgICAgICAgICAgIGUgPSBlIHx8IHdpbmRvdy5ldmVudDtcclxuICAgICAgICAgICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuICAgICAgICAgICAgICAgIC8vIGNhbGN1bGF0ZSB0aGUgbmV3IGN1cnNvciBwb3NpdGlvbjpcclxuICAgICAgICAgICAgICAgIHBvczEgPSBwb3MzIC0gZS5jbGllbnRYO1xyXG4gICAgICAgICAgICAgICAgcG9zMiA9IHBvczQgLSBlLmNsaWVudFk7XHJcbiAgICAgICAgICAgICAgICBwb3MzID0gZS5jbGllbnRYO1xyXG4gICAgICAgICAgICAgICAgcG9zNCA9IGUuY2xpZW50WTtcclxuICAgICAgICAgICAgICAgIC8vIHNldCB0aGUgZWxlbWVudCdzIG5ldyBwb3NpdGlvbjpcclxuICAgICAgICAgICAgICAgIGVsbW50LnN0eWxlLnRvcCA9IChlbG1udC5vZmZzZXRUb3AgLSBwb3MyKSArIFwicHhcIjtcclxuICAgICAgICAgICAgICAgIGVsbW50LnN0eWxlLmxlZnQgPSAoZWxtbnQub2Zmc2V0TGVmdCAtIHBvczEpICsgXCJweFwiO1xyXG4gICAgICAgICAgICB9XHJcblxyXG4gICAgICAgICAgICBmdW5jdGlvbiBjbG9zZURyYWdFbGVtZW50KCkge1xyXG4gICAgICAgICAgICAgICAgLy8gc3RvcCBtb3Zpbmcgd2hlbiBtb3VzZSBidXR0b24gaXMgcmVsZWFzZWQ6XHJcbiAgICAgICAgICAgICAgICBkb2N1bWVudC5vbm1vdXNldXAgPSBudWxsO1xyXG4gICAgICAgICAgICAgICAgZG9jdW1lbnQub25tb3VzZW1vdmUgPSBudWxsO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG5cclxuICAgIC8vIFB1YmxpYyBtZXRob2RzXHJcbiAgICByZXR1cm4ge1xyXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAgICAgLy8gRWxlbWVudHNcclxuICAgICAgICAgICAgZWxlbWVudCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNrdF9tb2RhbF8zJyk7XHJcblxyXG4gICAgICAgICAgICBpZiAoIWVsZW1lbnQpIHtcclxuICAgICAgICAgICAgICAgIHJldHVybjtcclxuICAgICAgICAgICAgfVxyXG5cclxuICAgICAgICAgICAgaW5pdERyYWdnYWJsZU1vZGFsKCk7XHJcbiAgICAgICAgfVxyXG4gICAgfTtcclxufSgpO1xyXG5cclxuLy8gT24gZG9jdW1lbnQgcmVhZHlcclxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbiAoKSB7XHJcbiAgICBLVERvY3NNb2RhbC5pbml0KCk7XHJcbn0pO1xyXG4iXSwibmFtZXMiOlsiS1REb2NzTW9kYWwiLCJlbGVtZW50IiwiaW5pdERyYWdnYWJsZU1vZGFsIiwiZHJhZ0VsZW1lbnQiLCJlbG1udCIsInBvczEiLCJwb3MyIiwicG9zMyIsInBvczQiLCJxdWVyeVNlbGVjdG9yIiwib25tb3VzZWRvd24iLCJkcmFnTW91c2VEb3duIiwiZSIsIndpbmRvdyIsImV2ZW50IiwicHJldmVudERlZmF1bHQiLCJjbGllbnRYIiwiY2xpZW50WSIsImRvY3VtZW50Iiwib25tb3VzZXVwIiwiY2xvc2VEcmFnRWxlbWVudCIsIm9ubW91c2Vtb3ZlIiwiZWxlbWVudERyYWciLCJzdHlsZSIsInRvcCIsIm9mZnNldFRvcCIsImxlZnQiLCJvZmZzZXRMZWZ0IiwiaW5pdCIsIktUVXRpbCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/base/modal.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/base/modal.js"]();
/******/ 	
/******/ })()
;