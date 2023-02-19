<x-base-layout>
    <div class="row gy-10 gx-xl-10">
        <div class="col-xl-12">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Applicant</h3>
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
                    @if (isset($applicants) && count($applicants) > 0)
                        <div class="row">
                            <div class="col md-10 mb-3">
                                <a href="/applicant/create" class="btn btn-success">Add Applicant Record</a>
                            </div>
                            <div class="col mb-3 clearfix">
                                <button type="submit" form="browse_applicants" class="btn btn-secondary float-end"><i class="las la-trash"></i>Delete Selected</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-rounded table-flush">
                                <form method="post" id="browse_applicants" action="{{ route('batch-destroy-applicants') }}">
                                @csrf
                                <thead>
                                    <tr class="py-5 fw-bold  border-bottom border-gray-300 fs-6">
                                        <th class="min-w-20px" scope="col">#</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Applicant Name</th>
                                        <th scope="col">Barangay</th>
                                        <th scope="col">City/Municipality</th>
                                        <th scope="col">Province</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Date Updated</th>
                                        {{-- <th scope="col">Religion</th>
                                        <th scope="col">Civil Status</th>
                                        <th scope="col">Citizenship</th>
                                        <th scope="col">House No.</th>
                                        <th scope="col">Street</th>
                                        <th scope="col">Barangay</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Province</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Religion</th>
                                        <th scope="col">Civil Status</th>
                                        <th scope="col">If previously married: How was it dissolved?</th>
                                        <th scope="col">Dissolved City</th>
                                        <th scope="col">Dissolved Province</th>
                                        <th scope="col">Dissolved Country</th>
                                        <th scope="col">Degree of relationship of contracting parties</th>
                                        <th scope="col">Father's Firstname</th>
                                        <th scope="col">Father's Middlename</th>
                                        <th scope="col">Father's Lastname</th>
                                        <th scope="col">Father's Citizenship</th>
                                        <th scope="col">Father's House No.</th>
                                        <th scope="col">Father's Street</th>
                                        <th scope="col">Father's Barangay</th>
                                        <th scope="col">Father's City</th>
                                        <th scope="col">Father's Province</th>
                                        <th scope="col">Father's Country</th>
                                        <th scope="col">Mother's Firstname</th>
                                        <th scope="col">Mother's Middlename</th>
                                        <th scope="col">Mother's Lastname</th>
                                        <th scope="col">Mother's Citizenship</th>
                                        <th scope="col">Mother's House No.</th>
                                        <th scope="col">Mother's Street</th>
                                        <th scope="col">Mother's Barangay</th>
                                        <th scope="col">Mother's City</th>
                                        <th scope="col">Mother's Province</th>
                                        <th scope="col">Mother's Country</th>
                                        <th scope="col">Persons who gave consent or advice</th>
                                        <th scope="col">Consenting Person Relationship</th>
                                        <th scope="col">Consenting Person Citizenship</th>
                                        <th scope="col">Consenting Person House No.</th>
                                        <th scope="col">Consenting Person Street</th>
                                        <th scope="col">Consenting Person Barangay</th>
                                        <th scope="col">Consenting Person City</th>
                                        <th scope="col">Consenting Person Province</th>
                                        <th scope="col">Consenting Person Country</th> --}}
                                        <th scope="col">&nbsp;</th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($applicants as $applicant)
                                        <tr class="py-5 fw-semibold  border-bottom border-gray-300 fs-6">
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $applicant->role }}</td>
                                            <td><a href="/applicant/show/{{ $applicant->id }}">
                                                {{ $applicant->firstname . ' ' . $applicant->lastname}}
                                                </a>
                                            </td>
                                            <td>{{ $applicant->barangay }}</td>
                                            <td>{{ $applicant->city }}</td>
                                            <td>{{ $applicant->province }}</td>
                                            <td>{{ $applicant->country }}</td>
                                            {{-- <td>{{ $applicant->religion }}</td>
                                            <td>{{ $applicant->civil_status }}</td>
                                            <td>{{ $applicant->dissolved_reason }}</td>
                                            <td>{{ $applicant->dissolved_city }}</td>
                                            <td>{{ $applicant->dissolved_province }}</td>
                                            <td>{{ $applicant->dissolved_country }}</td>
                                            <td>{{ $applicant->dissolved_date }}</td>
                                            <td>{{ $applicant->relationship_degree }}</td>
                                            <td>{{ $applicant->father_firstname }}</td>
                                            <td>{{ $applicant->father_middlename }}</td>
                                            <td>{{ $applicant->father_lastname }}</td>
                                            <td>{{ $applicant->father_citizenship }}</td>
                                            <td>{{ $applicant->father_house_no }}</td>
                                            <td>{{ $applicant->father_street }}</td>
                                            <td>{{ $applicant->father_barangay }}</td>
                                            <td>{{ $applicant->father_city }}</td>
                                            <td>{{ $applicant->father_province }}</td>
                                            <td>{{ $applicant->father_country }}</td>
                                            <td>{{ $applicant->mother_firstname }}</td>
                                            <td>{{ $applicant->mother_middlename }}</td>
                                            <td>{{ $applicant->mother_lastname }}</td>
                                            <td>{{ $applicant->mother_citizenship }}</td>
                                            <td>{{ $applicant->mother_house_no }}</td>
                                            <td>{{ $applicant->mother_street }}</td>
                                            <td>{{ $applicant->mother_barangay }}</td>
                                            <td>{{ $applicant->mother_city }}</td>
                                            <td>{{ $applicant->mother_province }}</td>
                                            <td>{{ $applicant->mother_country }}</td>
                                            <td>{{ $applicant->consenting_person }}</td>
                                            <td>{{ $applicant->consenting_person_relationship }}</td>
                                            <td>{{ $applicant->consenting_person_citizenship }}</td>
                                            <td>{{ $applicant->consenting_person_house_no }}</td>
                                            <td>{{ $applicant->consenting_person_street }}</td>
                                            <td>{{ $applicant->consenting_person_barangay }}</td>
                                            <td>{{ $applicant->consenting_person_city }}</td>
                                            <td>{{ $applicant->consenting_person_province }}</td>
                                            <td>{{ $applicant->consenting_person_country }}</td> --}}
                                            <td>{{ $applicant->created_at }}</td>
                                            <td>{{ $applicant->updated_at }}</td>
                                            <td><input type="checkbox" name="ids[]" value="{{ $applicant->id }}"></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                    @else
                        <div class="alert alert-info text-center    " style="padding-top:71px; padding-bottom:71px">
                            The <b>Applicant</b> list is empty. Click <a class="badge badge-primary m-2" href="/applicant/create"><b>"Create New"</b></a> to start adding records.
                        </div>
                    @endif
                </div>
                <div class="card-footer">
                    @if (isset($applicants) && count($applicants) > 0)
                    <div class="row">
                        <div class="col">
                            {{ $applicants->links() }}
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</x-base-layout>
