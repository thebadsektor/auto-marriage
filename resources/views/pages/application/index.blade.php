<x-base-layout>
    <div class="row gy-10 gx-xl-10">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Applications</h3>
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-sm btn-light">
                            Action
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (isset($applications) && count($applications) > 0)
                        <div class="row">
                            <div class="col md-10 mb-3">
                                <a href="/application/create" class="btn btn-success">New Application</a>
                            </div>
                            <div class="col mb-3 clearfix">
                                <button type="submit" form="browse_applications" class="btn btn-secondary float-end"><i class="las la-trash"></i>Delete Selected</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-rounded table-flush">
                                <form method="post" id="browse_applications" action="{{ route('batch-destroy-applications') }}">
                                @csrf
                                <thead>
                                    <tr class="py-5 fw-bold  border-bottom border-gray-300 fs-6">
                                        <th class="min-w-20px" scope="col">#</th>
                                        <th scope="col">Registry No.</th>
                                        <th scope="col">Marriage License No.</th>
                                        <th scope="col">Couple</th>
                                        <th scope="col">Municipality</th>
                                        <th scope="col">Received by</th>
                                        <th scope="col">Date of Receipt</th>
                                        <th scope="col">&nbsp;</th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($applications as $application)
                                        <tr class="py-5 fw-semibold  border-bottom border-gray-300 fs-6">
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            {{-- may mali dito --}}
                                            {{-- <td><a href="/application/show/{{ $application->applicant->firstname }}">{{ $application->registry_no }}</a></td> --}}
                                            <td><a href="/application/show/{{ $application->id }}">{{ $application->registry_no }}</a></td>
                                            <td>{{ $application->license_no }}</td>
                                            <td>
                                                @foreach ($application->applicants as $applicant)
                                                    @if($applicant->id == $application->groom_id)
                                                    {{ $applicant->firstname }}
                                                    @endif
                                                @endforeach
                                                &
                                                @foreach ($application->applicants as $applicant)
                                                    @if($applicant->id == $application->bride_id)
                                                    {{ $applicant->firstname }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>{{ $application->city . ', ' . $application->province}}</td>
                                            <td>{{ $application->rec_by }}</td>
                                            <td>{{ $application->issuance_date }}</td>
                                            <td><input type="checkbox" name="ids[]" value="{{ $application->id }}"></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                    @else
                        <div class="alert alert-info text-center    " style="padding-top:71px; padding-bottom:71px">
                            The <b>Additional application</b> list is empty. Click <a class="badge badge-primary m-2" href="/application/create"><b>"Create New"</b></a> to start adding records.
                        </div>
                    @endif
                </div>
                <div class="card-footer">
                    @if (isset($applications) && count($applications) > 0)
                    <div class="row">
                        <div class="col">
                            {{ $applications->links() }}
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</x-base-layout>
