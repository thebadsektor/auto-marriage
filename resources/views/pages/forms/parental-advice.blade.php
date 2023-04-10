<x-base-layout>
    <div class="row gy-10 gx-xl-10">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <form id="form-process-form" method="POST" action="{{ route('process-parental-advice2') }}" class="w-100">
                        @csrf
                        <div class="w-100 d-flex align-items-center">
                            <h3 class="card-title fw-bold text-nowrap">Parental Advice</h3><input class="form-control h-30px fw-normal d-inline-block" type="text" id="form_id" name="form_id" style="background-color: #F2F0F0; width: 60px; margin-left: 4px; margin-right: 4px" readonly>
                            <a href="#" id="btn_clear" class="btn btn-sm btn-secondary d-flex justify-content-center align-items-center" style="font-size: 11px; height: 30px; width: 50px;">Clear</a>
                            <div class="w-100 card-toolbar justify-content-end">
                                <button type="button" class="btn btn-sm btn-info" id="btn_clear" data-bs-toggle="modal" data-bs-target="#form1_modal">
                                    Browse
                                </button>
                                <a href="" class="btn fs-8">

                                    <i class="fa fa-print"></i>Print
                                </a>
                            </div>
                        </div>
                </div>
                <div class="card-body">
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
                                                <input class="form-control h-30px fw-normal" type="text" id="municipality" name="municipality" style="background-color: #F2F0F0; width: 180px">
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="text-nowrap">Province of</div>
                                                <input class="form-control h-30px fw-normal" type="text" id="province" name="province" style="background-color: #F2F0F0; width: 180px">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="py-5 px-5">
                                            <div>I, <input class="form-control h-30px fw-normal d-inline-block" type="text" id="name" name="name" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px"> resident of <input class="form-control h-30px fw-normal d-inline-block" type="text"  id="address" name="address"
                                                    style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px"> and aged {above twenty and under twenty-five, above eighteen but under twenty-three} years of being duly sworn, do
                                                hereby
                                                depose and
                                                say
                                                that I have
                                                asked my {parents,
                                                guardians} for advice upon my intended marriage with <input class="form-control h-30px fw-normal d-inline-block" type="text" id="name_partner" name="name_partner" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px"> and that the advice given is attached hereto or has been refused.
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
                                                <input class="form-control h-30px fw-normal d-inline-block" type="number" id="day" name="day" style="background-color: #F2F0F0; width: 60px; margin-left: 4px; margin-right: 4px">
                                                day of
                                                <select class="form-control h-30px fw-normal d-inline-block py-1" id="month" name="month" style="background-color: #F2F0F0; width: 140px; margin-left: 4px; margin-right: 4px">
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

                                                , <input class="form-control h-30px fw-normal d-inline-block" type="number" id="year" name="year" style="background-color: #F2F0F0; width: 100px; margin-left: 4px; margin-right: 4px">, at <input class="form-control h-30px fw-normal d-inline-block" type="text" id="sworn_address" name="sworn_address"
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
                                                id="name2" name="name2" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px; height: 28px;"> with <input class="form-control fw-normal d-inline-block" type="text" id="name_partner2" name="name_partner2" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px; margin-top: 8px; height: 28px;"> not having been
                                                obtained or having been refused, the marriage shall not take place till after three months following completion of the publication, on
                                                <select id="publish_month" name="publish_month" class="form-control h-24px fw-normal d-inline-block py-1" style="background-color: #F2F0F0; width: 140px; margin-left: 4px; margin-right: 4px; margin-top: 8px; height: 28px;">
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
                                                </select>, 20<input class="form-control fw-normal d-inline-block" type="number" id="publish_year" name="publish_year" style="background-color: #F2F0F0; width: 70px; margin-left: 4px; margin-right: 4px;  height: 28px;">, of the application for marriage license.”
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
        "columns": [
            { "data": "name" },
            { "data": "name_partner" },
            { "data": "municipality" },
            { "data": "province" }
        ],
        "createdRow": function(row, data, dataIndex) {
            console.log("Data used to create row:", data);
            $(row).attr('data-id', data.id);
            $(row).attr('data-municipality', data.municipality);
            $(row).attr('data-province', data.province);
            $(row).attr('data-name', data.name);
            $(row).attr('data-address', data.address);
            $(row).attr('data-name-partner', data.name_partner);
            $(row).attr('data-day', data.day);
            $(row).attr('data-month', data.month);
            $(row).attr('data-year', data.year);
            $(row).attr('data-sworn-address', data.sworn_address);
            $(row).attr('data-publish-month', data.publish_month);
            $(row).attr('data-publish-year', data.publish_year);
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

    jQuery(function() {
        $('#parental-form-table').on('click', 'tr.selectable', function() {
            let form_id = $(this).data('id');
            let municipality = $(this).data('municipality');
            let province = $(this).data('province');
            let name = $(this).data('name');
            let address = $(this).data('address');
            let name_partner = $(this).data('name-partner');
            let day = $(this).data('day');
            let year = $(this).data('year');
            let sworn_address = $(this).data('sworn-address');
            let publish_month = $(this).data('publish-month');
            let publish_year = $(this).data('publish-year');
            const created_at = new Date($(this).data('created-at')).toLocaleString();
            const updated_at = new Date($(this).data('updated-at')).toLocaleString();
            // do something with the selected row ID
            console.log(form_id);
            $('#form_id').val(form_id);
            $('#municipality').val(municipality);
            $('#province').val(province);
            $('#name').val(name);
            $('#name2').val(name);
            $('#address').val(address);
            $('#name_partner').val(name_partner);
            $('#name_partner2').val(name_partner);
            $('#day').val(day);
            $('#year').val(year);
            $('#sworn_address').val(sworn_address);
            $('#publish_month').val(publish_month);
            $('#publish_year').val(publish_year);
            // $('#owner_name').val(name);
            // $('#owner_address').val(address);
            // $('#owner_telephone').val(telephone);
            // $('#owner_tin').val(tin);
            // $('#owner_created_at').text("Date Created: " + created_at);
            // $('#owner_updated_at').text("Date Updated: " + updated_at);
            // $('#process_owner_toggle')
            // .text("DESELECT")
            // .removeClass('badge-success')
            // .addClass('badge-warning')
            // .removeAttr('disabled')
            // .css('pointer-events', 'auto');
            const modal = bootstrap.Modal.getInstance($('#form1_modal'));
            modal.hide();
        });

        $('#btn_clear').on('click', function(event) {
            event.preventDefault(); // prevent the default behavior of the link
            $('#form_id').val("");
            $('#municipality').val("");
            $('#province').val("");
            $('#name').val("");
            $('#name2').val("");
            $('#address').val("");
            $('#name_partner').val("");
            $('#name_partner2').val("");
            $('#day').val("");
            $('#year').val("");
            $('#sworn_address').val("");
            $('#publish_month').val("");
            $('#publish_year').val("");
            // $('#owner_created_at').text("---");
            // $('#owner_updated_at').text("---");
        });
    });
});

</script>
