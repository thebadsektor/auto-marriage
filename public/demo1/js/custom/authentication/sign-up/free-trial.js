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

/***/ "./resources/assets/core/js/custom/authentication/sign-up/free-trial.js":
/*!******************************************************************************!*\
  !*** ./resources/assets/core/js/custom/authentication/sign-up/free-trial.js ***!
  \******************************************************************************/
/***/ (() => {

eval("\n\n// Class Definition\nvar KTSignupFreeTrial = function () {\n  // Elements\n  var form;\n  var submitButton;\n  var validator;\n  var passwordMeter;\n\n  // Handle form\n  var handleForm = function handleForm(e) {\n    // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/\n    validator = FormValidation.formValidation(form, {\n      fields: {\n        'email': {\n          validators: {\n            regexp: {\n              regexp: /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/,\n              message: 'The value is not a valid email address'\n            },\n            notEmpty: {\n              message: 'Email address is required'\n            }\n          }\n        },\n        'password': {\n          validators: {\n            notEmpty: {\n              message: 'The password is required'\n            },\n            callback: {\n              message: 'Please enter valid password',\n              callback: function callback(input) {\n                if (input.value.length > 0) {\n                  return validatePassword();\n                }\n              }\n            }\n          }\n        },\n        'confirm-password': {\n          validators: {\n            notEmpty: {\n              message: 'The password confirmation is required'\n            },\n            identical: {\n              compare: function compare() {\n                return form.querySelector('[name=\"password\"]').value;\n              },\n              message: 'The password and its confirm are not the same'\n            }\n          }\n        },\n        'toc': {\n          validators: {\n            notEmpty: {\n              message: 'You must accept the terms and conditions'\n            }\n          }\n        }\n      },\n      plugins: {\n        trigger: new FormValidation.plugins.Trigger({\n          event: {\n            password: false\n          }\n        }),\n        bootstrap: new FormValidation.plugins.Bootstrap5({\n          rowSelector: '.fv-row',\n          eleInvalidClass: '',\n          eleValidClass: ''\n        })\n      }\n    });\n    submitButton.addEventListener('click', function (e) {\n      e.preventDefault();\n      validator.revalidateField('password');\n      validator.validate().then(function (status) {\n        if (status == 'Valid') {\n          // Show loading indication\n          submitButton.setAttribute('data-kt-indicator', 'on');\n\n          // Disable button to avoid multiple click \n          submitButton.disabled = true;\n\n          // Simulate ajax request\n          setTimeout(function () {\n            // Hide loading indication\n            submitButton.removeAttribute('data-kt-indicator');\n\n            // Enable button\n            submitButton.disabled = false;\n\n            // Show message popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/\n            Swal.fire({\n              text: \"You have successfully registered!\",\n              icon: \"success\",\n              buttonsStyling: false,\n              confirmButtonText: \"Ok, got it!\",\n              customClass: {\n                confirmButton: \"btn btn-primary\"\n              }\n            }).then(function (result) {\n              if (result.isConfirmed) {\n                form.reset(); // reset form                    \n                passwordMeter.reset(); // reset password meter\n                //form.submit();\n              }\n            });\n          }, 1500);\n        } else {\n          // Show error popup. For more info check the plugin's official documentation: https://sweetalert2.github.io/\n          Swal.fire({\n            text: \"Sorry, looks like there are some errors detected, please try again.\",\n            icon: \"error\",\n            buttonsStyling: false,\n            confirmButtonText: \"Ok, got it!\",\n            customClass: {\n              confirmButton: \"btn btn-primary\"\n            }\n          });\n        }\n      });\n    });\n    form.querySelector('input[name=\"password\"]').addEventListener('input', function () {\n      if (this.value.length > 0) {\n        validator.updateFieldStatus('password', 'NotValidated');\n      }\n    });\n  };\n\n  // Password input validation\n  var validatePassword = function validatePassword() {\n    return passwordMeter.getScore() === 100;\n  };\n\n  // Public functions\n  return {\n    // Initialization\n    init: function init() {\n      form = document.querySelector('#kt_free_trial_form');\n      submitButton = document.querySelector('#kt_free_trial_submit');\n      passwordMeter = KTPasswordMeter.getInstance(form.querySelector('[data-kt-password-meter=\"true\"]'));\n      handleForm();\n    }\n  };\n}();\n\n// On document ready\nKTUtil.onDOMContentLoaded(function () {\n  KTSignupFreeTrial.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2F1dGhlbnRpY2F0aW9uL3NpZ24tdXAvZnJlZS10cmlhbC5qcy5qcyIsIm1hcHBpbmdzIjoiQUFBYTs7QUFFYjtBQUNBLElBQUlBLGlCQUFpQixHQUFHLFlBQVc7RUFDL0I7RUFDQSxJQUFJQyxJQUFJO0VBQ1IsSUFBSUMsWUFBWTtFQUNoQixJQUFJQyxTQUFTO0VBQ2IsSUFBSUMsYUFBYTs7RUFFakI7RUFDQSxJQUFJQyxVQUFVLEdBQUcsU0FBYkEsVUFBVUEsQ0FBWUMsQ0FBQyxFQUFFO0lBQ3pCO0lBQ0FILFNBQVMsR0FBR0ksY0FBYyxDQUFDQyxjQUFjLENBQzlDUCxJQUFJLEVBQ0o7TUFDQ1EsTUFBTSxFQUFFO1FBQ1AsT0FBTyxFQUFFO1VBQ1VDLFVBQVUsRUFBRTtZQUNSQyxNQUFNLEVBQUU7Y0FDSkEsTUFBTSxFQUFFLDRCQUE0QjtjQUNwQ0MsT0FBTyxFQUFFO1lBQ2IsQ0FBQztZQUN0QkMsUUFBUSxFQUFFO2NBQ1RELE9BQU8sRUFBRTtZQUNWO1VBQ0Q7UUFDRCxDQUFDO1FBQ2MsVUFBVSxFQUFFO1VBQ1JGLFVBQVUsRUFBRTtZQUNSRyxRQUFRLEVBQUU7Y0FDTkQsT0FBTyxFQUFFO1lBQ2IsQ0FBQztZQUNERSxRQUFRLEVBQUU7Y0FDTkYsT0FBTyxFQUFFLDZCQUE2QjtjQUN0Q0UsUUFBUSxFQUFFLFNBQUFBLFNBQVNDLEtBQUssRUFBRTtnQkFDdEIsSUFBSUEsS0FBSyxDQUFDQyxLQUFLLENBQUNDLE1BQU0sR0FBRyxDQUFDLEVBQUU7a0JBQ3hCLE9BQU9DLGdCQUFnQixFQUFFO2dCQUM3QjtjQUNKO1lBQ0o7VUFDSjtRQUNKLENBQUM7UUFDRCxrQkFBa0IsRUFBRTtVQUNoQlIsVUFBVSxFQUFFO1lBQ1JHLFFBQVEsRUFBRTtjQUNORCxPQUFPLEVBQUU7WUFDYixDQUFDO1lBQ0RPLFNBQVMsRUFBRTtjQUNQQyxPQUFPLEVBQUUsU0FBQUEsUUFBQSxFQUFXO2dCQUNoQixPQUFPbkIsSUFB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QyxDQUFDOztFQUVEO0VBQ0EsT0FBTztJQUNIO0lBQ0FDLElBQUksRUFBRSxTQUFBQSxLQUFBLEVBQVc7TUFDYnRELElBQUksR0FBR3VELFFBQVEsQ0FBQ25DLGFBQWEsQ0FBQyxxQkFBcUIsQ0FBQztNQUNwRG5CLFlBQVksR0FBR3NELFFBQVEsQ0FBQ25DLGFBQWEsQ0FBQyx1QkFBdUIsQ0FBQztNQUM5RGpCLGFBQWEsR0FBR3FELGVBQWUsQ0FBQ0MsV0FBVyxDQUFDekQsSUFBSSxDQUFDb0IsYUFBYSxDQUFDLGlDQUFpQyxDQUFDLENBQUM7TUFFbEdoQixVQUFVLEVBQUU7SUFDaEI7RUFDSixDQUFDO0FBQ0wsQ0FBQyxFQUFFOztBQUVIO0FBQ0FzRCxNQUFNLENBQUNDLGtCQUFrQixDQUFDLFlBQVc7RUFDakM1RCxpQkFBaUIsQ0FBQ3VELElBQUksRUFBRTtBQUM1QixDQUFDLENBQUMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2F1dGhlbnRpY2F0aW9uL3NpZ24tdXAvZnJlZS10cmlhbC5qcz8zZTIzIl0sInNvdXJjZXNDb250ZW50IjpbIlwidXNlIHN0cmljdFwiO1xyXG5cclxuLy8gQ2xhc3MgRGVmaW5pdGlvblxyXG52YXIgS1RTaWdudXBGcmVlVHJpYWwgPSBmdW5jdGlvbigpIHtcclxuICAgIC8vIEVsZW1lbnRzXHJcbiAgICB2YXIgZm9ybTtcclxuICAgIHZhciBzdWJtaXRCdXR0b247XHJcbiAgICB2YXIgdmFsaWRhdG9yO1xyXG4gICAgdmFyIHBhc3N3b3JkTWV0ZXI7XHJcblxyXG4gICAgLy8gSGFuZGxlIGZvcm1cclxuICAgIHZhciBoYW5kbGVGb3JtID0gZnVuY3Rpb24oZSkge1xyXG4gICAgICAgIC8vIEluaXQgZm9ybSB2YWxpZGF0aW9uIHJ1bGVzLiBGb3IgbW9yZSBpbmZvIGNoZWNrIHRoZSBGb3JtVmFsaWRhdGlvbiBwbHVnaW4ncyBvZmZpY2lhbCBkb2N1bWVudGF0aW9uOmh0dHBzOi8vZm9ybXZhbGlkYXRpb24uaW8vXHJcbiAgICAgICAgdmFsaWRhdG9yID0gRm9ybVZhbGlkYXRpb24uZm9ybVZhbGlkYXRpb24oXHJcblx0XHRcdGZvcm0sXHJcblx0XHRcdHtcclxuXHRcdFx0XHRmaWVsZHM6IHtcdFx0XHRcdFx0IFxyXG5cdFx0XHRcdFx0J2VtYWlsJzoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB2YWxpZGF0b3JzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICByZWdleHA6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByZWdleHA6IC9eW15cXHNAXStAW15cXHNAXStcXC5bXlxcc0BdKyQvLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1lc3NhZ2U6ICdUaGUgdmFsdWUgaXMgbm90IGEgdmFsaWQgZW1haWwgYWRkcmVzcycsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9LFxyXG5cdFx0XHRcdFx0XHRcdG5vdEVtcHR5OiB7XHJcblx0XHRcdFx0XHRcdFx0XHRtZXNzYWdlOiAnRW1haWwgYWRkcmVzcyBpcyByZXF1aXJlZCdcclxuXHRcdFx0XHRcdFx0XHR9XHJcblx0XHRcdFx0XHRcdH1cclxuXHRcdFx0XHRcdH0sXHJcbiAgICAgICAgICAgICAgICAgICAgJ3Bhc3N3b3JkJzoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB2YWxpZGF0b3JzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBub3RFbXB0eToge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1lc3NhZ2U6ICdUaGUgcGFzc3dvcmQgaXMgcmVxdWlyZWQnXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY2FsbGJhY2s6IHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtZXNzYWdlOiAnUGxlYXNlIGVudGVyIHZhbGlkIHBhc3N3b3JkJyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjYWxsYmFjazogZnVuY3Rpb24oaW5wdXQpIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGlucHV0LnZhbHVlLmxlbmd0aCA+IDApIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHJldHVybiB2YWxpZGF0ZVBhc3N3b3JkKCk7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAgICAgICdjb25maXJtLXBhc3N3b3JkJzoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB2YWxpZGF0b3JzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBub3RFbXB0eToge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1lc3NhZ2U6ICdUaGUgcGFzc3dvcmQgY29uZmlybWF0aW9uIGlzIHJlcXVpcmVkJ1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlkZW50aWNhbDoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNvbXBhcmU6IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICByZXR1cm4gZm9ybS5xdWVyeVNlbGVjdG9yKCdbbmFtZT1cInBhc3N3b3JkXCJdJykudmFsdWU7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtZXNzYWdlOiAnVGhlIHBhc3N3b3JkIGFuZCBpdHMgY29uZmlybSBhcmUgbm90IHRoZSBzYW1lJ1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgICAgICAndG9jJzoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB2YWxpZGF0b3JzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBub3RFbXB0eToge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1lc3NhZ2U6ICdZb3UgbXVzdCBhY2NlcHQgdGhlIHRlcm1zIGFuZCBjb25kaXRpb25zJ1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgfSxcclxuICAgICAgICAgICAgICAgIHBsdWdpbnM6IHtcclxuXHRcdFx0XHRcdHRyaWdnZXI6IG5ldyBGb3JtVmFsaWRhdGlvbi5wbHVnaW5zLlRyaWdnZXIoe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBldmVudDoge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgcGFzc3dvcmQ6IGZhbHNlXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH0gIFxyXG4gICAgICAgICAgICAgICAgICAgIH0pLFxyXG5cdFx0XHRcdFx0Ym9vdHN0cmFwOiBuZXcgRm9ybVZhbGlkYXRpb24ucGx1Z2lucy5Cb290c3RyYXA1KHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgcm93U2VsZWN0b3I6ICcuZnYtcm93JyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgZWxlSW52YWxpZENsYXNzOiAnJyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgZWxlVmFsaWRDbGFzczogJydcclxuICAgICAgICAgICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICAgICAgfVx0XHRcdCBcclxuXHRcdFx0fVxyXG5cdFx0KTtcclxuXHJcbiAgICAgICAgc3VibWl0QnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcclxuICAgICAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cclxuICAgICAgICAgICAgdmFsaWRhdG9yLnJldmFsaWRhdGVGaWVsZCgncGFzc3dvcmQnKTtcclxuXHJcbiAgICAgICAgICAgIHZhbGlkYXRvci52YWxpZGF0ZSgpLnRoZW4oZnVuY3Rpb24oc3RhdHVzKSB7XHJcblx0XHQgICAgICAgIGlmIChzdGF0dXMgPT0gJ1ZhbGlkJykge1xyXG4gICAgICAgICAgICAgICAgICAgIC8vIFNob3cgbG9hZGluZyBpbmRpY2F0aW9uXHJcbiAgICAgICAgICAgICAgICAgICAgc3VibWl0QnV0dG9uLnNldEF0dHJpYnV0ZSgnZGF0YS1rdC1pbmRpY2F0b3InLCAnb24nKTtcclxuXHJcbiAgICAgICAgICAgICAgICAgICAgLy8gRGlzYWJsZSBidXR0b24gdG8gYXZvaWQgbXVsdGlwbGUgY2xpY2sgXHJcbiAgICAgICAgICAgICAgICAgICAgc3VibWl0QnV0dG9uLmRpc2FibGVkID0gdHJ1ZTtcclxuXHJcbiAgICAgICAgICAgICAgICAgICAgLy8gU2ltdWxhdGUgYWpheCByZXF1ZXN0XHJcbiAgICAgICAgICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbigpIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgLy8gSGlkZSBsb2FkaW5nIGluZGljYXRpb25cclxuICAgICAgICAgICAgICAgICAgICAgICAgc3VibWl0QnV0dG9uLnJlbW92ZUF0dHJpYnV0ZSgnZGF0YS1rdC1pbmRpY2F0b3InKTtcclxuXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIC8vIEVuYWJsZSBidXR0b25cclxuICAgICAgICAgICAgICAgICAgICAgICAgc3VibWl0QnV0dG9uLmRpc2FibGVkID0gZmFsc2U7XHJcblxyXG4gICAgICAgICAgICAgICAgICAgICAgICAvLyBTaG93IG1lc3NhZ2UgcG9wdXAuIEZvciBtb3JlIGluZm8gY2hlY2sgdGhlIHBsdWdpbidzIG9mZmljaWFsIGRvY3VtZW50YXRpb246IGh0dHBzOi8vc3dlZXRhbGVydDIuZ2l0aHViLmlvL1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBTd2FsLmZpcmUoe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dDogXCJZb3UgaGF2ZSBzdWNjZXNzZnVsbHkgcmVnaXN0ZXJlZCFcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGljb246IFwic3VjY2Vzc1wiLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgYnV0dG9uc1N0eWxpbmc6IGZhbHNlLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6IFwiT2ssIGdvdCBpdCFcIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGN1c3RvbUNsYXNzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvbjogXCJidG4gYnRuLXByaW1hcnlcIlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9KS50aGVuKGZ1bmN0aW9uIChyZXN1bHQpIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlmIChyZXN1bHQuaXNDb25maXJtZWQpIHsgXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZm9ybS5yZXNldCgpOyAgLy8gcmVzZXQgZm9ybSAgICAgICAgICAgICAgICAgICAgXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcGFzc3dvcmRNZXRlci5yZXNldCgpOyAgLy8gcmVzZXQgcGFzc3dvcmQgbWV0ZXJcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAvL2Zvcm0uc3VibWl0KCk7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH0pO1xyXG4gICAgICAgICAgICAgICAgICAgIH0sIDE1MDApOyAgIFx0XHRcdFx0XHRcdFxyXG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgICAgICAvLyBTaG93IGVycm9yIHBvcHVwLiBGb3IgbW9yZSBpbmZvIGNoZWNrIHRoZSBwbHVnaW4ncyBvZmZpY2lhbCBkb2N1bWVudGF0aW9uOiBodHRwczovL3N3ZWV0YWxlcnQyLmdpdGh1Yi5pby9cclxuICAgICAgICAgICAgICAgICAgICBTd2FsLmZpcmUoe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB0ZXh0OiBcIlNvcnJ5LCBsb29rcyBsaWtlIHRoZXJlIGFyZSBzb21lIGVycm9ycyBkZXRlY3RlZCwgcGxlYXNlIHRyeSBhZ2Fpbi5cIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgaWNvbjogXCJlcnJvclwiLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBidXR0b25zU3R5bGluZzogZmFsc2UsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b25UZXh0OiBcIk9rLCBnb3QgaXQhXCIsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGN1c3RvbUNsYXNzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uOiBcImJ0biBidG4tcHJpbWFyeVwiXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICB9KTtcclxuICAgICAgICAgICAgICAgIH1cclxuXHRcdCAgICB9KTtcclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgZm9ybS5xdWVyeVNlbGVjdG9yKCdpbnB1dFtuYW1lPVwicGFzc3dvcmRcIl0nKS5hZGRFdmVudExpc3RlbmVyKCdpbnB1dCcsIGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICBpZiAodGhpcy52YWx1ZS5sZW5ndGggPiAwKSB7XHJcbiAgICAgICAgICAgICAgICB2YWxpZGF0b3IudXBkYXRlRmllbGRTdGF0dXMoJ3Bhc3N3b3JkJywgJ05vdFZhbGlkYXRlZCcpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG4gICAgLy8gUGFzc3dvcmQgaW5wdXQgdmFsaWRhdGlvblxyXG4gICAgdmFyIHZhbGlkYXRlUGFzc3dvcmQgPSBmdW5jdGlvbigpIHtcclxuICAgICAgICByZXR1cm4gIChwYXNzd29yZE1ldGVyLmdldFNjb3JlKCkgPT09IDEwMCk7XHJcbiAgICB9XHJcblxyXG4gICAgLy8gUHVibGljIGZ1bmN0aW9uc1xyXG4gICAgcmV0dXJuIHtcclxuICAgICAgICAvLyBJbml0aWFsaXphdGlvblxyXG4gICAgICAgIGluaXQ6IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICBmb3JtID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2t0X2ZyZWVfdHJpYWxfZm9ybScpO1xyXG4gICAgICAgICAgICBzdWJtaXRCdXR0b24gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcja3RfZnJlZV90cmlhbF9zdWJtaXQnKTtcclxuICAgICAgICAgICAgcGFzc3dvcmRNZXRlciA9IEtUUGFzc3dvcmRNZXRlci5nZXRJbnN0YW5jZShmb3JtLnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLWt0LXBhc3N3b3JkLW1ldGVyPVwidHJ1ZVwiXScpKTtcclxuXHJcbiAgICAgICAgICAgIGhhbmRsZUZvcm0oKTtcclxuICAgICAgICB9XHJcbiAgICB9O1xyXG59KCk7XHJcblxyXG4vLyBPbiBkb2N1bWVudCByZWFkeVxyXG5LVFV0aWwub25ET01Db250ZW50TG9hZGVkKGZ1bmN0aW9uKCkge1xyXG4gICAgS1RTaWdudXBGcmVlVHJpYWwuaW5pdCgpO1xyXG59KTtcclxuXHJcblxyXG4gIl0sIm5hbWVzIjpbIktUU2lnbnVwRnJlZVRyaWFsIiwiZm9ybSIsInN1Ym1pdEJ1dHRvbiIsInZhbGlkYXRvciIsInBhc3N3b3JkTWV0ZXIiLCJoYW5kbGVGb3JtIiwiZSIsIkZvcm1WYWxpZGF0aW9uIiwiZm9ybVZhbGlkYXRpb24iLCJmaWVsZHMiLCJ2YWxpZGF0b3JzIiwicmVnZXhwIiwibWVzc2FnZSIsIm5vdEVtcHR5IiwiY2FsbGJhY2siLCJpbnB1dCIsInZhbHVlIiwibGVuZ3RoIiwidmFsaWRhdGVQYXNzd29yZCIsImlkZW50aWNhbCIsImNvbXBhcmUiLCJxdWVyeVNlbGVjdG9yIiwicGx1Z2lucyIsInRyaWdnZXIiLCJUcmlnZ2VyIiwiZXZlbnQiLCJwYXNzd29yZCIsImJvb3RzdHJhcCIsIkJvb3RzdHJhcDUiLCJyb3dTZWxlY3RvciIsImVsZUludmFsaWRDbGFzcyIsImVsZVZhbGlkQ2xhc3MiLCJhZGRFdmVudExpc3RlbmVyIiwicHJldmVudERlZmF1bHQiLCJyZXZhbGlkYXRlRmllbGQiLCJ2YWxpZGF0ZSIsInRoZW4iLCJzdGF0dXMiLCJzZXRBdHRyaWJ1dGUiLCJkaXNhYmxlZCIsInNldFRpbWVvdXQiLCJyZW1vdmVBdHRyaWJ1dGUiLCJTd2FsIiwiZmlyZSIsInRleHQiLCJpY29uIiwiYnV0dG9uc1N0eWxpbmciLCJjb25maXJtQnV0dG9uVGV4dCIsImN1c3RvbUNsYXNzIiwiY29uZmlybUJ1dHRvbiIsInJlc3VsdCIsImlzQ29uZmlybWVkIiwicmVzZXQiLCJ1cGRhdGVGaWVsZFN0YXR1cyIsImdldFNjb3JlIiwiaW5pdCIsImRvY3VtZW50IiwiS1RQYXNzd29yZE1ldGVyIiwiZ2V0SW5zdGFuY2UiLCJLVFV0aWwiLCJvbkRPTUNvbnRlbnRMb2FkZWQiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/authentication/sign-up/free-trial.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/authentication/sign-up/free-trial.js"]();
/******/ 	
/******/ })()
;