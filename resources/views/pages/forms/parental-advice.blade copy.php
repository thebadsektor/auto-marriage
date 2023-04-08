<x-base-layout>
    <div class="row gy-10 gx-xl-10">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <form id="form-process-form" method="POST" action="{{ route('process-parental-advice') }}">
                        @csrf

                    <h3 class="card-title">Parental Advice: <input type="text" id="form_id" name="form_id" style="width: 30px" disabled/></h3>
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-sm btn-light" id="btn_owner"
                        data-bs-toggle="modal" data-bs-target="#form1_modal">
                            Browse
                        </button>
                    </div>
                </div>
                <div class="card-body">
                        <div class="table-responsive">
                            <table class="table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="20"><h5>(MUNICIPAL FORM NO. 67)</h5>
                                            <h4 class="text-center"> FORM NO.7 </h4>
                                            <h1 class="text-center "> SWORN STATEMENT THAT ADVICE OF PARENT OR GUARDIAN HAS BEEN ASKED</h1>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="20" class="align-middle">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <p>City or Municipality of</p>
                                                </div>
                                                <div class="col-lg-5">
                                                    <input type="text" id="municipality" name="municipality">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <p>Province of</p>
                                                </div>
                                                <div class="col-lg-5">
                                                    <input type="text" id="province" name="province">
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td colspan="20">
                                            <p>I, <input type="text" id="name" name="name"> resident of <input type="text" id="address" name="address"> and aged {above twenty and under twenty-five, above eighteen but under twenty-three} years of being duly sworn , do hereby depose and say that I have asked my {parents, guardians} for advice upon my intended marriage with  <input type="text" id="name_partner" name="name_partner"> and that the advice given is attached hereto or has been refused.</p></td>
                                    </tr>
                                    <tr>
                                        <td colspan="20">
                                            <p class="text-center">      ____________________________________</p>
                                            <p class="text-center">  (Signature of person obliged to ask advice)</p> </td>
                                    </tr>
                                    <tr>
                                        <td colspan="20">
                                            <p>SUBSCRIBED AND SWORN to before me this
                                                <input type="number" id="day" name="day">
                                                day of
                                                <select id="month" name="month">
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

                                                , <input type="number" id="year" name="year">,  at <input type="text" id="sworn_address" name="sworn_address">, Philippines. </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="20">
                                            <p class="text-center"> _______________________________________</p>
                                            <p class="text-center">  (Signature of person administering oath)</p></td>
                                    </tr>
                                    <tr>
                                        <td colspan="20">
                                            <p class="text-center"> ___________________________________________</p>
                                            <p class="text-center"> (Position)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="20">
                                            <h4 class="text-center"> INSTRUCTIONS   </h4>
                                            <p> 1.	Each applicant shall be required to accomplish this form if within the ages indicated above. </p>
                                            <p> 2.	In case the advice has not been obtained, or if it be unfavorable, the Marriage License (Form No. 10) should be annotated above the signature of the Local Civil Registrar in the following manner. “Note: The advice upon the intended marriage of <input type="text" id="name2" name="name2"> with <input type="text" id="name_partner2" name="name_partner2"> not having been obtained or having been refused, the marriage shall not take place till after three months following completion of the publication, on
                                            <select id="publish_month" name="publish_month">
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
                                            </select>, 20<input type="number" id="publish_year" name="publish_year" style="width: 30px">, of the application for marriage license.”</p>
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
            { "data": "municipality" },
            { "data": "province" },
            { "data": "name" },
            { "data": "address" }
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

        // Reset the form and toggle button
        $('#process_owner_toggle').on('click', function() {

            if ($(this).hasClass('badge-success')) {
                $(this).text("DESELECT").removeClass('badge-success').addClass('badge-warning').removeAttr('disabled').css('pointer-events', 'auto');
                $('#owners-table tbody tr').removeClass('selected');
            } else {
                $('#owner_id').val("");
                $('#owner_title').text("");
                $('#owner_name').val("");
                $('#owner_address').val("");
                $('#owner_telephone').val("");
                $('#owner_tin').val("");
                $('#owner_created_at').text("---");
                $('#owner_updated_at').text("---");
                $(this).text("NEW").removeClass('badge-warning').addClass('badge-success text-light').css('pointer-events', 'none');
                $('#owners-table').DataTable().rows('.selected').deselect();
            }
        });
    });
});

</script>
