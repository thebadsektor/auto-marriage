<x-base-layout>
    <div class="row gy-10 gx-xl-10">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <form id="form-process-form" method="POST" action="{{ route('process-parental-advice2') }}" class="w-100">
                        @csrf
                        <div class="w-100 d-flex align-items-center">
                            <h3 class="card-title fw-bold text-nowrap">Parental Advice (2)</h3><input class="form-control h-30px fw-normal d-inline-block" type="text" id="form_id" name="form_id" style="background-color: #F2F0F0; width: 60px; margin-left: 4px; margin-right: 4px" disabled>
                            <a href="#" id="btn_clear" class="btn btn-sm btn-secondary d-flex justify-content-center align-items-center" style="font-size: 11px; height: 30px; width: 50px;">Clear</a>
                            <div class="w-100 card-toolbar justify-content-end">
                                <button type="button" class="btn btn-sm btn-info" id="btn_clear" data-bs-toggle="modal" data-bs-target="#form2_modal">
                                    Browse
                                </button>
                            </div>
                        </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <td colspan="20">
                                        <div class="px-5 py-5">
                                            <h5>MUNICIPAL FORM NO. 68 (FORM NO. 8)</h5>
                                            <h1 class="text-center "> ADVICE UPON INTENDED MARRIAGE</h1>
                                            <h3 class="text-center"> (FOR MALE)</h3>
                                        </div>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="20">
                                        <div class="px-5 py-5 d-flex flex-column gap-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="text-nowrap">Place</div>
                                                <input class="form-control h-30px fw-normal" type="text" id="address" name="address" style="background-color: #F2F0F0; width: 180px">
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="text-nowrap">To</div>
                                                <input class="form-control h-30px fw-normal" type="text" id="name_male" name="name_male" style="background-color: #F2F0F0; width: 180px">
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="20">
                                        <p class="py-5 px-5">Our/My advice upon your intended marriage with <input class="form-control h-30px fw-normal d-inline-block" type="text" id="name_female" name="name_female" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px"> having been asked by you, and knowing no legal impediment to this marriage, we/I hereby advice you to marry
                                            her.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="10">
                                        <div class="px-5 py-5">
                                            <p class="text-center"> ____________________________________</p>
                                            <p class="text-center"> (Signature of father) </p>
                                        </div>
                                    </td>
                                    <td colspan="10">
                                        <div class="px-5 py-5">
                                            <p class="text-center"> ____________________________________</p>
                                            <p class="text-center"> (Signature of motther) </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="20">
                                        <div class="px-5 py-5">
                                            <p class="text-center"> ____________________________________</p>
                                            <p class="text-center"> (Signature of Legal Guardian or Head of Welfare Institution) </p>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="20">
                                        <div class="px-5 py-5">
                                            <h1 class="text-center "> ADVICE UPON INTENDED MARRIAGE</h1>
                                            <h3 class="text-center"> (FOR FEMALE)</h3>
                                        </div>
                                    </td>
                                </tr>
                                </thead>
                            <tbody>
                                <tr>
                                    <td colspan="20">
                                        <div class="px-5 py-5 d-flex flex-column gap-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="text-nowrap">Place</div>
                                                <input class="form-control h-30px fw-normal" type="text" id="address2" name="address2" style="background-color: #F2F0F0; width: 180px">
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="text-nowrap">To</div>
                                                <input class="form-control h-30px fw-normal" type="text" name="name_female2" style="background-color: #F2F0F0; width: 180px">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="20">
                                        <div class="px-5 py-5">
                                            <p>Our/My advice upon your intended marriage with <input class="form-control h-30px fw-normal d-inline-block" type="text" name="name_male2" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px"> having been asked by you, and knowing no legal impediment to this marriage, we/I hereby advice you to marry her.</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="10">
                                        <div class="px-5 py-5">
                                            <p class="text-center"> ____________________________________</p>
                                            <p class="text-center"> (Signature of father) </p>
                                        </div>
                                    </td>
                                    <td colspan="10">
                                        <div class="px-5 py-5">
                                            <p class="text-center"> ____________________________________</p>
                                            <p class="text-center"> (Signature of motther) </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="20">
                                        <div class="px-5 py-5">
                                            <p class="text-center"> ____________________________________</p>
                                            <p class="text-center"> (Signature of Legal Guardian or Head of Welfare Institution) </p>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="20">
                                        <div class="px-5 py-5">
                                            <h4 class="text-center"> INSTRUCTIONS </h4>
                                            <p><span class="fw-bolder">1.</span> Both parents are required to sign the advice if living. </p>
                                            <p><span class="fw-bolder">2.</span> The advice together with the sworn statement that the advice has been asked (See Form No. 7) shall accompany the application for marriage license. (Rep. Act 386, Art. 62).</p>
                                            <p class="text-center">(Cross out unnecessary words)</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('pages.forms._parental-advice2')
</x-base-layout>
<script>
    $(document).ready(function() {
        // Common DataTable configuration object
        let dataTableConfig = {
            "language": {
                "lengthMenu": "Show _MENU_",
            },
            "select": true,
            "pageLength": 5,
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +
                "<'table-responsive'tr>" +
                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">" +
                "<'row'>"
        };

        function initializeDataTable() {
            let table = $('#parental-form-table').DataTable($.extend(dataTableConfig, {
            "processing": true,
            "serverSide": true,
            "ajax": "/parental-form2s/all",
            "columns": [
                { "data": "name_male" },
                { "data": "name_female" },
                { "data": "address" },
                { "data": "address2" }
            ],
            "createdRow": function(row, data, dataIndex) {
                console.log("Data used to create row:", data);
                $(row).attr('data-id', data.id);
                $(row).attr('data-data-address', data.municipality);
                $(row).attr('data-address2', data.province);
                $(row).attr('data-name-male', data.name);
                $(row).attr('data-name-female', data.address);
                $(row).attr('data-created', data.created_at);
                $(row).attr('data-updated', data.updated_at);
                $(row).addClass('selectable');
            }
            }));
            return table;
        }

        let dataTable = initializeDataTable();

        // Call this to refresh the DataTable
        function refreshDataTable() {
            dataTable.ajax.reload();
        }

        $('#btn_process_form').on('click', function(event) {

        var form = $('#form-process-form');
        var url = form.attr('action');
        var method = form.attr('method');
        var data = form.serialize();
        var form_id = $('#form_id').val();
        console.log(data);
        // Check if owner_id field is present
        if (data.indexOf('form_id=') !== -1) {
            console.log('Update!');
        } else {
            console.log('New!');
        }

        $.ajax({
            url: '/parental-form2/process',
            method: method,
            data: data,
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function() {
                // Show loading indicator
                $('#btn_process_form .indicator-label').hide();
                $('#btn_process_form .indicator-progress').show();
            },
            success: function(response) {
                // Hide loading indicator
                $('#btn_process_form .indicator-label').show();
                $('#btn_process_form .indicator-progress').hide();

                // Show success message in SweetAlert
                Swal.fire({
                    title: 'Success',
                    text: response.message,
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 2000
                }).then(() => {
                    refreshDataTable();
                });
            },
            error: function(response) {
                // Hide loading indicator
                $('#btn_process_form .indicator-label').show();
                $('#btn_process_form .indicator-progress').hide();

                // Show error message in SweetAlert
                Swal.fire({
                    title: 'Error',
                    text: response.responseJSON.message,
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        });
    });

</script>