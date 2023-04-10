<?php

namespace App\Http\Controllers;

use App\Models\ParentalForm2;
use Illuminate\Http\Request;
use Datatable;

class ParentalForm2Controller extends Controller
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

            $parental_form = ParentalForm2::find($request['form_id']);

            $parental_form->update([
                'address' => $request['address'],
                'address2' => $request['address2'],
                'name_male' => $request['name_male'],
                'name_female' => $request['name_female'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Parental Advice 2 Record Updated',

            ]);
        }else{

            $parental_form = ParentalForm2::create([
                'address' => $request['address'],
                'address2' => $request['address2'],
                'name_male' => $request['name_male'],
                'name_female' => $request['name_female'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Parental Advice 2 Record Created',
            ]);
        }
    }

    public function all()
    {
        $form1 = ParentalForm2::query()->orderBy('updated_at', 'desc');
        return DataTables::eloquent($form1)
        ->addColumn('action', function($form1) {
            return 'data-id="' . $form1->id . '"
            data-address="' . $form1->address . '"
            data-address2="' . $form1->address2 . '"
            data-name-male="' . $form1->name_male . '"
            data-name-female="' . $form1->name_female . '"
            data-created="' . $form1->created_at . '"
            data-updated="' . $form1->updated_at . '"';
        })->toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParentalForm2  $parentalForm2
     * @return \Illuminate\Http\Response
     */
    public function show(ParentalForm2 $parentalForm2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParentalForm2  $parentalForm2
     * @return \Illuminate\Http\Response
     */
    public function edit(ParentalForm2 $parentalForm2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ParentalForm2  $parentalForm2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParentalForm2 $parentalForm2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParentalForm2  $parentalForm2
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParentalForm2 $parentalForm2)
    {
        //
    }
}
