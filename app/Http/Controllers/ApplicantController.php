<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.applicant.index', [
            'applicants' => Applicant::paginate(15),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.applicant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'role' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'birthdate' => 'required',
            'sex'  => 'required',
            'citizenship'  => 'required',
            'house_no'  => 'required',
            'street'  => 'required',
            'barangay' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'religion' => 'required',
            'civil_status' => 'required',
            'dissolved_reason'  => 'required',
            'dissolved_city'  => 'required',
            'dissolved_province'  => 'required',
            'dissolved_country'  => 'required',
            'dissolved_date'  => 'required',
            'relationship_degree'  => 'required',
            'father_firstname'  => 'required',
            'father_middlename'  => 'required',
            'father_lastname'  => 'required',
            'father_citizenship'  => 'required',
            'father_house_no'  => 'required',
            'father_street'  => 'required',
            'father_barangay' => 'required',
            'father_city' => 'required',
            'father_province' => 'required',
            'father_country' => 'required',
            'mother_firstname'  => 'required',
            'mother_middlename'  => 'required',
            'mother_lastname'  => 'required',
            'mother_citizenship'  => 'required',
            'mother_house_no'  => 'required',
            'mother_street'  => 'required',
            'mother_barangay' => 'required',
            'mother_city' => 'required',
            'mother_province' => 'required',
            'mother_country' => 'required',
            'consenting_person' => 'required',
            'consenting_person_relationship' => 'required',
            'consenting_person_citizenship' => 'required',
            'consenting_person_house_no'  => 'required',
            'consenting_person_street'  => 'required',
            'consenting_person_barangay' => 'required',
            'consenting_person_city' => 'required',
            'consenting_person_province' => 'required',
            'consenting_person_country' => 'required',
        ]);

        Applicant::create([
            'role' => $request->role,
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'birthdate' => $request->birthdate,
            'sex' => $request->sex,
            'citizenship' => $request->citizenship,
            'house_no' => $request->house_no,
            'street' => $request->street,
            'barangay' => $request->barangay,
            'city' => $request->city,
            'province' => $request->province,
            'country' => $request->country,
            'religion' => $request->religion,
            'civil_status' => $request->civil_status,
            'dissolved_reason' => $request->dissolved_reason,
            'dissolved_city' => $request->dissolved_city,
            'dissolved_province' => $request->dissolved_province,
            'dissolved_country' => $request->dissolved_country,
            'dissolved_date' => $request->dissolved_date,
            'relationship_degree' => $request->relationship_degree,
            'father_firstname' => $request->father_firstname,
            'father_middlename' => $request->father_middlename,
            'father_lastname' => $request->father_lastname,
            'father_citizenship' => $request->father_citizenship,
            'father_house_no' => $request->father_house_no,
            'father_street' => $request->father_street,
            'father_barangay' => $request->father_barangay,
            'father_city' => $request->father_city,
            'father_province' => $request->father_province,
            'father_country' => $request->father_country,
            'mother_firstname' => $request->mother_firstname,
            'mother_middlename' => $request->mother_middlename,
            'mother_lastname' => $request->mother_lastname,
            'mother_citizenship' => $request->mother_citizenship,
            'mother_house_no' => $request->mother_house_no,
            'mother_street' => $request->mother_street,
            'mother_barangay' => $request->mother_barangay,
            'mother_city' => $request->mother_city,
            'mother_province' => $request->mother_province,
            'mother_country' => $request->mother_country,
            'consenting_person' => $request->consenting_person,
            'consenting_person_relationship' => $request->consenting_person_relationship,
            'consenting_person_citizenship' => $request->consenting_person_citizenship,
            'consenting_person_house_no' => $request->consenting_person_house_no,
            'consenting_person_street' => $request->consenting_person_street,
            'consenting_person_barangay' => $request->consenting_person_barangay,
            'consenting_person_city' => $request->consenting_person_city,
            'consenting_person_province' => $request->consenting_person_province,
            'consenting_person_country' => $request->consenting_person_country,
        ]);

        return redirect('applicants');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        return view('pages.applicant.show')->with('applicant', $applicant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        return view('pages.applicant.edit')->with('applicant', $applicant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
        $this->validate($request, [
            'role' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'birthdate' => 'required',
            'sex'  => 'required',
            'citizenship'  => 'required',
            'house_no'  => 'required',
            'street'  => 'required',
            'barangay' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'religion' => 'required',
            'civil_status' => 'required',
            'dissolved_reason'  => 'required',
            'dissolved_city'  => 'required',
            'dissolved_province'  => 'required',
            'dissolved_country'  => 'required',
            'dissolved_date'  => 'required',
            'relationship_degree'  => 'required',
            'father_firstname'  => 'required',
            'father_middlename'  => 'required',
            'father_lastname'  => 'required',
            'father_citizenship'  => 'required',
            'father_house_no'  => 'required',
            'father_street'  => 'required',
            'father_barangay' => 'required',
            'father_city' => 'required',
            'father_province' => 'required',
            'father_country' => 'required',
            'mother_firstname'  => 'required',
            'mother_middlename'  => 'required',
            'mother_lastname'  => 'required',
            'mother_citizenship'  => 'required',
            'mother_house_no'  => 'required',
            'mother_street'  => 'required',
            'mother_barangay' => 'required',
            'mother_city' => 'required',
            'mother_province' => 'required',
            'mother_country' => 'required',
            'consenting_person' => 'required',
            'consenting_person_relationship' => 'required',
            'consenting_person_citizenship' => 'required',
            'consenting_person_house_no'  => 'required',
            'consenting_person_street'  => 'required',
            'consenting_person_barangay' => 'required',
            'consenting_person_city' => 'required',
            'consenting_person_province' => 'required',
            'consenting_person_country' => 'required',
        ]);

        $applicant->update([
            'role' => $request->role,
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'birthdate' => $request->birthdate,
            'sex' => $request->sex,
            'citizenship' => $request->citizenship,
            'house_no' => $request->house_no,
            'street' => $request->street,
            'barangay' => $request->barangay,
            'city' => $request->city,
            'province' => $request->province,
            'country' => $request->country,
            'religion' => $request->religion,
            'civil_status' => $request->civil_status,
            'dissolved_reason' => $request->dissolved_reason,
            'dissolved_city' => $request->dissolved_city,
            'dissolved_province' => $request->dissolved_province,
            'dissolved_country' => $request->dissolved_country,
            'dissolved_date' => $request->dissolved_date,
            'relationship_degree' => $request->relationship_degree,
            'father_firstname' => $request->father_firstname,
            'father_middlename' => $request->father_middlename,
            'father_lastname' => $request->father_lastname,
            'father_citizenship' => $request->father_citizenship,
            'father_house_no' => $request->father_house_no,
            'father_street' => $request->father_street,
            'father_barangay' => $request->father_barangay,
            'father_city' => $request->father_city,
            'father_province' => $request->father_province,
            'father_country' => $request->father_country,
            'mother_firstname' => $request->mother_firstname,
            'mother_middlename' => $request->mother_middlename,
            'mother_lastname' => $request->mother_lastname,
            'mother_citizenship' => $request->mother_citizenship,
            'mother_house_no' => $request->mother_house_no,
            'mother_street' => $request->mother_street,
            'mother_barangay' => $request->mother_barangay,
            'mother_city' => $request->mother_city,
            'mother_province' => $request->mother_province,
            'mother_country' => $request->mother_country,
            'consenting_person' => $request->consenting_person,
            'consenting_person_relationship' => $request->consenting_person_relationship,
            'consenting_person_citizenship' => $request->consenting_person_citizenship,
            'consenting_person_house_no' => $request->consenting_person_house_no,
            'consenting_person_street' => $request->consenting_person_street,
            'consenting_person_barangay' => $request->consenting_person_barangay,
            'consenting_person_city' => $request->consenting_person_city,
            'consenting_person_province' => $request->consenting_person_province,
            'consenting_person_country' => $request->consenting_person_country,
        ]);

        return redirect('applicant/show/'.$applicant->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        $applicant->delete();
        return redirect('applicants');
    }

    public function batchDestroy(Request $request)
    {
        $ids = $request->input('ids');
        Applicant::destroy($ids);

        if($ids == null){
            return back()->with('error', 'The error message here!');
        }
        return redirect()->back();
    }
}
