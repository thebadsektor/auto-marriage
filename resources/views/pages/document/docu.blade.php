<x-base-layout>
    <div class="row gy-10 gx-xl-10">
        <div class="col-xl-12">
            <div class="card rounded border border-secondary">
                <div class="card-header">
                    <h3 class="card-title">New Document</h3>
                    <div class="card-toolbar">
                        {{-- <button type="button" class="btn btn-sm btn-light">
                            <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                                <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"/>
                                <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"/>
                                </svg>
                                </span>
                        </button> --}}
                    </div>
                </div>
                <div class="card-body">
                {{-- begin::Stepper --}}
                <div class="stepper stepper-pills" id="kt_stepper_example_clickable">
                    <!--begin::Nav-->
                    <div class="stepper-nav justify-content-center mb-10">
                        <!--begin::Step 1 (Application)-->
                        <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <!--begin::Wrapper-->
                            <div class="stepper-wrapper d-flex align-items-center">
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">1</span>
                                </div>
                                <!--end::Icon-->
                                
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Application
                                    </h3>

                                    <div class="stepper-desc">
                                        {{-- Description --}}
                                    </div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Line-->
                            <div class="stepper-line h-40px"></div>
                            <!--end::Line-->
                        </div>
                        <!--end::Step 1-->

                        <!--begin::Step 2-->
                        <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <!--begin::Wrapper-->
                            <div class="stepper-wrapper d-flex align-items-center">
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">2</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Assessment
                                    </h3>

                                    <div class="stepper-desc">
                                        {{-- Description --}}
                                    </div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Line-->
                            <div class="stepper-line h-40px"></div>
                            <!--end::Line-->
                        </div>
                        <!--end::Step 2-->

                        <!--begin::Step 3-->
                        <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                        <!--begin::Wrapper-->
                            <div class="stepper-wrapper d-flex align-items-center">
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">3</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Approval
                                    </h3>

                                    <div class="stepper-desc">
                                        {{-- Description --}}
                                    </div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Line-->
                            <div class="stepper-line h-40px"></div>
                            <!--end::Line-->
                        </div>
                        <!--end::Step 3-->

                        <!--begin::Step 5-->
                        <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <!--begin::Wrapper-->
                            <div class="stepper-wrapper d-flex align-items-center">
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">4</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Release
                                    </h3>

                                    <div class="stepper-desc">
                                        {{-- Description --}}
                                    </div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 5-->
                    </div>
                    <!--end::Nav-->

                    <!--begin::Form-->
                    <form class="form" novalidate="novalidate" id="kt_stepper_example_basic_form">
                        <!--begin::Group-->
                        <div class="mb-5">
                            <!--begin::Step 1-->
                            <div class="flex-column current" data-kt-stepper-element="content">

                                <!-- begin::Requirements -->
                                <div class="card border border-secondary mb-10">
                                    <div id="kt_docs_card_collapsible_requirements" class="collapse show">
                                        <div class="card-body">
                                            <div class="mb-5">
                                                <label class="form-label fs-6 fw-bolder text-dark">{{ __("Maravel") }}</label>
                                                <div class="d-flex align-items-center gap-5 mb-5">
                                                    <span id="spinner-maravel" class="spinner-border spinner-border-sm align-middle d-none"></span>
                                                    <div id="form-check-maravel-wrapper" class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                                                        <input id="form-check-maravel" class="form-check-input" type="checkbox" style="pointer-events: none"/>
                                                    </div>
                                                    <input id="input-maravel" class="form-control form-control-solid" type="file" name="file">
                                                    <i id="delete-maravel" class="bi bi-x-circle-fill fs-2 text-danger d-none" style='cursor: pointer'></i>
                                                </div>
                                                <!-- begin::Checkbox validation -->
                                                <script>
                                                    document.addEventListener("DOMContentLoaded", function(event) {
                                                        document.querySelector('#input-maravel').addEventListener("change", () => {
                                                            if (document.querySelector('#input-maravel').files.length != 0) {
                                                                document.querySelector('#form-check-maravel-wrapper').classList.add('d-none');
                                                                document.querySelector('#spinner-maravel').classList.remove('d-none');
                                                                setTimeout(function() { 
                                                                    document.querySelector('#spinner-maravel').classList.add('d-none');
                                                                    document.querySelector('#form-check-maravel').setAttribute("checked", true);
                                                                    document.querySelector('#form-check-maravel-wrapper').classList.remove('d-none');
                                                                    document.querySelector('#delete-maravel').classList.remove('d-none');
                                                                }, 2000);
                                                            } else {
                                                                 document.querySelector('#form-check-maravel').setAttribute("checked", false);
                                                                 document.querySelector('#delete-maravel').classList.remove('d-none');
                                                            }
                                                        });

                                                        // remove file

                                                        document.querySelector('#delete-maravel').addEventListener('click', () => {
                                                            document.querySelector('#input-maravel').file.value = '';
                                                            document.querySelector('#form-check-maravel').setAttribute('checked', false);
                                                            document.querySelector('#delete-maravel').classList.add('d-none');
                                                        });
                                                    
                                                    });
                                                </script>
                                                <!-- end:Checkbox validation -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end::Requirements -->

                            </div>  
                            <!--end::Step 1-->

                            <!--begin::Step 2-->
                            <div class="flex-column" data-kt-stepper-element="content">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Example Label 1</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="input1" placeholder="" value=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Example Label 2</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <textarea class="form-control form-control-solid" rows="3" name="input2" placeholder=""></textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--begin::Step 2-->

                            <!--begin::Step 3-->
                            <div class="flex-column" data-kt-stepper-element="content">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label d-flex align-items-center">
                                        <span class="required">Input 1</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Example tooltip"></i>
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="input1" placeholder="" value=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">
                                        Input 2
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="input2" placeholder="" value=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--begin::Step 3-->

                            <!--begin::Step 4-->
                            <div class="flex-column" data-kt-stepper-element="content">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label d-flex align-items-center">
                                        <span class="required">Input 1</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Example tooltip"></i>
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="input1" placeholder="" value=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">
                                        Input 2
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="input2" placeholder="" value=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">
                                        Input 3
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="input3" placeholder="" value=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--begin::Step 4-->
                        </div>
                        <!--end::Group-->

                        <!--begin::Actions-->
                        <div class="d-flex flex-stack">
                            <!--begin::Wrapper-->
                            <div class="me-2">
                                <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
                                    Back
                                </button>
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Wrapper-->
                            <div>
                                <button type="button" class="btn btn-primary" data-kt-stepper-action="submit">
                                    <span class="indicator-label">
                                        Submit
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>

                                <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                    Continue
                                </button>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <script>
                document.addEventListener("DOMContentLoaded", function(event) { 
                    // Stepper lement
                    var element = document.querySelector("#kt_stepper_example_clickable");
                    // Initialize Stepper
                    var stepper = new KTStepper(element);
                    // Handle navigation click
                    stepper.on("kt.stepper.click", function (stepper) {
                        stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
                    });
                    // Handle next step
                    stepper.on("kt.stepper.next", function (stepper) {
                        stepper.goNext(); // go next step
                    });
                    // Handle previous step
                    stepper.on("kt.stepper.previous", function (stepper) {
                        stepper.goPrevious(); // go previous step
                    });
                });
                </script>
                {{-- end::Stepper --}}
                </div>
                <div class="card-footer">
                    &nbsp;
                </div>
            </div>
            @if (isset($businesses) && count($businesses) > 0)
                <div class="row">
                    <div class="col">
                        {{ $businesses->links() }}
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-base-layout>
