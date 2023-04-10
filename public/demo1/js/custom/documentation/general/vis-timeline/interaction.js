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

/***/ "./resources/assets/core/js/custom/documentation/general/vis-timeline/interaction.js":
/*!*******************************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/general/vis-timeline/interaction.js ***!
  \*******************************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTVisTimelineInteraction = function () {\n  // Private functions\n  var exampleInteraction = function exampleInteraction() {\n    // create a dataset with items\n    // we specify the type of the fields `start` and `end` here to be strings\n    // containing an ISO date. The fields will be outputted as ISO dates\n    // automatically getting data from the DataSet via items.get().\n    var items = new vis.DataSet({\n      type: {\n        start: \"ISODate\",\n        end: \"ISODate\"\n      }\n    });\n\n    // add items to the DataSet\n    items.add([{\n      id: 1,\n      content: \"item 1<br>start\",\n      start: \"2021-01-23\"\n    }, {\n      id: 2,\n      content: \"item 2\",\n      start: \"2021-01-18\"\n    }, {\n      id: 3,\n      content: \"item 3\",\n      start: \"2021-01-21\"\n    }, {\n      id: 4,\n      content: \"item 4\",\n      start: \"2021-01-19\",\n      end: \"2021-01-24\"\n    }, {\n      id: 5,\n      content: \"item 5\",\n      start: \"2021-01-28\",\n      type: \"point\"\n    }, {\n      id: 6,\n      content: \"item 6\",\n      start: \"2021-01-26\"\n    }]);\n    var container = document.getElementById(\"kt_docs_vistimeline_interaction\");\n    var options = {\n      start: \"2021-01-10\",\n      end: \"2021-02-10\",\n      editable: true,\n      showCurrentTime: true\n    };\n    var timeline = new vis.Timeline(container, items, options);\n\n    // Handle buttons\n    document.getElementById(\"window1\").onclick = function () {\n      timeline.setWindow(\"2021-01-01\", \"2021-04-01\");\n    };\n    document.getElementById(\"fit\").onclick = function () {\n      timeline.fit();\n    };\n    document.getElementById(\"select\").onclick = function () {\n      timeline.setSelection([5, 6], {\n        focus: true\n      });\n    };\n    document.getElementById(\"focus1\").onclick = function () {\n      timeline.focus(2);\n    };\n    document.getElementById(\"moveTo\").onclick = function () {\n      timeline.moveTo(\"2021-02-01\");\n    };\n  };\n  return {\n    // Public Functions\n    init: function init() {\n      exampleInteraction();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTVisTimelineInteraction.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZ2VuZXJhbC92aXMtdGltZWxpbmUvaW50ZXJhY3Rpb24uanMuanMiLCJtYXBwaW5ncyI6IkFBQWE7O0FBRWI7QUFDQSxJQUFJQSx3QkFBd0IsR0FBRyxZQUFZO0VBQ3ZDO0VBQ0EsSUFBSUMsa0JBQWtCLEdBQUcsU0FBckJBLGtCQUFrQkEsQ0FBQSxFQUFlO0lBQ2pDO0lBQ0E7SUFDQTtJQUNBO0lBQ0EsSUFBSUMsS0FBSyxHQUFHLElBQUlDLEdBQUcsQ0FBQ0MsT0FBTyxDQUFDO01BQ3hCQyxJQUFJLEVBQUU7UUFBRUMsS0FBSyxFQUFFLFNBQVM7UUFBRUMsR0FBRyxFQUFFO01BQVU7SUFDN0MsQ0FBQyxDQUFDOztJQUVGO0lBQ0FMLEtBQUssQ0FBQ00sR0FBRyxDQUFDLENBQ047TUFBRUMsRUFBRSxFQUFFLENBQUM7TUFBRUMsT0FBTyxFQUFFLGlCQUFpQjtNQUFFSixLQUFLLEVBQUU7SUFBYSxDQUFDLEVBQzFEO01BQUVHLEVBQUUsRUFBRSxDQUFDO01BQUVDLE9BQU8sRUFBRSxRQUFRO01BQUVKLEtBQUssRUFBRTtJQUFhLENBQUMsRUFDakQ7TUFBRUcsRUFBRSxFQUFFLENBQUM7TUFBRUMsT0FBTyxFQUFFLFFBQVE7TUFBRUosS0FBSyxFQUFFO0lBQWEsQ0FBQyxFQUNqRDtNQUFFRyxFQUFFLEVBQUUsQ0FBQztNQUFFQyxPQUFPLEVBQUUsUUFBUTtNQUFFSixLQUFLLEVBQUUsWUFBWTtNQUFFQyxHQUFHLEVBQUU7SUFBYSxDQUFDLEVBQ3BFO01BQUVFLEVBQUUsRUFBRSxDQUFDO01BQUVDLE9BQU8sRUFBRSxRQUFRO01BQUVKLEtBQUssRUFBRSxZQUFZO01BQUVELElBQUksRUFBRTtJQUFRLENBQUMsRUFDaEU7TUFBRUksRUFBRSxFQUFFLENBQUM7TUFBRUMsT0FBTyxFQUFFLFFBQVE7TUFBRUosS0FBSyxFQUFFO0lBQWEsQ0FBQyxDQUNwRCxDQUFDO0lBRUYsSUFBSUssU0FBUyxHQUFHQyxRQUFRLENBQUNDLGNBQWMsQ0FBQyxpQ0FBaUMsQ0FBQztJQUMxRSxJQUFJQyxPQUFPLEdBQUc7TUFDVlIsS0FBSyxFQUFFLFlBQVk7TUFDbkJDLEdBQUcsRUFBRSxZQUFZO01BQ2pCUSxRQUFRLEVBQUUsSUFBSTtNQUNkQyxlQUFlLEVBQUU7SUFDckIsQ0FBQztJQUVELElBQUlDLFFBQVEsR0FBRyxJQUFJZCxHQUFHLENBQUNlLFFBQVEsQ0FBQ1AsU0FBUyxFQUFFVCxLQUFLLEVBQUVZLE9BQU8sQ0FBQzs7SUFFMUQ7SUFDQUYsUUFBUSxDQUFDQyxjQUFjLENBQUMsU0FBUyxDQUFDLENBQUNNLE9BQU8sR0FBRyxZQUFZO01BQ3JERixRQUFRLENBQUNHLFNBQVMsQ0FBQyxZQUFZLEVBQUUsWUFBWSxDQUFDO0lBQ2xELENBQUM7SUFDRFIsUUFBUSxDQUFDQyxjQUFjLENBQUMsS0FBSyxDQUFDLENBQUNNLE9BQU8sR0FBRyxZQUFZO01BQ2pERixRQUFRLENBQUNJLEdBQUcsRUFBRTtJQUNsQixDQUFDO0lBQ0RULFFBQVEsQ0FBQ0MsY0FBYyxDQUFDLFFBQVEsQ0FBQyxDQUFDTSxPQUFPLEdBQUcsWUFBWTtNQUNwREYsUUFBUSxDQUFDSyxZQUFZLENBQUMsQ0FBQyxDQUFDLEVBQUUsQ0FBQyxDQUFDLEVBQUU7UUFDMUJDLEtBQUssRUFBRTtNQUNYLENBQUMsQ0FBQztJQUNOLENBQUM7SUFDRFgsUUFBUSxDQUFDQyxjQUFjLENBQUMsUUFBUSxDQUFDLENBQUNNLE9BQU8sR0FBRyxZQUFZO01BQ3BERixRQUFRLENBQUNNLEtBQUssQ0FBQyxDQUFDLENBQUM7SUFDckIsQ0FBQztJQUNEWCxRQUFRLENBQUNDLGNBQWMsQ0FBQyxRQUFRLENBQUMsQ0FBQ00sT0FBTyxHQUFHLFlBQVk7TUFDcERGLFFBQVEsQ0FBQ08sTUFBTSxDQUFDLFlBQVksQ0FBQztJQUNqQyxDQUFDO0VBQ0wsQ0FBQztFQUVELE9BQU87SUFDSDtJQUNBQyxJQUFJLEVBQUUsU0FBQUEsS0FBQSxFQUFZO01BQ2R4QixrQkFBa0IsRUFBRTtJQUN4QjtFQUNKLENBQUM7QUFDTCxDQUFDLEVBQUU7O0FBRUg7QUFDQXlCLE1BQU0sQ0FBQ0Msa0JBQWtCLENBQUMsWUFBWTtFQUNsQzNCLHdCQUF3QixDQUFDeUIsSUFBSSxFQUFFO0FBQ25DLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9hc3NldHMvY29yZS9qcy9jdXN0b20vZG9jdW1lbnRhdGlvbi9nZW5lcmFsL3Zpcy10aW1lbGluZS9pbnRlcmFjdGlvbi5qcz8zZTYwIl0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xyXG5cclxuLy8gQ2xhc3MgZGVmaW5pdGlvblxyXG52YXIgS1RWaXNUaW1lbGluZUludGVyYWN0aW9uID0gZnVuY3Rpb24gKCkge1xyXG4gICAgLy8gUHJpdmF0ZSBmdW5jdGlvbnNcclxuICAgIHZhciBleGFtcGxlSW50ZXJhY3Rpb24gPSBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgLy8gY3JlYXRlIGEgZGF0YXNldCB3aXRoIGl0ZW1zXHJcbiAgICAgICAgLy8gd2Ugc3BlY2lmeSB0aGUgdHlwZSBvZiB0aGUgZmllbGRzIGBzdGFydGAgYW5kIGBlbmRgIGhlcmUgdG8gYmUgc3RyaW5nc1xyXG4gICAgICAgIC8vIGNvbnRhaW5pbmcgYW4gSVNPIGRhdGUuIFRoZSBmaWVsZHMgd2lsbCBiZSBvdXRwdXR0ZWQgYXMgSVNPIGRhdGVzXHJcbiAgICAgICAgLy8gYXV0b21hdGljYWxseSBnZXR0aW5nIGRhdGEgZnJvbSB0aGUgRGF0YVNldCB2aWEgaXRlbXMuZ2V0KCkuXHJcbiAgICAgICAgdmFyIGl0ZW1zID0gbmV3IHZpcy5EYXRhU2V0KHtcclxuICAgICAgICAgICAgdHlwZTogeyBzdGFydDogXCJJU09EYXRlXCIsIGVuZDogXCJJU09EYXRlXCIgfSxcclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgLy8gYWRkIGl0ZW1zIHRvIHRoZSBEYXRhU2V0XHJcbiAgICAgICAgaXRlbXMuYWRkKFtcclxuICAgICAgICAgICAgeyBpZDogMSwgY29udGVudDogXCJpdGVtIDE8YnI+c3RhcnRcIiwgc3RhcnQ6IFwiMjAyMS0wMS0yM1wiIH0sXHJcbiAgICAgICAgICAgIHsgaWQ6IDIsIGNvbnRlbnQ6IFwiaXRlbSAyXCIsIHN0YXJ0OiBcIjIwMjEtMDEtMThcIiB9LFxyXG4gICAgICAgICAgICB7IGlkOiAzLCBjb250ZW50OiBcIml0ZW0gM1wiLCBzdGFydDogXCIyMDIxLTAxLTIxXCIgfSxcclxuICAgICAgICAgICAgeyBpZDogNCwgY29udGVudDogXCJpdGVtIDRcIiwgc3RhcnQ6IFwiMjAyMS0wMS0xOVwiLCBlbmQ6IFwiMjAyMS0wMS0yNFwiIH0sXHJcbiAgICAgICAgICAgIHsgaWQ6IDUsIGNvbnRlbnQ6IFwiaXRlbSA1XCIsIHN0YXJ0OiBcIjIwMjEtMDEtMjhcIiwgdHlwZTogXCJwb2ludFwiIH0sXHJcbiAgICAgICAgICAgIHsgaWQ6IDYsIGNvbnRlbnQ6IFwiaXRlbSA2XCIsIHN0YXJ0OiBcIjIwMjEtMDEtMjZcIiB9LFxyXG4gICAgICAgIF0pO1xyXG5cclxuICAgICAgICB2YXIgY29udGFpbmVyID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJrdF9kb2NzX3Zpc3RpbWVsaW5lX2ludGVyYWN0aW9uXCIpO1xyXG4gICAgICAgIHZhciBvcHRpb25zID0ge1xyXG4gICAgICAgICAgICBzdGFydDogXCIyMDIxLTAxLTEwXCIsXHJcbiAgICAgICAgICAgIGVuZDogXCIyMDIxLTAyLTEwXCIsXHJcbiAgICAgICAgICAgIGVkaXRhYmxlOiB0cnVlLFxyXG4gICAgICAgICAgICBzaG93Q3VycmVudFRpbWU6IHRydWUsXHJcbiAgICAgICAgfTtcclxuXHJcbiAgICAgICAgdmFyIHRpbWVsaW5lID0gbmV3IHZpcy5UaW1lbGluZShjb250YWluZXIsIGl0ZW1zLCBvcHRpb25zKTtcclxuXHJcbiAgICAgICAgLy8gSGFuZGxlIGJ1dHRvbnNcclxuICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIndpbmRvdzFcIikub25jbGljayA9IGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAgICAgdGltZWxpbmUuc2V0V2luZG93KFwiMjAyMS0wMS0wMVwiLCBcIjIwMjEtMDQtMDFcIik7XHJcbiAgICAgICAgfTtcclxuICAgICAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImZpdFwiKS5vbmNsaWNrID0gZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICB0aW1lbGluZS5maXQoKTtcclxuICAgICAgICB9O1xyXG4gICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwic2VsZWN0XCIpLm9uY2xpY2sgPSBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgIHRpbWVsaW5lLnNldFNlbGVjdGlvbihbNSwgNl0sIHtcclxuICAgICAgICAgICAgICAgIGZvY3VzOiB0cnVlLFxyXG4gICAgICAgICAgICB9KTtcclxuICAgICAgICB9O1xyXG4gICAgICAgIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiZm9jdXMxXCIpLm9uY2xpY2sgPSBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgIHRpbWVsaW5lLmZvY3VzKDIpO1xyXG4gICAgICAgIH07XHJcbiAgICAgICAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJtb3ZlVG9cIikub25jbGljayA9IGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAgICAgdGltZWxpbmUubW92ZVRvKFwiMjAyMS0wMi0wMVwiKTtcclxuICAgICAgICB9O1xyXG4gICAgfVxyXG5cclxuICAgIHJldHVybiB7XHJcbiAgICAgICAgLy8gUHVibGljIEZ1bmN0aW9uc1xyXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAgICAgZXhhbXBsZUludGVyYWN0aW9uKCk7XHJcbiAgICAgICAgfVxyXG4gICAgfTtcclxufSgpO1xyXG5cclxuLy8gT24gZG9jdW1lbnQgcmVhZHlcclxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbiAoKSB7XHJcbiAgICBLVFZpc1RpbWVsaW5lSW50ZXJhY3Rpb24uaW5pdCgpO1xyXG59KTtcclxuIl0sIm5hbWVzIjpbIktUVmlzVGltZWxpbmVJbnRlcmFjdGlvbiIsImV4YW1wbGVJbnRlcmFjdGlvbiIsIml0ZW1zIiwidmlzIiwiRGF0YVNldCIsInR5cGUiLCJzdGFydCIsImVuZCIsImFkZCIsImlkIiwiY29udGVudCIsImNvbnRhaW5lciIsImRvY3VtZW50IiwiZ2V0RWxlbWVudEJ5SWQiLCJvcHRpb25zIiwiZWRpdGFibGUiLCJzaG93Q3VycmVudFRpbWUiLCJ0aW1lbGluZSIsIlRpbWVsaW5lIiwib25jbGljayIsInNldFdpbmRvdyIsImZpdCIsInNldFNlbGVjdGlvbiIsImZvY3VzIiwibW92ZVRvIiwiaW5pdCIsIktUVXRpbCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/general/vis-timeline/interaction.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/general/vis-timeline/interaction.js"]();
/******/ 	
/******/ })()
;