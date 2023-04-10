<?php

namespace App\Http\Controllers;

use App\Models\ParentalForm3;
use Illuminate\Http\Request;
use DataTables;

class ParentalForm3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function process(Request $request)
    {
        // dd($request);
        if(!empty($request['form_id'])){

            $parental_form = ParentalForm3::find($request['form_id']);

            $parental_form->update([
                'municipality' => $request['municipality'],
                'province' => $request['province'],
                'name' => $request['name'],
                'address' => $request['address'],
                'guardian' => $request['guardian'],
                'name2' => $request['name2'],
                'address2' => $request['address2'],
                'name3' => $request['name3'],
                'name4' => $request['name4'],
                'address3' => $request['address3'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Parental Consent Record Updated',

            ]);
        }else{

            ParentalForm3::create([
                'municipality' => $request['municipality'],
                'province' => $request['province'],
                'name' => $request['name'],
                'address' => $request['address'],
                'guardian' => $request['guardian'],
                'name2' => $request['name2'],
                'address2' => $request['address2'],
                'name3' => $request['name3'],
                'name4' => $request['name4'],
                'address3' => $request['address3'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Parental Consent Record Created',
            ]);
        }
    }

    public function all()
    {
        $form3 = ParentalForm3::query()->orderBy('updated_at', 'desc');
        return DataTables::eloquent($form3)
        ->addColumn('action', function($form3) {
            return 'data-id="' . $form3->id . '"
            data-municipality="' . $form3->municipality . '"
            data-province="' . $form3->province . '"
            data-name="' . $form3->name . '"
            data-address="' . $form3->address . '"
            data-guardian="' . $form3->guardian . '"
            data-name2="' . $form3->name2 . '"
            data-address2="' . $form3->address2 . '"
            data-name3="' . $form3->name3 . '"
            data-name4="' . $form3->name4 . '"
            data-address3="' . $form3->address3 . '"
            data-created="' . $form3->created_at . '"
            data-updated="' . $form3->updated_at . '"';
        })->toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParentalForm3  $parentalForm3
     * @return \Illuminate\Http\Response
     */
    public function show(ParentalForm3 $parentalForm3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParentalForm3  $parentalForm3
     * @return \Illuminate\Http\Response
     */
    public function edit(ParentalForm3 $parentalForm3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ParentalForm3  $parentalForm3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParentalForm3 $parentalForm3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParentalForm3  $parentalForm3
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParentalForm3 $parentalForm3)
    {
        //
    }
}
