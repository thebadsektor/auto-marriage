<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        $applications = Application::with('applicants')->paginate(15);

        return view('pages.application.index', compact('applications'));

    }
    
    public function docu_auto()
    {

        return view('pages.document.docu');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grooms = Applicant::where('role', 'Groom')->orderBy('lastname')->get();
        $brides = Applicant::where('role', 'Bride')->orderBy('lastname')->get();
        return view('pages.application.create')
        ->with('grooms', $grooms)
        ->with('brides', $brides);
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
            'registry_no' => 'required',
            'groom_id' => 'required',
            'bride_id' => 'required',
            'province' => 'required',
            'city' => 'required',
            'rec_by' => 'required',
            'receipt_date' => 'required',
            'issuance_date' => 'required',
            'sworn_date' => 'required',
            'sworn_place' => 'required',
            'ctc_no' => 'required',
            'ctc_date' => 'required',
            'ctc_place' => 'required',
        ]);

        $groom = Applicant::find($request->groom_id);
        $bride = Applicant::find($request->bride_id);

        $newApplication = Application::create([
            'registry_no' => $request->registry_no,
            'groom_id' => $request->groom_id,
            'bride_id' => $request->bride_id,
            'province' => $request->province,
            'city' => $request->city,
            'rec_by' => $request->rec_by,
            'receipt_date' => $request->receipt_date,
            'license_no' => $request->license_no,
            'issuance_date' => $request->issuance_date,
            'sworn_date' => $request->sworn_date,
            'sworn_place' => $request->sworn_place,
            'ctc_no' => $request->ctc_no,
            'ctc_date' => $request->ctc_date,
            'ctc_place' => $request->ctc_place,
        ]);

        $lastCreatedId = $newApplication->id;

        $groom->update([
            'application_id' => $lastCreatedId

        ]);

        $bride->update([
            'application_id' => $lastCreatedId

        ]);


        return redirect('applications');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        $application = Application::with('applicants')->find($application->id);
        $applicants = $application->applicants;

        return view('pages.application.show', compact('application', 'applicants'));
    }
     
    public function show_form(Application $application)
    {
        $application = Application::with('applicants')->find($application->id);
        $applicants = $application->applicants;

        return view('pages.application.form', compact('application', 'applicants'));
    }

    public function table()
    {
        return view('pages.application.table');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        $grooms = Applicant::where('role', 'Groom')->orderBy('lastname')->get();
        $brides = Applicant::where('role', 'Bride')->orderBy('lastname')->get();
        $application = Application::find($application->id);
        return view('pages.application.edit')
        ->with('application', $application)
        ->with('grooms', $grooms)
        ->with('brides', $brides);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        // dd($request);

        $this->validate($request, [
            'registry_no' => 'required',
            'groom_id' => 'required',
            'bride_id' => 'required',
            'province' => 'required',
            'city' => 'required',
            'rec_by' => 'required',
            'receipt_date' => 'required',
            'issuance_date' => 'required',
            'sworn_date' => 'required',
            'sworn_place' => 'required',
            'ctc_no' => 'required',
            'ctc_date' => 'required',
            'ctc_place' => 'required',
        ]);

        $application->update([
            'registry_no' => $request->registry_no,
            'groom_id' => $request->groom_id,
            'bride_id' => $request->bride_id,
            'province' => $request->province,
            'city' => $request->city,
            'rec_by' => $request->rec_by,
            'receipt_date' => $request->receipt_date,
            'license_no' => $request->license_no,
            'issuance_date' => $request->issuance_date,
            'sworn_date' => $request->sworn_date,
            'sworn_place' => $request->sworn_place,
            'ctc_no' => $request->ctc_no,
            'ctc_date' => $request->ctc_date,
            'ctc_place' => $request->ctc_place,
        ]);

        return redirect('application/show/'.$application->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        $application->delete();
        return redirect('applications');
    }

    public function batchDestroy(Request $request)
    {
        $ids = $request->input('ids');
        Application::destroy($ids);

        if($ids == null){
            return back()->with('error', 'The error message here!');
        }
        return redirect()->back();
    }
}
