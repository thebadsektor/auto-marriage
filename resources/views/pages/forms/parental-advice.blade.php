<x-base-layout>
    <div class="row gy-10 gx-xl-10">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Parental Advice</h3>
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-sm btn-light" id="btn_owner" data-bs-toggle="modal" data-bs-target="#form1_modal">
                            Browse
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form id="form-process-form" method="POST" action="{{ route('process-parental-advice') }}">
                        @csrf
                        <div class="table-responsive">
                            <table class="table-bordered">
                                <thead>
                                    <tr>
                                        <td class="py-5 px-5">
                                            <h5>(MUNICIPAL FORM NO. 67)</h5>
                                            <h4 class="text-center"> FORM NO.7 </h4>
                                            <h1 class="text-center "> SWORN STATEMENT THAT ADVICE OF PARENT OR GUARDIAN HAS BEEN ASKED</h1>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-5 px-5 d-flex flex-column gap-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="text-nowrap">City or Municipality of</div>
                                                <input class="form-control h-30px fw-normal" type="text" name="municipality" style="background-color: #F2F0F0; width: 180px">
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="text-nowrap">Province of</div>
                                                <input class="form-control h-30px fw-normal" type="text" name="province" style="background-color: #F2F0F0; width: 180px">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="py-5 px-5">
                                            <div>I, <input class="form-control h-30px fw-normal d-inline-block" type="text" name="name" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px"> resident of <input class="form-control h-30px fw-normal d-inline-block" type="text" name="address"
                                                    style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px"> and aged {above twenty and under twenty-five, above eighteen but under twenty-three} years of being duly sworn, do
                                                hereby
                                                depose and
                                                say
                                                that I have
                                                asked my {parents,
                                                guardians} for advice upon my intended marriage with <input class="form-control h-30px fw-normal d-inline-block" type="text" name="name_partner" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px"> and that the advice given is attached hereto or has been refused.
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-5 px-5">
                                            <p class="text-center"> ____________________________________</p>
                                            <p class="text-center"> (Signature of person obliged to ask advice)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-5 px-5 d-flex flex-column gap-3">
                                            <p>SUBSCRIBED AND SWORN to before me this
                                                <input class="form-control h-30px fw-normal d-inline-block" type="number" name="day" style="background-color: #F2F0F0; width: 60px; margin-left: 4px; margin-right: 4px">
                                                day of
                                                <select class="form-control h-30px fw-normal d-inline-block py-1" name="month" style="background-color: #F2F0F0; width: 140px; margin-left: 4px; margin-right: 4px">
                                                    <option value="01">January</option>
                                                    <option value="02">February</option>
                                                    <option value="03">March</option>
                                                    <option value="04">April</option>
                                                    <option value="05">May</option>
                                                    <option value="06">June</option>
                                                    <option value="07">July</option>
                                                    <option value="08">August</option>
                                                    <option value="09">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>

                                                , <input class="form-control h-30px fw-normal d-inline-block" type="number" name="year" style="background-color: #F2F0F0; width: 100px; margin-left: 4px; margin-right: 4px">, at <input class="form-control h-30px fw-normal d-inline-block" type="text" name="sworn_address"
                                                    style="background-color: #F2F0F0; width: 200px; margin-left: 4px; margin-right: 4px">, Philippines.
                                            </p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="py-5 px-5">
                                            <p class="text-center"> _______________________________________</p>
                                            <p class="text-center"> (Signature of person administering oath)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-5 px-5">
                                            <p class="text-center"> ___________________________________________</p>
                                            <p class="text-center"> (Position)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-5 px-5">
                                            <h4 class="text-center"> INSTRUCTIONS </h4>
                                            <p><span class="fw-bolder">1.</span> Each applicant shall be required to accomplish this form if within the ages indicated above. </p>
                                            <p><span class="fw-bolder">2.</span> In case the advice has not been obtained, or if it be unfavorable, the Marriage License (Form No. 10) should be annotated above the signature of the Local Civil Registrar in the following manner. “Note: The advice upon the intended marriage of <input class="form-control fw-normal d-inline-block" type="text"
                                                    name="name2" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px; height: 28px;"> with <input class="form-control fw-normal d-inline-block" type="text" name="name_partner2" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px; margin-top: 8px; height: 28px;"> not having been
                                                obtained or having been refused, the marriage shall not take place till after three months following completion of the publication, on
                                                <select name="publish_month" class="form-control h-24px fw-normal d-inline-block py-1" style="background-color: #F2F0F0; width: 140px; margin-left: 4px; margin-right: 4px; margin-top: 8px; height: 28px;">
                                                    <option value="01">January</option>
                                                    <option value="02">February</option>
                                                    <option value="03">March</option>
                                                    <option value="04">April</option>
                                                    <option value="05">May</option>
                                                    <option value="06">June</option>
                                                    <option value="07">July</option>
                                                    <option value="08">August</option>
                                                    <option value="09">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>, 20<input class="form-control fw-normal d-inline-block" type="number" name="publish_year" style="background-color: #F2F0F0; width: 45px; margin-left: 4px; margin-right: 4px;  height: 28px;">, of the application for marriage license.”
                                            </p>
                                            <p>*Cross out unnecessary words</p>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary me-10" id="btn_process_form">
                                        <span class="indicator-label"><i class="fa fa-save"></i>
                                            Save
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('pages.forms._parental-advice')
</x-base-layout>
<script>
    $.ajax({
        url: "/parental-forms/all",
        type: "GET",
        dataType: "json",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(response) {
            console.log(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });

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
                "ajax": "/parental-forms/all",
                "columns": [{
                        "data": "municipality"
                    },
                    {
                        "data": "province"
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "address"
                    }
                ],
                "createdRow": function(row, data, dataIndex) {
                    console.log("Data used to create row:", data);
                    $(row).attr('data-id', data.id);
                    $(row).attr('data-municipality', data.municipality);
                    $(row).attr('data-province', data.province);
                    $(row).attr('data-name', data.name);
                    $(row).attr('data-address', data.address);
                    $(row).attr('data-name_partner', data.name_partner);
                    $(row).attr('data-day', data.day);
                    $(row).attr('data-month', data.month);
                    $(row).attr('data-year', data.year);
                    $(row).attr('data-sworn_address', data.sworn_address);
                    $(row).attr('data-publish_month', data.publish_month);
                    $(row).attr('data-publish_year', data.publish_year);
                    $(row).attr('data-created', data.created_at);
                    $(row).attr('data-updated', data.updated_at);
                    $(row).addClass('selectable');
                }
            }));
            return table;
        }

        let dataTable = initializeDataTable();

        $('#btn_process_form').on('click', function(event) {

            var form = $('#form-process-form');
            var url = form.attr('action');
            var method = form.attr('method');
            var data = form.serialize();
            var personId = $('#record-id').val();

            // Check if owner_id field is present
            if (data.indexOf('record-id=') !== -1) {
                console.log('Update!');
            } else {
                console.log('New!');
            }

            $.ajax({
                url: '/parental-form/process',
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
                        timer: 1500
                    }).then(() => {
                        console.log(response.message)
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
    });
</script>
