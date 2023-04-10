<x-base-layout>
    <div class="row gy-10 gx-xl-10">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <form id="form-process-form" method="POST" action="{{ route('process-parental-advice3') }}" class="w-100">
                        @csrf
                        <div class="w-100 d-flex align-items-center">
                            <h3 class="card-title fw-bold text-nowrap">Parental Consent</h3><input class="form-control h-30px fw-normal d-inline-block" type="text" id="form_id" name="form_id" style="background-color: #F2F0F0; width: 60px; margin-left: 4px; margin-right: 4px" readonly>
                            <a href="#" id="btn_clear" class="btn btn-sm btn-secondary d-flex justify-content-center align-items-center" style="font-size: 11px; height: 30px; width: 50px;">Clear</a>
                            <div class="w-100 card-toolbar justify-content-end">
                                <button type="button" class="btn btn-sm btn-info" id="btn_clear" data-bs-toggle="modal" data-bs-target="#form3_modal">
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
                                    <td colspan="20">
                                        <div class="px-5 py-5">
                                            <h5>MUNICIPAL FORM NO. 92</h5>
                                            <h4 class="text-center"> (FORM NO. 6)</h4>
                                            <h1 class="text-center "> CONSENT TO MARRIAGE OF A PERSON UNDER AGE</h1>
                                        </div>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="20">
                                        <div class="px-5 py-5 d-flex flex-column gap-3">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="text-nowrap">City or Municipality of</div>
                                                <input class="form-control h-30px fw-normal" type="text" id="municipality" name="municipality" style="background-color: #F2F0F0; width: 180px">
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                <div class="text-nowrap">Province of</div>
                                                <input class="form-control h-30px fw-normal" type="text" id="province" name="province" style="background-color: #F2F0F0; width: 180px">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="20">
                                        <div class="px-5 py-5">
                                            <div>I, <input class="form-control h-30px fw-normal d-inline-block" type="text"  id="name" name="name" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px">, resident of
                                                <input class="form-control h-30px fw-normal d-inline-block" type="text" id="address" name="address" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px">, and
                                                <select class="form-control h-30px fw-normal d-inline-block py-1" id="guardian" name="guardian" style="background-color: #F2F0F0; width: 140px; margin-left: 4px; margin-right: 4px">
                                                    <option value="01">Father</option>
                                                    <option value="02">Mother</option>
                                                    <option value="03">Person in charge</option>
                                                </select> of <input class="form-control h-30px fw-normal d-inline-block" type="text"  id="name2" name="name2" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px">, resident of <input class="form-control h-30px fw-normal d-inline-block" type="text" id="address2" name="address2"
                                                    style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px">, single and less than {twenty, eighteen} years of age, being duly sworn, do hereby depose and say that I freely
                                                consent to said <input class="form-control h-30px fw-normal d-inline-block" type="text" id="name3" name="name3" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px; margin-top: 8px;">, marrying with <input class="form-control h-30px fw-normal d-inline-block" type="text" id="name4" name="name4"
                                                    style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px">, resident of
                                                    <input class="form-control h-30px fw-normal d-inline-block" type="text" id="address3" name="address3" style="background-color: #F2F0F0; width: 180px; margin-left: 4px; margin-right: 4px">, and that I know of no legal impediment to such marriage.
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="20">
                                        <div class="px-5 py-5">
                                            <p class="text-center"> ____________________________________</p>
                                            <p class="text-center"> (Signature of mother, father or guardian)</p>
                                            <p>WITNESSES - (Not necessary if this affidavit is subscribed before the Local Civil Registrar concerned.)</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="20">
                                        <div class="px-5 py-5">
                                            <h2 class="text-center"> INSTRUCTIONS </h2>
                                            <p> In case either both the contracting parties, being single, or less than twenty years of age as regards the male and less than eighteen years as regards the female, they shall exhibit to the Local Civil Registrar concerned the consent to their marriage of their father, mother, or guardian, or person having legal charge of them, in the order mentioned.
                                                Such consent shall be in writing under oath taken with the appearance of the interested parties before the Local Civil Registrar concerned or in the form of an affidavit made in the presence of two witnesses and attested before any official authorized by the law to administer oaths. (Rep. Act 386, Art. 61.) </p>
                                            <p> For the purposes of the Marriage Law, by "guardian" is meant a guardian legally appointed by will or by a competent court fot the person, or both the person and estate, of a minor. By "person having legal charge" is meant a person actually in lawful charge of a minor who has no father nor mother, nor legal guardian. </p>
                                            <p>*Cross out unnecessary words</p>
                                            <p> 048354</p>
                                        </div>
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
    @include('pages.forms._parental-advice3')
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
            "ajax": "/parental-form3s/all",
            "columns": [
                { "data": "name2" },
                { "data": "name" },
                { "data": "municipality" },
                { "data": "address" },
            ],
            "createdRow": function(row, data, dataIndex) {
                console.log("Data used to create row:", data);
                $(row).attr('data-id', data.id);
                $(row).attr('data-municipality', data.municipality);
                $(row).attr('data-province', data.province);
                $(row).attr('data-name', data.name);
                $(row).attr('data-address', data.address);
                $(row).attr('data-guardian', data.guardian);
                $(row).attr('data-name2', data.name2);
                $(row).attr('data-address2', data.address2);
                $(row).attr('data-name3', data.name3);
                $(row).attr('data-name4', data.name4);
                $(row).attr('data-address3', data.address3);
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

            // Extract the form_id value from the data variable
            var form_id_value = data.split('&').find(function(param) {
                return param.startsWith('form_id=');
            });

            if (form_id_value) {
                form_id_value = form_id_value.split('=')[1];
                console.log("Form ID value from data:", form_id_value);
            } else {
                console.log("Form ID not found in data");
            }

            // Check if owner_id field is present
            if (data.indexOf('form_id=') !== -1) {
                console.log('Update!');
            } else {
                console.log('New!');
            }

            $.ajax({
                url: '/parental-form3/process',
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
                let guardian = $(this).data('guardian');
                let name2 = $(this).data('name2');
                let address2 = $(this).data('address2');
                let name3 = $(this).data('name3');
                let name4 = $(this).data('name4');
                let address3 = $(this).data('address3');
                const created_at = new Date($(this).data('created-at')).toLocaleString();
                const updated_at = new Date($(this).data('updated-at')).toLocaleString();
                // do something with the selected row ID
                console.log(form_id);
                $('#form_id').val(form_id);
                $('#municipality').val(municipality);
                $('#province').val(province);
                $('#name').val(name);
                $('#address').val(address);
                $('#guardian').val(guardian);
                $('#name2').val(name2);
                $('#address2').val(address2);
                $('#name3').val(name3);
                $('#name4').val(name4);
                $('#address3').val(address3);
                const modal = bootstrap.Modal.getInstance($('#form3_modal'));
                modal.hide();
            });

            $('#btn_clear').on('click', function(event) {
                event.preventDefault(); // prevent the default behavior of the link
                $('#form_id').val("");
                $('#municipality').val("");
                $('#province').val("");
                $('#name').val("");
                $('#address').val("");
                $('#guardian').val("");
                $('#name2').val("");
                $('#address2').val("");
                $('#name3').val("");
                $('#name4').val("");
                $('#address3').val("");
                // $('#owner_created_at').text("---");
                // $('#owner_updated_at').text("---");
            });
        });
    });
</script>
