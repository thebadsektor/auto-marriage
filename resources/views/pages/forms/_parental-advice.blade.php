<div class="modal fade" tabindex="-1" id="form1_modal">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Browse Parental Advice Records</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-1"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <table id="parental-form-table"
                            class="table table-row-bordered border rounded gy-5 gs-7">
                            <thead>
                                <tr class="fw-bold fs-6 text-gray-800 px-7">
                                    <th scope="col">Groom</th>
                                    <th scope="col">Bride</th>
                                    <th scope="col">Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="py-5 fw-semibold  border-bottom border-gray-300 fs-6">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer mt-0">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i
                        class="fa fa-close"></i>Close</button>
                {{-- <button type="button" class="btn btn-primary me-10" id="btn_process_owner">
                    <span class="indicator-label"><i class="fa fa-save"></i>
                        Save
                    </span>
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button> --}}
            </div>
        </div>
    </div>
</div>
