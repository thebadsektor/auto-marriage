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

/***/ "./resources/assets/core/js/custom/documentation/forms/daterangepicker.js":
/*!********************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/forms/daterangepicker.js ***!
  \********************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTFormsDaterangepickerDemos = function () {\n  // Private functions\n  var example1 = function example1(element) {\n    $(\"#kt_daterangepicker_1\").daterangepicker();\n  };\n  var example2 = function example2(element) {\n    $(\"#kt_daterangepicker_2\").daterangepicker({\n      timePicker: true,\n      startDate: moment().startOf(\"hour\"),\n      endDate: moment().startOf(\"hour\").add(32, \"hour\"),\n      locale: {\n        format: \"M/DD hh:mm A\"\n      }\n    });\n  };\n  var example3 = function example3(element) {\n    $(\"#kt_daterangepicker_3\").daterangepicker({\n      singleDatePicker: true,\n      showDropdowns: true,\n      minYear: 1901,\n      maxYear: parseInt(moment().format(\"YYYY\"), 10)\n    }, function (start, end, label) {\n      var years = moment().diff(start, \"years\");\n      alert(\"You are \" + years + \" years old!\");\n    });\n  };\n  var example4 = function example4(element) {\n    var start = moment().subtract(29, \"days\");\n    var end = moment();\n    function cb(start, end) {\n      $(\"#kt_daterangepicker_4\").html(start.format(\"MMMM D, YYYY\") + \" - \" + end.format(\"MMMM D, YYYY\"));\n    }\n    $(\"#kt_daterangepicker_4\").daterangepicker({\n      startDate: start,\n      endDate: end,\n      ranges: {\n        \"Today\": [moment(), moment()],\n        \"Yesterday\": [moment().subtract(1, \"days\"), moment().subtract(1, \"days\")],\n        \"Last 7 Days\": [moment().subtract(6, \"days\"), moment()],\n        \"Last 30 Days\": [moment().subtract(29, \"days\"), moment()],\n        \"This Month\": [moment().startOf(\"month\"), moment().endOf(\"month\")],\n        \"Last Month\": [moment().subtract(1, \"month\").startOf(\"month\"), moment().subtract(1, \"month\").endOf(\"month\")]\n      }\n    }, cb);\n    cb(start, end);\n  };\n  var example5 = function example5(element) {\n    $(\"#kt_daterangepicker_5\").daterangepicker();\n  };\n  return {\n    // Public Functions\n    init: function init(element) {\n      example1();\n      example2();\n      example3();\n      example4();\n      example5();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTFormsDaterangepickerDemos.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZm9ybXMvZGF0ZXJhbmdlcGlja2VyLmpzLmpzIiwibWFwcGluZ3MiOiJBQUFhOztBQUViO0FBQ0EsSUFBSUEsMkJBQTJCLEdBQUcsWUFBVztFQUN6QztFQUNBLElBQUlDLFFBQVEsR0FBRyxTQUFYQSxRQUFRQSxDQUFZQyxPQUFPLEVBQUU7SUFDN0JDLENBQUMsQ0FBQyx1QkFBdUIsQ0FBQyxDQUFDQyxlQUFlLEVBQUU7RUFDaEQsQ0FBQztFQUVELElBQUlDLFFBQVEsR0FBRyxTQUFYQSxRQUFRQSxDQUFZSCxPQUFPLEVBQUU7SUFDN0JDLENBQUMsQ0FBQyx1QkFBdUIsQ0FBQyxDQUFDQyxlQUFlLENBQUM7TUFDdkNFLFVBQVUsRUFBRSxJQUFJO01BQ2hCQyxTQUFTLEVBQUVDLE1BQU0sRUFBRSxDQUFDQyxPQUFPLENBQUMsTUFBTSxDQUFDO01BQ25DQyxPQUFPLEVBQUVGLE1BQU0sRUFBRSxDQUFDQyxPQUFPLENBQUMsTUFBTSxDQUFDLENBQUNFLEdBQUcsQ0FBQyxFQUFFLEVBQUUsTUFBTSxDQUFDO01BQ2pEQyxNQUFNLEVBQUU7UUFDSkMsTUFBTSxFQUFFO01BQ1o7SUFDSixDQUFDLENBQUM7RUFDTixDQUFDO0VBRUQsSUFBSUMsUUFBUSxHQUFHLFNBQVhBLFFBQVFBLENBQVlaLE9BQU8sRUFBRTtJQUM3QkMsQ0FBQyxDQUFDLHVCQUF1QixDQUFDLENBQUNDLGVBQWUsQ0FBQztNQUNuQ1csZ0JBQWdCLEVBQUUsSUFBSTtNQUN0QkMsYUFBYSxFQUFFLElBQUk7TUFDbkJDLE9BQU8sRUFBRSxJQUFJO01BQ2JDLE9BQU8sRUFBRUMsUUFBUSxDQUFDWCxNQUFNLEVBQUUsQ0FBQ0ssTUFBTSxDQUFDLE1BQU0sQ0FBQyxFQUFDLEVBQUU7SUFDaEQsQ0FBQyxFQUFFLFVBQVNPLEtBQUssRUFBRUMsR0FBRyxFQUFFQyxLQUFLLEVBQUU7TUFDM0IsSUFBSUMsS0FBSyxHQUFHZixNQUFNLEVBQUUsQ0FBQ2dCLElBQUksQ0FBQ0osS0FBSyxFQUFFLE9BQU8sQ0FBQztNQUN6Q0ssS0FBSyxDQUFDLFVBQVUsR0FBR0YsS0FBSyxHQUFHLGFBQWEsQ0FBQztJQUM3QyxDQUFDLENBQ0o7RUFDTCxDQUFDO0VBRUQsSUFBSUcsUUFBUSxHQUFHLFNBQVhBLFFBQVFBLENBQVl4QixPQUFPLEVBQUU7SUFDN0IsSUFBSWtCLEtBQUssR0FBR1osTUFBTSxFQUFFLENBQUNtQixRQUFRLENBQUMsRUFBRSxFQUFFLE1BQU0sQ0FBQztJQUN6QyxJQUFJTixHQUFHLEdBQUdiLE1BQU0sRUFBRTtJQUVsQixTQUFTb0IsRUFBRUEsQ0FBQ1IsS0FBSyxFQUFFQyxHQUFHLEVBQUU7TUFDcEJsQixDQUFDLENBQUMsdUJBQXVCLENBQUMsQ0FBQzBCLElBQUksQ0FBQ1QsS0FBSyxDQUFDUCxNQUFNLENBQUMsY0FBYyxDQUFDLEdBQUcsS0FBSyxHQUFHUSxHQUFHLENBQUNSLE1BQU0sQ0FBQyxjQUFjLENBQUMsQ0FBQztJQUN0RztJQUVBVixDQUFDLENBQUMsdUJBQXVCLENBQUMsQ0FBQ0MsZUFBZSxDQUFDO01BQ3ZDRyxTQUFTLEVBQUVhLEtBQUs7TUFDaEJWLE9BQU8sRUFBRVcsR0FBRztNQUNaUyxNQUFNLEVBQUU7UUFDUixPQUFPLEVBQUUsQ0FBQ3RCLE1BQU0sRUFBRSxFQUFFQSxNQUFNLEVBQUUsQ0FBQztRQUM3QixXQUFXLEVBQUUsQ0FBQ0EsTUFBTSxFQUFFLENBQUNtQixRQUFRLENBQUMsQ0FBQyxFQUFFLE1BQU0sQ0FBQyxFQUFFbkIsTUFBTSxFQUFFLENBQUNtQixRQUFRLENBQUMsQ0FBQyxFQUFFLE1BQU0sQ0FBQyxDQUFDO1FBQ3pFLGFBQWEsRUFBRSxDQUFDbkIsTUFBTSxFQUFFLENBQUNtQixRQUFRLENBQUMsQ0FBQyxFQUFFLE1BQU0sQ0FBQyxFQUFFbkIsTUFBTSxFQUFFLENBQUM7UUFDdkQsY0FBYyxFQUFFLENBQUNBLE1BQU0sRUFBRSxDQUFDbUIsUUFBUSxDQUFDLEVBQUUsRUFBRSxNQUFNLENBQUMsRUFBRW5CLE1BQU0sRUFBRSxDQUFDO1FBQ3pELFlBQVksRUFBRSxDQUFDQSxNQUFNLEVBQUUsQ0FBQ0MsT0FBTyxDQUFDLE9BQU8sQ0FBQyxFQUFFRCxNQUFNLEVBQUUsQ0FBQ3VCLEtBQUssQ0FBQyxPQUFPLENBQUMsQ0FBQztRQUNsRSxZQUFZLEVBQUUsQ0FBQ3ZCLE1BQU0sRUFBRSxDQUFDbUIsUUFBUSxDQUFDLENBQUMsRUFBRSxPQUFPLENBQUMsQ0FBQ2xCLE9BQU8sQ0FBQyxPQUFPLENBQUMsRUFBRUQsTUFBTSxFQUFFLENBQUNtQixRQUFRLENBQUMsQ0FBQyxFQUFFLE9BQU8sQ0FBQyxDQUFDSSxLQUFLLENBQUMsT0FBTyxDQUFDO01BQzNHO0lBQ0osQ0FBQyxFQUFFSCxFQUFFLENBQUM7SUFFTkEsRUFBRSxDQUFDUixLQUFLLEVBQUVDLEdBQUcsQ0FBQztFQUNsQixDQUFDO0VBRUQsSUFBSVcsUUFBUSxHQUFHLFNBQVhBLFFBQVFBLENBQVk5QixPQUFPLEVBQUU7SUFDN0JDLENBQUMsQ0FBQyx1QkFBdUIsQ0FBQyxDQUFDQyxlQUFlLEVBQUU7RUFDaEQsQ0FBQztFQUVELE9BQU87SUFDSDtJQUNBNkIsSUFBSSxFQUFFLFNBQUFBLEtBQVMvQixPQUFPLEVBQUU7TUFDcEJELFFBQVEsRUFBRTtNQUNWSSxRQUFRLEVBQUU7TUFDVlMsUUFBUSxFQUFFO01BQ1ZZLFFBQVEsRUFBRTtNQUNWTSxRQUFRLEVBQUU7SUFDZDtFQUNKLENBQUM7QUFDTCxDQUFDLEVBQUU7O0FBRUg7QUFDQUUsTUFBTSxDQUFDQyxrQkFBa0IsQ0FBQyxZQUFXO0VBQ2pDbkMsMkJBQTJCLENBQUNpQyxJQUFJLEVBQUU7QUFDdEMsQ0FBQyxDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2Zvcm1zL2RhdGVyYW5nZXBpY2tlci5qcz81MjQzIl0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xyXG5cclxuLy8gQ2xhc3MgZGVmaW5pdGlvblxyXG52YXIgS1RGb3Jtc0RhdGVyYW5nZXBpY2tlckRlbW9zID0gZnVuY3Rpb24oKSB7XHJcbiAgICAvLyBQcml2YXRlIGZ1bmN0aW9uc1xyXG4gICAgdmFyIGV4YW1wbGUxID0gZnVuY3Rpb24oZWxlbWVudCkge1xyXG4gICAgICAgICQoXCIja3RfZGF0ZXJhbmdlcGlja2VyXzFcIikuZGF0ZXJhbmdlcGlja2VyKCk7XHJcbiAgICB9XHJcblxyXG4gICAgdmFyIGV4YW1wbGUyID0gZnVuY3Rpb24oZWxlbWVudCkge1xyXG4gICAgICAgICQoXCIja3RfZGF0ZXJhbmdlcGlja2VyXzJcIikuZGF0ZXJhbmdlcGlja2VyKHtcclxuICAgICAgICAgICAgdGltZVBpY2tlcjogdHJ1ZSxcclxuICAgICAgICAgICAgc3RhcnREYXRlOiBtb21lbnQoKS5zdGFydE9mKFwiaG91clwiKSxcclxuICAgICAgICAgICAgZW5kRGF0ZTogbW9tZW50KCkuc3RhcnRPZihcImhvdXJcIikuYWRkKDMyLCBcImhvdXJcIiksXHJcbiAgICAgICAgICAgIGxvY2FsZToge1xyXG4gICAgICAgICAgICAgICAgZm9ybWF0OiBcIk0vREQgaGg6bW0gQVwiXHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICB2YXIgZXhhbXBsZTMgPSBmdW5jdGlvbihlbGVtZW50KSB7XHJcbiAgICAgICAgJChcIiNrdF9kYXRlcmFuZ2VwaWNrZXJfM1wiKS5kYXRlcmFuZ2VwaWNrZXIoe1xyXG4gICAgICAgICAgICAgICAgc2luZ2xlRGF0ZVBpY2tlcjogdHJ1ZSxcclxuICAgICAgICAgICAgICAgIHNob3dEcm9wZG93bnM6IHRydWUsXHJcbiAgICAgICAgICAgICAgICBtaW5ZZWFyOiAxOTAxLFxyXG4gICAgICAgICAgICAgICAgbWF4WWVhcjogcGFyc2VJbnQobW9tZW50KCkuZm9ybWF0KFwiWVlZWVwiKSwxMClcclxuICAgICAgICAgICAgfSwgZnVuY3Rpb24oc3RhcnQsIGVuZCwgbGFiZWwpIHtcclxuICAgICAgICAgICAgICAgIHZhciB5ZWFycyA9IG1vbWVudCgpLmRpZmYoc3RhcnQsIFwieWVhcnNcIik7XHJcbiAgICAgICAgICAgICAgICBhbGVydChcIllvdSBhcmUgXCIgKyB5ZWFycyArIFwiIHllYXJzIG9sZCFcIik7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICApO1xyXG4gICAgfVxyXG5cclxuICAgIHZhciBleGFtcGxlNCA9IGZ1bmN0aW9uKGVsZW1lbnQpIHtcclxuICAgICAgICB2YXIgc3RhcnQgPSBtb21lbnQoKS5zdWJ0cmFjdCgyOSwgXCJkYXlzXCIpO1xyXG4gICAgICAgIHZhciBlbmQgPSBtb21lbnQoKTtcclxuXHJcbiAgICAgICAgZnVuY3Rpb24gY2Ioc3RhcnQsIGVuZCkge1xyXG4gICAgICAgICAgICAkKFwiI2t0X2RhdGVyYW5nZXBpY2tlcl80XCIpLmh0bWwoc3RhcnQuZm9ybWF0KFwiTU1NTSBELCBZWVlZXCIpICsgXCIgLSBcIiArIGVuZC5mb3JtYXQoXCJNTU1NIEQsIFlZWVlcIikpO1xyXG4gICAgICAgIH1cclxuXHJcbiAgICAgICAgJChcIiNrdF9kYXRlcmFuZ2VwaWNrZXJfNFwiKS5kYXRlcmFuZ2VwaWNrZXIoe1xyXG4gICAgICAgICAgICBzdGFydERhdGU6IHN0YXJ0LFxyXG4gICAgICAgICAgICBlbmREYXRlOiBlbmQsXHJcbiAgICAgICAgICAgIHJhbmdlczoge1xyXG4gICAgICAgICAgICBcIlRvZGF5XCI6IFttb21lbnQoKSwgbW9tZW50KCldLFxyXG4gICAgICAgICAgICBcIlllc3RlcmRheVwiOiBbbW9tZW50KCkuc3VidHJhY3QoMSwgXCJkYXlzXCIpLCBtb21lbnQoKS5zdWJ0cmFjdCgxLCBcImRheXNcIildLFxyXG4gICAgICAgICAgICBcIkxhc3QgNyBEYXlzXCI6IFttb21lbnQoKS5zdWJ0cmFjdCg2LCBcImRheXNcIiksIG1vbWVudCgpXSxcclxuICAgICAgICAgICAgXCJMYXN0IDMwIERheXNcIjogW21vbWVudCgpLnN1YnRyYWN0KDI5LCBcImRheXNcIiksIG1vbWVudCgpXSxcclxuICAgICAgICAgICAgXCJUaGlzIE1vbnRoXCI6IFttb21lbnQoKS5zdGFydE9mKFwibW9udGhcIiksIG1vbWVudCgpLmVuZE9mKFwibW9udGhcIildLFxyXG4gICAgICAgICAgICBcIkxhc3QgTW9udGhcIjogW21vbWVudCgpLnN1YnRyYWN0KDEsIFwibW9udGhcIikuc3RhcnRPZihcIm1vbnRoXCIpLCBtb21lbnQoKS5zdWJ0cmFjdCgxLCBcIm1vbnRoXCIpLmVuZE9mKFwibW9udGhcIildXHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9LCBjYik7XHJcblxyXG4gICAgICAgIGNiKHN0YXJ0LCBlbmQpO1xyXG4gICAgfVxyXG5cclxuICAgIHZhciBleGFtcGxlNSA9IGZ1bmN0aW9uKGVsZW1lbnQpIHtcclxuICAgICAgICAkKFwiI2t0X2RhdGVyYW5nZXBpY2tlcl81XCIpLmRhdGVyYW5nZXBpY2tlcigpO1xyXG4gICAgfSAgICBcclxuXHJcbiAgICByZXR1cm4ge1xyXG4gICAgICAgIC8vIFB1YmxpYyBGdW5jdGlvbnNcclxuICAgICAgICBpbml0OiBmdW5jdGlvbihlbGVtZW50KSB7XHJcbiAgICAgICAgICAgIGV4YW1wbGUxKCk7XHJcbiAgICAgICAgICAgIGV4YW1wbGUyKCk7XHJcbiAgICAgICAgICAgIGV4YW1wbGUzKCk7XHJcbiAgICAgICAgICAgIGV4YW1wbGU0KCk7XHJcbiAgICAgICAgICAgIGV4YW1wbGU1KCk7XHJcbiAgICAgICAgfVxyXG4gICAgfTtcclxufSgpO1xyXG5cclxuLy8gT24gZG9jdW1lbnQgcmVhZHlcclxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbigpIHtcclxuICAgIEtURm9ybXNEYXRlcmFuZ2VwaWNrZXJEZW1vcy5pbml0KCk7XHJcbn0pO1xyXG4iXSwibmFtZXMiOlsiS1RGb3Jtc0RhdGVyYW5nZXBpY2tlckRlbW9zIiwiZXhhbXBsZTEiLCJlbGVtZW50IiwiJCIsImRhdGVyYW5nZXBpY2tlciIsImV4YW1wbGUyIiwidGltZVBpY2tlciIsInN0YXJ0RGF0ZSIsIm1vbWVudCIsInN0YXJ0T2YiLCJlbmREYXRlIiwiYWRkIiwibG9jYWxlIiwiZm9ybWF0IiwiZXhhbXBsZTMiLCJzaW5nbGVEYXRlUGlja2VyIiwic2hvd0Ryb3Bkb3ducyIsIm1pblllYXIiLCJtYXhZZWFyIiwicGFyc2VJbnQiLCJzdGFydCIsImVuZCIsImxhYmVsIiwieWVhcnMiLCJkaWZmIiwiYWxlcnQiLCJleGFtcGxlNCIsInN1YnRyYWN0IiwiY2IiLCJodG1sIiwicmFuZ2VzIiwiZW5kT2YiLCJleGFtcGxlNSIsImluaXQiLCJLVFV0aWwiLCJvbkRPTUNvbnRlbnRMb2FkZWQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/forms/daterangepicker.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/forms/daterangepicker.js"]();
/******/ 	
/******/ })()
;