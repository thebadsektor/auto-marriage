<style>
    .table-bordered > thead > tr, td, tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > thead > tr > th {
    border: 1px solid rgb(137, 97, 97); //your desired color
    }
    .table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > thead > tr > th {
    border: 1px solid rgb(137, 97, 97); //your desired color
    }
</style>
<x-base-layout>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Marriage Licence Application Form</h3>
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-sm btn-light">
                            <i class="fas fa-print"></i>Print
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <form method="post" id="browse_applications" action="{{ route('batch-destroy-applications') }}">
                            @csrf
                            <thead>
                                <tr>
                                    <td colspan="20">Municipal Form 90 (Form No. 2) (To be accomplished in quadruplicate using black ink)
                                        <br> (Revised January 2007)
                                        <br>
                                        <p class="text-center"> Republic of the Philippines </p> 
                                        <p class="text-center"> OFFICE OF THE CIVIL REGISTRAR GENERAL</p>
                                        <p class="text-center"> APPLICATION FOR MARRIAGE LICENSE</p>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="14">Province:<br><b>{{ ucwords(trans($application->province)) }}</b> </td>
                                    <td colspan="6" rowspan="2">Registry No. <br><br><b>{{ $application->registry_no }}</b></td>
                                </tr>
                                <tr>
                                    <td colspan="14">City/Municipality:<br><b>{{ ucwords(trans($application->city)) }}</b> </td>
                                    <td colspan="6"></td>
                                </tr>
                                <tr>
                                    <td colspan="10">Received by<br><b>{{ ucwords(trans($application->rec_by)) }}</b> </td>
                                    <td colspan="10">Marriage License No.<b>{{ ucwords(trans($application->province)) }}</b> </td>
                                </tr>
                                <tr>
                                    <td colspan="10">Date of Receipt<br><b>{{ ucwords(trans($application->receipt_date)) }}</b> </td>
                                    <td colspan="10">Date of Issuance of Marriage License<br><b>{{ ucwords(trans($application->issuance_date)) }}</b> </td>
                                </tr>
                                <tr>
                                    <td colspan="10">GROOM</td>
                                    <td colspan="10">BRIDE</td>
                                </tr>
                                <tr>
                                    <td colspan="10">The Civil Registrar
                                        <br> Sir/Madam:
                                        <br>May I apply for a license to contract marriage with
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <a href="/applicant/show/{{$applicant->id}}" style="text-decoration: none">
                                                    <b>{{ $applicant->firstname . ' ' . $applicant->lastname }}</b>
                                                </a>
                                            @endif
                                        @endforeach
                                        and to this effect, being duly sworn, I hereby depose and say that I have all the necessary qualifications and non of the   legal disqualifications to contract the said marriage, and that the following data are true and correct to the best of my knowledge and information:
                                    </td>
                                    <td colspan="10">The Civil Registrar
                                        <br> Sir/Madam:
                                        <br>May I apply for a license to contract marriage with
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <a href="/applicant/show/{{$applicant->id}}" style="text-decoration: none">
                                                    <b>{{ $applicant->firstname . ' ' . $applicant->lastname }}</b>
                                                </a>
                                            @endif
                                        @endforeach
                                        and to this effect, being duly sworn, I hereby depose and say that I have all the necessary qualifications and non of the   legal disqualifications to contract the said marriage, and that the following data are true and correct to the best of my knowledge and information:
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="8">(First)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->firstname }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4" rowspan="3">1. Name of Applicant </td>
                                    <td colspan="8">(First)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->firstname }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="8">(Middle)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->middlename }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="8">(Middle)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->middlename }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="8">(Last)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->lastname }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="8">(Last)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->lastname }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">(Day)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ date('d', strtotime($applicant->birthdate)) }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Month)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ date('F', strtotime($applicant->birthdate)) }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Year)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ date('y', strtotime($applicant->birthdate)) }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Age)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                @php
                                                    $birthdate = date_create($applicant->birthdate);
                                                    $age = date_diff($birthdate, date_create('today'))->y;
                                                @endphp
                                                <br><b>{{ $age }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">2. Date of Birth/Age</td>
                                    <td colspan="2">(Day)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ date('d', strtotime($applicant->birthdate)) }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Month)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ date('F', strtotime($applicant->birthdate)) }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Year)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ date('y', strtotime($applicant->birthdate)) }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Age)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                @php
                                                    $birthdate = date_create($applicant->birthdate);
                                                    $age = date_diff($birthdate, date_create('today'))->y;
                                                @endphp
                                                <br><b>{{ $age }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td colspan="3">(City/Municipality)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->city }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="3">(Province)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->province }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Country)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->country }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">3. Place of Birth</td>
                                    <td colspan="3">(City/Municipality)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->city }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="3">(Province)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->province }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Country)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->country }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">(Male/Female)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->sex }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">(Citizenship)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->citizenship }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">4. Sex/Citizenship </td>
                                    <td colspan="4">(Male/Female)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->sex }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">(Citizenship)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->citizenship }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>(House No.)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->house_no }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(Street)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->street }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(Barangay)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->barangay }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(City/Municipality)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->city }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Province)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->province }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Country)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->country }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">5. Residence </td>
                                    <td>(House No.)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->house_no }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(Street)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->street }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(Barangay)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->barangay }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(City/Municipality)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->city }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Province)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->province }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Country)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->country }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="8">
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->religion }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">6. Religion/Religious Sect </td>
                                    <td colspan="8">
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->religion }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="8">
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->civil_status }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">7. Civil Status </td>
                                    <td colspan="8">
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->civil_status }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="8">
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->dissolved_reason }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">8. If previously married: How was it dissolved? </td>
                                    <td colspan="8">
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->dissolved_reason }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">(City/Municipality)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->dissolved_city }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="3">(Province)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->dissolved_province }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Country)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->dissolved_country }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">9. Place where dissolved?</td>
                                    <td colspan="3">(City/Municipality)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->dissolved_city }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="3">(Province)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->dissolved_province }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Country)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->dissolved_country }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">(Day)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->dissolved_date }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="3">(Month)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->dissolved_date }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Year)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->dissolved_date }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">10. Date when dissolved?</td>
                                    <td colspan="3">(Day)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->dissolved_reason }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="3">(Month)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->dissolved_reason }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Year)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->dissolved_reason }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td colspan="8">
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->relationship_degree }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">11. Degree of relationship of contracting parties </td>
                                    <td colspan="8">
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->relationship_degree }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">(First)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->father_firstname }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="3">(Middle)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->father_firstname }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Last)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->father_firstname }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">12. Name of Father</td>
                                    <td colspan="3">(First)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->father_firstname }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="3">(Middle)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->father_middlename }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Last)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->father_lastname }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="8">
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->father_citizenship }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">13. Citizenship </td>
                                    <td colspan="8">
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->father_citizenship }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>(House No.)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->father_house_no }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(Street)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->father_street }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(Barangay)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->father_barangay }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(City/Municipality)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->father_city }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Province)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->father_province }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Country)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->father_country }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">14. Residence </td>
                                    <td>(House No.)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->father_house_no }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(Street)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->father_street}}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(Barangay)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->father_barangay }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(City/Municipality)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->father_city }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Province)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->father_province }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Country)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->father_country }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">(First)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->mother_firstname }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="3">(Middle)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->mother_middlename }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Last)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->mother_lastname }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">15. Name of Mother</td>
                                    <td colspan="3">(First)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->mother_firstname }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="3">(Middle)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->mother_middlename }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Last)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->mother_lastname }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="8">
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->mother_citizenship }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">16. Citizenship </td>
                                    <td colspan="8">
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->mother_citizenship }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>(House No.)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->mother_house_no }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(Street)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->mother_street }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(Barangay)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->mother_barangay }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(City/Municipality)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->mother_city }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Province)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->mother_province }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Country)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->mother_country }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">17. Residence </td>
                                    <td>(House No.)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->mother_house_no }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(Street)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->mother_street }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(Barangay)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->mother_barangay }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(City/Municipality)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->mother_city }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Province)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->mother_province }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Country)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->mother_country}}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="8">
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->consenting_person }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">18. Persons who gave consent or advice </td>
                                    <td colspan="8">
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->consenting_person }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="8">
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->consenting_person_relationship }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">19. Relationship </td>
                                    <td colspan="8">
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->consenting_person_relationship }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="8">
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->consenting_person_citizenship }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">20. Citizenship </td>
                                    <td colspan="8">
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->consenting_person_citizenship }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>(House No.)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->consenting_person_house_no }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(Street)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->consenting_person_street }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(Barangay)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->consenting_person_barangay }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(City/Municipality)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->consenting_person_city }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Province)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->consenting_person_province }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Country)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->groom_id)
                                                <br><b>{{ $applicant->consenting_person_country }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="4">21. Residence </td>
                                    <td>(House No.)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->consenting_person_house_no }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(Street)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->consenting_person_street }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(Barangay)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->consenting_person_barangay }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>(City/Municipality)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->consenting_person_city }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Province)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->consenting_person_province }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td colspan="2">(Country)
                                        @foreach ($application->applicants as $applicant)
                                            @if($applicant->id == $application->bride_id)
                                                <br><b>{{ $applicant->consenting_person_country }}</b>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="8">__________________
                                        <br>Signature of Applicant
                                        <br>
                                        <br>SUBSCRIBED AND SWORN to me before this ___ day of ____,____ at _____, Philippines affiant who exhibited to me his Community Tax Cert. _____ issued on ______,______,___ at ___________.
                                        <br>
                                        <br>____________________________________________
                                        <br>(Signature Over Printed Name of the Civil Registrar)
                                    </td>
                                    <td colspan="4">Exempt form documentaru stamp tax</td>
                                    <td colspan="8">__________________
                                        <br>Signature of Applicant
                                        <br>
                                        <br>SUBSCRIBED AND SWORN to me before this ___ day of ____,____ at _____, Philippines affiant who exhibited to me his Community Tax Cert. _____ issued on ______,______,___ at ___________.
                                        <br>
                                        <br>____________________________________________
                                        <br>(Signature Over Printed Name of the Civil Registrar)
                                    </td>
                                </tr>
                               
                                




                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</x-base-layout>
