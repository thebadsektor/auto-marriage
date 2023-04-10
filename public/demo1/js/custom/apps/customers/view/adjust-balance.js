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

/***/ "./resources/assets/core/js/custom/apps/customers/view/adjust-balance.js":
/*!*******************************************************************************!*\
  !*** ./resources/assets/core/js/custom/apps/customers/view/adjust-balance.js ***!
  \*******************************************************************************/
/***/ (() => {

eval("\n\n// Class definition\nvar KTModalAdjustBalance = function () {\n  var element;\n  var submitButton;\n  var cancelButton;\n  var closeButton;\n  var validator;\n  var maskInput;\n  var newBalance;\n  var form;\n  var modal;\n\n  // Init form inputs\n  var initForm = function initForm() {\n    // Init inputmask plugin --- For more info please refer to the official documentation here: https://github.com/RobinHerbots/Inputmask\n    Inputmask(\"US$ 9,999,999.99\", {\n      \"numericInput\": true\n    }).mask(\"#kt_modal_inputmask\");\n  };\n  var handleBalanceCalculator = function handleBalanceCalculator() {\n    // Select elements\n    var currentBalance = element.querySelector('[kt-modal-adjust-balance=\"current_balance\"]');\n    newBalance = element.querySelector('[kt-modal-adjust-balance=\"new_balance\"]');\n    maskInput = document.getElementById('kt_modal_inputmask');\n\n    // Get current balance value\n    var isNegative = currentBalance.innerHTML.includes('-');\n    var currentValue = parseFloat(currentBalance.innerHTML.replace(/[^0-9.]/g, '').replace(',', ''));\n    currentValue = isNegative ? currentValue * -1 : currentValue;\n\n    // On change event for inputmask\n    var maskValue;\n    maskInput.addEventListener('focusout', function (e) {\n      // Get inputmask value on change\n      maskValue = parseFloat(e.target.value.replace(/[^0-9.]/g, '').replace(',', ''));\n\n      // Set mask value as 0 when NaN detected\n      if (isNaN(maskValue)) {\n        maskValue = 0;\n      }\n\n      // Calculate & set new balance value\n      newBalance.innerHTML = 'US$ ' + (maskValue + currentValue).toFixed(2).replace(/\\d(?=(\\d{3})+\\.)/g, '$&,');\n    });\n  };\n\n  // Handle form validation and submittion\n  var handleForm = function handleForm() {\n    // Stepper custom navigation\n\n    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/\n    validator = FormValidation.formValidation(form, {\n      fields: {\n        'adjustment': {\n          validators: {\n            notEmpty: {\n              message: 'Adjustment type is required'\n            }\n          }\n        },\n        'amount': {\n          validators: {\n            notEmpty: {\n              message: 'Amount is required'\n            }\n          }\n        }\n      },\n      plugins: {\n        trigger: new FormValidation.plugins.Trigger(),\n        bootstrap: new FormValidation.plugins.Bootstrap5({\n          rowSelector: '.fv-row',\n          eleInvalidClass: '',\n          eleValidClass: ''\n        })\n      }\n    });\n\n    // Revalidate country field. For more info, plase visit the official plugin site: https://select2.org/\n    $(form.querySelector('[name=\"adjustment\"]')).on('change', function () {\n      // Revalidate the field when an option is chosen\n      validator.revalidateField('adjustment');\n    });\n\n    // Action buttons\n    submitButton.addEventListener('click', function (e) {\n      // Prevent default button action\n      e.preventDefault();\n\n      // Validate form before submit\n      if (validator) {\n        validator.validate().then(function (status) {\n          console.log('validated!');\n          if (status == 'Valid') {\n            // Show loading indication\n            submitButton.setAttribute('data-kt-indicator', 'on');\n\n            // Disable submit button whilst loading\n            submitButton.disabled = true;\n\n            // Simulate form submission\n            setTimeout(function () {\n              // Simulate form submission\n              submitButton.removeAttribute('data-kt-indicator');\n\n              // Show popup confirmation \n              Swal.fire({\n                text: \"Form has been successfully submitted!\",\n                icon: \"success\",\n                buttonsStyling: false,\n                confirmButtonText: \"Ok, got it!\",\n                customClass: {\n                  confirmButton: \"btn btn-primary\"\n                }\n              }).then(function (result) {\n                if (result.isConfirmed) {\n                  modal.hide();\n\n                  // Enable submit button after loading\n                  submitButton.disabled = false;\n\n                  // Reset form for demo purposes only\n                  form.reset();\n                  newBalance.innerHTML = \"--\";\n                }\n              });\n\n              //form.submit(); // Submit form\n            }, 2000);\n          } else {\n            // Show popup warning \n            Swal.fire({\n              text: \"Sorry, looks like there are some errors detected, please try again.\",\n              icon: \"error\",\n              buttonsStyling: false,\n              confirmButtonText: \"Ok, got it!\",\n              customClass: {\n                confirmButton: \"btn btn-primary\"\n              }\n            });\n          }\n        });\n      }\n    });\n    cancelButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      Swal.fire({\n        text: \"Are you sure you would like to cancel?\",\n        icon: \"warning\",\n        showCancelButton: true,\n        buttonsStyling: false,\n        confirmButtonText: \"Yes, cancel it!\",\n        cancelButtonText: \"No, return\",\n        customClass: {\n          confirmButton: \"btn btn-primary\",\n          cancelButton: \"btn btn-active-light\"\n        }\n      }).then(function (result) {\n        if (result.value) {\n          form.reset(); // Reset form\t\n          modal.hide(); // Hide modal\t\t\t\t\n        } else if (result.dismiss === 'cancel') {\n          Swal.fire({\n            text: \"Your form has not been cancelled!.\",\n            icon: \"error\",\n            buttonsStyling: false,\n            confirmButtonText: \"Ok, got it!\",\n            customClass: {\n              confirmButton: \"btn btn-primary\"\n            }\n          });\n        }\n      });\n    });\n    closeButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      Swal.fire({\n        text: \"Are you sure you would like to cancel?\",\n        icon: \"warning\",\n        showCancelButton: true,\n        buttonsStyling: false,\n        confirmButtonText: \"Yes, cancel it!\",\n        cancelButtonText: \"No, return\",\n        customClass: {\n          confirmButton: \"btn btn-primary\",\n          cancelButton: \"btn btn-active-light\"\n        }\n      }).then(function (result) {\n        if (result.value) {\n          form.reset(); // Reset form\t\n          modal.hide(); // Hide modal\t\t\t\t\n        } else if (result.dismiss === 'cancel') {\n          Swal.fire({\n            text: \"Your form has not been cancelled!.\",\n            icon: \"error\",\n            buttonsStyling: false,\n            confirmButtonText: \"Ok, got it!\",\n            customClass: {\n              confirmButton: \"btn btn-primary\"\n            }\n          });\n        }\n      });\n    });\n  };\n  return {\n    // Public functions\n    init: function init() {\n      // Elements\n      element = document.querySelector('#kt_modal_adjust_balance');\n      modal = new bootstrap.Modal(element);\n      form = element.querySelector('#kt_modal_adjust_balance_form');\n      submitButton = form.querySelector('#kt_modal_adjust_balance_submit');\n      cancelButton = form.querySelector('#kt_modal_adjust_balance_cancel');\n      closeButton = element.querySelector('#kt_modal_adjust_balance_close');\n      initForm();\n      handleBalanceCalculator();\n      handleForm();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTModalAdjustBalance.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2FwcHMvY3VzdG9tZXJzL3ZpZXcvYWRqdXN0LWJhbGFuY2UuanMuanMiLCJtYXBwaW5ncyI6IkFBQWE7O0FBRWI7QUFDQSxJQUFJQSxvQkFBb0IsR0FBRyxZQUFZO0VBQ25DLElBQUlDLE9BQU87RUFDWCxJQUFJQyxZQUFZO0VBQ2hCLElBQUlDLFlBQVk7RUFDaEIsSUFBSUMsV0FBVztFQUNmLElBQUlDLFNBQVM7RUFDYixJQUFJQyxTQUFTO0VBQ2IsSUFBSUMsVUFBVTtFQUNkLElBQUlDLElBQUk7RUFDUixJQUFJQyxLQUFLOztFQUVUO0VBQ0EsSUFBSUMsUUFBUSxHQUFHLFNBQVhBLFFBQVFBLENBQUEsRUFBZTtJQUN2QjtJQUNBQyxTQUFTLENBQUMsa0JBQWtCLEVBQUU7TUFDMUIsY0FBYyxFQUFFO0lBQ3BCLENBQUMsQ0FBQyxDQUFDQyxJQUFJLENBQUMscUJBQXFCLENBQUM7RUFDbEMsQ0FBQztFQUVELElBQUlDLHVCQUF1QixHQUFHLFNBQTFCQSx1QkFBdUJBLENBQUEsRUFBZTtJQUN0QztJQUNBLElBQU1DLGNBQWMsR0FBR2IsT0FBTyxDQUFDYyxhQUFhLENBQUMsNkNBQTZDLENBQUM7SUFDM0ZSLFVBQVUsR0FBR04sT0FBTyxDQUFDYyxhQUFhLENBQUMseUNBQXlDLENBQUM7SUFDN0VULFNBQVMsR0FBR1UsUUFBUSxDQUFDQyxjQUFjLENBQUMsb0JBQW9CLENBQUM7O0lBRXpEO0lBQ0EsSUFBTUMsVUFBVSxHQUFHSixjQUFjLENBQUNLLFNBQVMsQ0FBQ0MsUUFBUSxDQUFDLEdBQUcsQ0FBQztJQUN6RCxJQUFJQyxZQUFZLEdBQUdDLFVBQVUsQ0FBQ1IsY0FBYyxDQUFDSyxTQUFTLENBQUNJLE9BQU8sQ0FBQyxVQUFVLEVBQUUsRUFBRSxDQUFDLENBQUNBLE9BQU8sQ0FBQyxHQUFHLEVBQUUsRUFBRSxDQUFDLENBQUM7SUFDaEdGLFlBQVksR0FBR0gsVUFBVSxHQUFHRyxZQUFZLEdBQUcsQ0FB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Y0FBYyxFQUFFLEtBQUs7WUFDckJDLGlCQUFpQixFQUFFLGFBQWE7WUFDaENDLFdBQVcsRUFBRTtjQUNUQyxhQUFhLEVBQUU7WUFDbkI7VUFDSixDQUFDLENBQUM7UUFDTjtNQUNKLENBQUMsQ0FBQztJQUNOLENBQUMsQ0FBQztFQUNOLENBQUM7RUFFRCxPQUFPO0lBQ0g7SUFDQVEsSUFBSSxFQUFFLFNBQUFBLEtBQUEsRUFBWTtNQUNkO01BQ0F6RSxPQUFPLEdBQUdlLFFBQVEsQ0FBQ0QsYUFBYSxDQUFDLDBCQUEwQixDQUFDO01BQzVETixLQUFLLEdBQUcsSUFBSWdDLFNBQVMsQ0FBQ2tDLEtBQUssQ0FBQzFFLE9BQU8sQ0FBQztNQUVwQ08sSUFBSSxHQUFHUCxPQUFPLENBQUNjLGFBQWEsQ0FBQywrQkFBK0IsQ0FBQztNQUM3RGIsWUFBWSxHQUFHTSxJQUFJLENBQUNPLGFBQWEsQ0FBQyxpQ0FBaUMsQ0FBQztNQUNwRVosWUFBWSxHQUFHSyxJQUFJLENBQUNPLGFBQWEsQ0FBQyxpQ0FBaUMsQ0FBQztNQUNwRVgsV0FBVyxHQUFHSCxPQUFPLENBQUNjLGFBQWEsQ0FBQyxnQ0FBZ0MsQ0FBQztNQUVyRUwsUUFBUSxFQUFFO01BQ1ZHLHVCQUF1QixFQUFFO01BQ3pCa0IsVUFBVSxFQUFFO0lBQ2hCO0VBQ0osQ0FBQztBQUNMLENBQUMsRUFBRTs7QUFFSDtBQUNBNkMsTUFBTSxDQUFDQyxrQkFBa0IsQ0FBQyxZQUFZO0VBQ2xDN0Usb0JBQW9CLENBQUMwRSxJQUFJLEVBQUU7QUFDL0IsQ0FBQyxDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL2pzL2N1c3RvbS9hcHBzL2N1c3RvbWVycy92aWV3L2FkanVzdC1iYWxhbmNlLmpzP2JjYTUiXSwic291cmNlc0NvbnRlbnQiOlsiXCJ1c2Ugc3RyaWN0XCI7XHJcblxyXG4vLyBDbGFzcyBkZWZpbml0aW9uXHJcbnZhciBLVE1vZGFsQWRqdXN0QmFsYW5jZSA9IGZ1bmN0aW9uICgpIHtcclxuICAgIHZhciBlbGVtZW50O1xyXG4gICAgdmFyIHN1Ym1pdEJ1dHRvbjtcclxuICAgIHZhciBjYW5jZWxCdXR0b247XHJcbiAgICB2YXIgY2xvc2VCdXR0b247XHJcbiAgICB2YXIgdmFsaWRhdG9yO1xyXG4gICAgdmFyIG1hc2tJbnB1dDtcclxuICAgIHZhciBuZXdCYWxhbmNlO1xyXG4gICAgdmFyIGZvcm07XHJcbiAgICB2YXIgbW9kYWw7XHJcblxyXG4gICAgLy8gSW5pdCBmb3JtIGlucHV0c1xyXG4gICAgdmFyIGluaXRGb3JtID0gZnVuY3Rpb24gKCkge1xyXG4gICAgICAgIC8vIEluaXQgaW5wdXRtYXNrIHBsdWdpbiAtLS0gRm9yIG1vcmUgaW5mbyBwbGVhc2UgcmVmZXIgdG8gdGhlIG9mZmljaWFsIGRvY3VtZW50YXRpb24gaGVyZTogaHR0cHM6Ly9naXRodWIuY29tL1JvYmluSGVyYm90cy9JbnB1dG1hc2tcclxuICAgICAgICBJbnB1dG1hc2soXCJVUyQgOSw5OTksOTk5Ljk5XCIsIHtcclxuICAgICAgICAgICAgXCJudW1lcmljSW5wdXRcIjogdHJ1ZVxyXG4gICAgICAgIH0pLm1hc2soXCIja3RfbW9kYWxfaW5wdXRtYXNrXCIpO1xyXG4gICAgfVxyXG5cclxuICAgIHZhciBoYW5kbGVCYWxhbmNlQ2FsY3VsYXRvciA9IGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAvLyBTZWxlY3QgZWxlbWVudHNcclxuICAgICAgICBjb25zdCBjdXJyZW50QmFsYW5jZSA9IGVsZW1lbnQucXVlcnlTZWxlY3RvcignW2t0LW1vZGFsLWFkanVzdC1iYWxhbmNlPVwiY3VycmVudF9iYWxhbmNlXCJdJyk7XHJcbiAgICAgICAgbmV3QmFsYW5jZSA9IGVsZW1lbnQucXVlcnlTZWxlY3RvcignW2t0LW1vZGFsLWFkanVzdC1iYWxhbmNlPVwibmV3X2JhbGFuY2VcIl0nKTtcclxuICAgICAgICBtYXNrSW5wdXQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgna3RfbW9kYWxfaW5wdXRtYXNrJyk7XHJcblxyXG4gICAgICAgIC8vIEdldCBjdXJyZW50IGJhbGFuY2UgdmFsdWVcclxuICAgICAgICBjb25zdCBpc05lZ2F0aXZlID0gY3VycmVudEJhbGFuY2UuaW5uZXJIVE1MLmluY2x1ZGVzKCctJyk7XHJcbiAgICAgICAgbGV0IGN1cnJlbnRWYWx1ZSA9IHBhcnNlRmxvYXQoY3VycmVudEJhbGFuY2UuaW5uZXJIVE1MLnJlcGxhY2UoL1teMC05Ll0vZywgJycpLnJlcGxhY2UoJywnLCAnJykpO1xyXG4gICAgICAgIGN1cnJlbnRWYWx1ZSA9IGlzTmVnYXRpdmUgPyBjdXJyZW50VmFsdWUgKiAtMSA6IGN1cnJlbnRWYWx1ZTsgXHJcblxyXG4gICAgICAgIC8vIE9uIGNoYW5nZSBldmVudCBmb3IgaW5wdXRtYXNrXHJcbiAgICAgICAgbGV0IG1hc2tWYWx1ZTtcclxuICAgICAgICBtYXNrSW5wdXQuYWRkRXZlbnRMaXN0ZW5lcignZm9jdXNvdXQnLCBmdW5jdGlvbiAoZSkge1xyXG4gICAgICAgICAgICAvLyBHZXQgaW5wdXRtYXNrIHZhbHVlIG9uIGNoYW5nZVxyXG4gICAgICAgICAgICBtYXNrVmFsdWUgPSBwYXJzZUZsb2F0KGUudGFyZ2V0LnZhbHVlLnJlcGxhY2UoL1teMC05Ll0vZywgJycpLnJlcGxhY2UoJywnLCAnJykpO1xyXG5cclxuICAgICAgICAgICAgLy8gU2V0IG1hc2sgdmFsdWUgYXMgMCB3aGVuIE5hTiBkZXRlY3RlZFxyXG4gICAgICAgICAgICBpZihpc05hTihtYXNrVmFsdWUpKXtcclxuICAgICAgICAgICAgICAgIG1hc2tWYWx1ZSA9IDA7XHJcbiAgICAgICAgICAgIH1cclxuXHJcbiAgICAgICAgICAgIC8vIENhbGN1bGF0ZSAmIHNldCBuZXcgYmFsYW5jZSB2YWx1ZVxyXG4gICAgICAgICAgICBuZXdCYWxhbmNlLmlubmVySFRNTCA9ICdVUyQgJyArIChtYXNrVmFsdWUgKyBjdXJyZW50VmFsdWUpLnRvRml4ZWQoMikucmVwbGFjZSgvXFxkKD89KFxcZHszfSkrXFwuKS9nLCAnJCYsJyk7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG4gICAgLy8gSGFuZGxlIGZvcm0gdmFsaWRhdGlvbiBhbmQgc3VibWl0dGlvblxyXG4gICAgdmFyIGhhbmRsZUZvcm0gPSBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgLy8gU3RlcHBlciBjdXN0b20gbmF2aWdhdGlvblxyXG5cclxuICAgICAgICAvLyBJbml0IGZvcm0gdmFsaWRhdGlvbiBydWxlcy4gRm9yIG1vcmUgaW5mbyBjaGVjayB0aGUgRm9ybVZhbGlkYXRpb24gcGx1Z2luJ3Mgb2ZmaWNpYWwgZG9jdW1lbnRhdGlvbjpodHRwczovL2Zvcm12YWxpZGF0aW9uLmlvL1xyXG4gICAgICAgIHZhbGlkYXRvciA9IEZvcm1WYWxpZGF0aW9uLmZvcm1WYWxpZGF0aW9uKFxyXG4gICAgICAgICAgICBmb3JtLFxyXG4gICAgICAgICAgICB7XHJcbiAgICAgICAgICAgICAgICBmaWVsZHM6IHtcclxuICAgICAgICAgICAgICAgICAgICAnYWRqdXN0bWVudCc6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgdmFsaWRhdG9yczoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgbm90RW1wdHk6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtZXNzYWdlOiAnQWRqdXN0bWVudCB0eXBlIGlzIHJlcXVpcmVkJ1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgICAgICAnYW1vdW50Jzoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB2YWxpZGF0b3JzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBub3RFbXB0eToge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1lc3NhZ2U6ICdBbW91bnQgaXMgcmVxdWlyZWQnXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICB9LFxyXG5cclxuICAgICAgICAgICAgICAgIHBsdWdpbnM6IHtcclxuICAgICAgICAgICAgICAgICAgICB0cmlnZ2VyOiBuZXcgRm9ybVZhbGlkYXRpb24ucGx1Z2lucy5UcmlnZ2VyKCksXHJcbiAgICAgICAgICAgICAgICAgICAgYm9vdHN0cmFwOiBuZXcgRm9ybVZhbGlkYXRpb24ucGx1Z2lucy5Cb290c3RyYXA1KHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgcm93U2VsZWN0b3I6ICcuZnYtcm93JyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgZWxlSW52YWxpZENsYXNzOiAnJyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgZWxlVmFsaWRDbGFzczogJydcclxuICAgICAgICAgICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgKTtcclxuXHJcbiAgICAgICAgLy8gUmV2YWxpZGF0ZSBjb3VudHJ5IGZpZWxkLiBGb3IgbW9yZSBpbmZvLCBwbGFzZSB2aXNpdCB0aGUgb2ZmaWNpYWwgcGx1Z2luIHNpdGU6IGh0dHBzOi8vc2VsZWN0Mi5vcmcvXHJcbiAgICAgICAgJChmb3JtLnF1ZXJ5U2VsZWN0b3IoJ1tuYW1lPVwiYWRqdXN0bWVudFwiXScpKS5vbignY2hhbmdlJywgZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICAvLyBSZXZhbGlkYXRlIHRoZSBmaWVsZCB3aGVuIGFuIG9wdGlvbiBpcyBjaG9zZW5cclxuICAgICAgICAgICAgdmFsaWRhdG9yLnJldmFsaWRhdGVGaWVsZCgnYWRqdXN0bWVudCcpO1xyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICAvLyBBY3Rpb24gYnV0dG9uc1xyXG4gICAgICAgIHN1Ym1pdEJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XHJcbiAgICAgICAgICAgIC8vIFByZXZlbnQgZGVmYXVsdCBidXR0b24gYWN0aW9uXHJcbiAgICAgICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuXHJcbiAgICAgICAgICAgIC8vIFZhbGlkYXRlIGZvcm0gYmVmb3JlIHN1Ym1pdFxyXG4gICAgICAgICAgICBpZiAodmFsaWRhdG9yKSB7XHJcbiAgICAgICAgICAgICAgICB2YWxpZGF0b3IudmFsaWRhdGUoKS50aGVuKGZ1bmN0aW9uIChzdGF0dXMpIHtcclxuICAgICAgICAgICAgICAgICAgICBjb25zb2xlLmxvZygndmFsaWRhdGVkIScpO1xyXG5cclxuICAgICAgICAgICAgICAgICAgICBpZiAoc3RhdHVzID09ICdWYWxpZCcpIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgLy8gU2hvdyBsb2FkaW5nIGluZGljYXRpb25cclxuICAgICAgICAgICAgICAgICAgICAgICAgc3VibWl0QnV0dG9uLnNldEF0dHJpYnV0ZSgnZGF0YS1rdC1pbmRpY2F0b3InLCAnb24nKTtcclxuXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIC8vIERpc2FibGUgc3VibWl0IGJ1dHRvbiB3aGlsc3QgbG9hZGluZ1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBzdWJtaXRCdXR0b24uZGlzYWJsZWQgPSB0cnVlO1xyXG5cclxuICAgICAgICAgICAgICAgICAgICAgICAgLy8gU2ltdWxhdGUgZm9ybSBzdWJtaXNzaW9uXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIHNldFRpbWVvdXQoZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gU2ltdWxhdGUgZm9ybSBzdWJtaXNzaW9uXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBzdWJtaXRCdXR0b24ucmVtb3ZlQXR0cmlidXRlKCdkYXRhLWt0LWluZGljYXRvcicpO1xyXG5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8vIFNob3cgcG9wdXAgY29uZmlybWF0aW9uIFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgU3dhbC5maXJlKHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0OiBcIkZvcm0gaGFzIGJlZW4gc3VjY2Vzc2Z1bGx5IHN1Ym1pdHRlZCFcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpY29uOiBcInN1Y2Nlc3NcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBidXR0b25zU3R5bGluZzogZmFsc2UsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6IFwiT2ssIGdvdCBpdCFcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjdXN0b21DbGFzczoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBidG4tcHJpbWFyeVwiXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzdWx0KSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKHJlc3VsdC5pc0NvbmZpcm1lZCkge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtb2RhbC5oaWRlKCk7XHJcblxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBFbmFibGUgc3VibWl0IGJ1dHRvbiBhZnRlciBsb2FkaW5nXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHN1Ym1pdEJ1dHRvbi5kaXNhYmxlZCA9IGZhbHNlO1xyXG5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gUmVzZXQgZm9ybSBmb3IgZGVtbyBwdXJwb3NlcyBvbmx5XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZvcm0ucmVzZXQoKTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmV3QmFsYW5jZS5pbm5lckhUTUwgPSBcIi0tXCI7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfSk7XHJcblxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgLy9mb3JtLnN1Ym1pdCgpOyAvLyBTdWJtaXQgZm9ybVxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9LCAyMDAwKTtcclxuICAgICAgICAgICAgICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAvLyBTaG93IHBvcHVwIHdhcm5pbmcgXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIFN3YWwuZmlyZSh7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0OiBcIlNvcnJ5LCBsb29rcyBsaWtlIHRoZXJlIGFyZSBzb21lIGVycm9ycyBkZXRlY3RlZCwgcGxlYXNlIHRyeSBhZ2Fpbi5cIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGljb246IFwiZXJyb3JcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGJ1dHRvbnNTdHlsaW5nOiBmYWxzZSxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b25UZXh0OiBcIk9rLCBnb3QgaXQhXCIsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjdXN0b21DbGFzczoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b246IFwiYnRuIGJ0bi1wcmltYXJ5XCJcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgY2FuY2VsQnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcclxuICAgICAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cclxuICAgICAgICAgICAgU3dhbC5maXJlKHtcclxuICAgICAgICAgICAgICAgIHRleHQ6IFwiQXJlIHlvdSBzdXJlIHlvdSB3b3VsZCBsaWtlIHRvIGNhbmNlbD9cIixcclxuICAgICAgICAgICAgICAgIGljb246IFwid2FybmluZ1wiLFxyXG4gICAgICAgICAgICAgICAgc2hvd0NhbmNlbEJ1dHRvbjogdHJ1ZSxcclxuICAgICAgICAgICAgICAgIGJ1dHRvbnNTdHlsaW5nOiBmYWxzZSxcclxuICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b25UZXh0OiBcIlllcywgY2FuY2VsIGl0IVwiLFxyXG4gICAgICAgICAgICAgICAgY2FuY2VsQnV0dG9uVGV4dDogXCJObywgcmV0dXJuXCIsXHJcbiAgICAgICAgICAgICAgICBjdXN0b21DbGFzczoge1xyXG4gICAgICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b246IFwiYnRuIGJ0bi1wcmltYXJ5XCIsXHJcbiAgICAgICAgICAgICAgICAgICAgY2FuY2VsQnV0dG9uOiBcImJ0biBidG4tYWN0aXZlLWxpZ2h0XCJcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfSkudGhlbihmdW5jdGlvbiAocmVzdWx0KSB7XHJcbiAgICAgICAgICAgICAgICBpZiAocmVzdWx0LnZhbHVlKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgZm9ybS5yZXNldCgpOyAvLyBSZXNldCBmb3JtXHRcclxuICAgICAgICAgICAgICAgICAgICBtb2RhbC5oaWRlKCk7IC8vIEhpZGUgbW9kYWxcdFx0XHRcdFxyXG4gICAgICAgICAgICAgICAgfSBlbHNlIGlmIChyZXN1bHQuZGlzbWlzcyA9PT0gJ2NhbmNlbCcpIHtcclxuICAgICAgICAgICAgICAgICAgICBTd2FsLmZpcmUoe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB0ZXh0OiBcIllvdXIgZm9ybSBoYXMgbm90IGJlZW4gY2FuY2VsbGVkIS5cIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgaWNvbjogXCJlcnJvclwiLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBidXR0b25zU3R5bGluZzogZmFsc2UsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b25UZXh0OiBcIk9rLCBnb3QgaXQhXCIsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGN1c3RvbUNsYXNzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBidG4tcHJpbWFyeVwiLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH0pO1xyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICBjbG9zZUJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XHJcbiAgICAgICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcclxuXHJcbiAgICAgICAgICAgIFN3YWwuZmlyZSh7XHJcbiAgICAgICAgICAgICAgICB0ZXh0OiBcIkFyZSB5b3Ugc3VyZSB5b3Ugd291bGQgbGlrZSB0byBjYW5jZWw/XCIsXHJcbiAgICAgICAgICAgICAgICBpY29uOiBcIndhcm5pbmdcIixcclxuICAgICAgICAgICAgICAgIHNob3dDYW5jZWxCdXR0b246IHRydWUsXHJcbiAgICAgICAgICAgICAgICBidXR0b25zU3R5bGluZzogZmFsc2UsXHJcbiAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uVGV4dDogXCJZZXMsIGNhbmNlbCBpdCFcIixcclxuICAgICAgICAgICAgICAgIGNhbmNlbEJ1dHRvblRleHQ6IFwiTm8sIHJldHVyblwiLFxyXG4gICAgICAgICAgICAgICAgY3VzdG9tQ2xhc3M6IHtcclxuICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBidG4tcHJpbWFyeVwiLFxyXG4gICAgICAgICAgICAgICAgICAgIGNhbmNlbEJ1dHRvbjogXCJidG4gYnRuLWFjdGl2ZS1saWdodFwiXHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH0pLnRoZW4oZnVuY3Rpb24gKHJlc3VsdCkge1xyXG4gICAgICAgICAgICAgICAgaWYgKHJlc3VsdC52YWx1ZSkge1xyXG4gICAgICAgICAgICAgICAgICAgIGZvcm0ucmVzZXQoKTsgLy8gUmVzZXQgZm9ybVx0XHJcbiAgICAgICAgICAgICAgICAgICAgbW9kYWwuaGlkZSgpOyAvLyBIaWRlIG1vZGFsXHRcdFx0XHRcclxuICAgICAgICAgICAgICAgIH0gZWxzZSBpZiAocmVzdWx0LmRpc21pc3MgPT09ICdjYW5jZWwnKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgU3dhbC5maXJlKHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgdGV4dDogXCJZb3VyIGZvcm0gaGFzIG5vdCBiZWVuIGNhbmNlbGxlZCEuXCIsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGljb246IFwiZXJyb3JcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgYnV0dG9uc1N0eWxpbmc6IGZhbHNlLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uVGV4dDogXCJPaywgZ290IGl0IVwiLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBjdXN0b21DbGFzczoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvbjogXCJidG4gYnRuLXByaW1hcnlcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgIH0pO1xyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9KTtcclxuICAgICAgICB9KTtcclxuICAgIH1cclxuICAgIFxyXG4gICAgcmV0dXJuIHtcclxuICAgICAgICAvLyBQdWJsaWMgZnVuY3Rpb25zXHJcbiAgICAgICAgaW5pdDogZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICAvLyBFbGVtZW50c1xyXG4gICAgICAgICAgICBlbGVtZW50ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2t0X21vZGFsX2FkanVzdF9iYWxhbmNlJyk7XHJcbiAgICAgICAgICAgIG1vZGFsID0gbmV3IGJvb3RzdHJhcC5Nb2RhbChlbGVtZW50KTtcclxuXHJcbiAgICAgICAgICAgIGZvcm0gPSBlbGVtZW50LnF1ZXJ5U2VsZWN0b3IoJyNrdF9tb2RhbF9hZGp1c3RfYmFsYW5jZV9mb3JtJyk7XHJcbiAgICAgICAgICAgIHN1Ym1pdEJ1dHRvbiA9IGZvcm0ucXVlcnlTZWxlY3RvcignI2t0X21vZGFsX2FkanVzdF9iYWxhbmNlX3N1Ym1pdCcpO1xyXG4gICAgICAgICAgICBjYW5jZWxCdXR0b24gPSBmb3JtLnF1ZXJ5U2VsZWN0b3IoJyNrdF9tb2RhbF9hZGp1c3RfYmFsYW5jZV9jYW5jZWwnKTtcclxuICAgICAgICAgICAgY2xvc2VCdXR0b24gPSBlbGVtZW50LnF1ZXJ5U2VsZWN0b3IoJyNrdF9tb2RhbF9hZGp1c3RfYmFsYW5jZV9jbG9zZScpO1xyXG5cclxuICAgICAgICAgICAgaW5pdEZvcm0oKTtcclxuICAgICAgICAgICAgaGFuZGxlQmFsYW5jZUNhbGN1bGF0b3IoKTtcclxuICAgICAgICAgICAgaGFuZGxlRm9ybSgpO1xyXG4gICAgICAgIH1cclxuICAgIH07XHJcbn0oKTtcclxuXHJcbi8vIE9uIGRvY3VtZW50IHJlYWR5XHJcbktUVXRpbC5vbkRPTUNvbnRlbnRMb2FkZWQoZnVuY3Rpb24gKCkge1xyXG4gICAgS1RNb2RhbEFkanVzdEJhbGFuY2UuaW5pdCgpO1xyXG59KTsiXSwibmFtZXMiOlsiS1RNb2RhbEFkanVzdEJhbGFuY2UiLCJlbGVtZW50Iiwic3VibWl0QnV0dG9uIiwiY2FuY2VsQnV0dG9uIiwiY2xvc2VCdXR0b24iLCJ2YWxpZGF0b3IiLCJtYXNrSW5wdXQiLCJuZXdCYWxhbmNlIiwiZm9ybSIsIm1vZGFsIiwiaW5pdEZvcm0iLCJJbnB1dG1hc2siLCJtYXNrIiwiaGFuZGxlQmFsYW5jZUNhbGN1bGF0b3IiLCJjdXJyZW50QmFsYW5jZSIsInF1ZXJ5U2VsZWN0b3IiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwiaXNOZWdhdGl2ZSIsImlubmVySFRNTCIsImluY2x1ZGVzIiwiY3VycmVudFZhbHVlIiwicGFyc2VGbG9hdCIsInJlcGxhY2UiLCJtYXNrVmFsdWUiLCJhZGRFdmVudExpc3RlbmVyIiwiZSIsInRhcmdldCIsInZhbHVlIiwiaXNOYU4iLCJ0b0ZpeGVkIiwiaGFuZGxlRm9ybSIsIkZvcm1WYWxpZGF0aW9uIiwiZm9ybVZhbGlkYXRpb24iLCJmaWVsZHMiLCJ2YWxpZGF0b3JzIiwibm90RW1wdHkiLCJtZXNzYWdlIiwicGx1Z2lucyIsInRyaWdnZXIiLCJUcmlnZ2VyIiwiYm9vdHN0cmFwIiwiQm9vdHN0cmFwNSIsInJvd1NlbGVjdG9yIiwiZWxlSW52YWxpZENsYXNzIiwiZWxlVmFsaWRDbGFzcyIsIiQiLCJvbiIsInJldmFsaWRhdGVGaWVsZCIsInByZXZlbnREZWZhdWx0IiwidmFsaWRhdGUiLCJ0aGVuIiwic3RhdHVzIiwiY29uc29sZSIsImxvZyIsInNldEF0dHJpYnV0ZSIsImRpc2FibGVkIiwic2V0VGltZW91dCIsInJlbW92ZUF0dHJpYnV0ZSIsIlN3YWwiLCJmaXJlIiwidGV4dCIsImljb24iLCJidXR0b25zU3R5bGluZyIsImNvbmZpcm1CdXR0b25UZXh0IiwiY3VzdG9tQ2xhc3MiLCJjb25maXJtQnV0dG9uIiwicmVzdWx0IiwiaXNDb25maXJtZWQiLCJoaWRlIiwicmVzZXQiLCJzaG93Q2FuY2VsQnV0dG9uIiwiY2FuY2VsQnV0dG9uVGV4dCIsImRpc21pc3MiLCJpbml0IiwiTW9kYWwiLCJLVFV0aWwiLCJvbkRPTUNvbnRlbnRMb2FkZWQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/apps/customers/view/adjust-balance.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/apps/customers/view/adjust-balance.js"]();
/******/ 	
/******/ })()
;