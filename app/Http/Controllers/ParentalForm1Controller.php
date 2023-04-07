<?php

namespace App\Http\Controllers;

use App\Models\ParentalForm1;
use Illuminate\Http\Request;
use DataTables;

class ParentalForm1Controller extends Controller
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

    }

    public function process(Request $request)
    {
        // dd($request);
        if(!empty($request['record-id'])){

            $parental_form = ParentalForm1::find($request['record-id']);

            $parental_form->update([
                'name' => $request['municipality'],
                'address' => $request['province'],
                'telephone' => $request['name'],
                'address' => $request['address'],
                'name_partner' => $request['name_partner'],
                'day' => $request['day'],
                'month' => $request['month'],
                'year' => $request['year'],
                'sworn_address' => $request['sworn_address'],
                'publish_month' => $request['publish_month'],
                'publish_year' => $request['publish_year'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Parental Advice Record Updated',

            ]);
        }else{

            $parental_form = ParentalForm1::create([
                'name' => $request['municipality'],
                'address' => $request['province'],
                'telephone' => $request['name'],
                'address' => $request['address'],
                'name_partner' => $request['name_partner'],
                'day' => $request['day'],
                'month' => $request['month'],
                'year' => $request['year'],
                'sworn_address' => $request['sworn_address'],
                'publish_month' => $request['publish_month'],
                'publish_year' => $request['publish_year'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Parental Advice Record Created',
            ]);
        }
    }

    public function all()
    {
        $query = ParentalForm1::query()->orderBy('updated_at', 'desc');
        return DataTables::eloquent($query)->toJson();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParentalForm1  $parentalForm1
     * @return \Illuminate\Http\Response
     */
    public function show(ParentalForm1 $parentalForm1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParentalForm1  $parentalForm1
     * @return \Illuminate\Http\Response
     */
    public function edit(ParentalForm1 $parentalForm1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ParentalForm1  $parentalForm1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParentalForm1 $parentalForm1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParentalForm1  $parentalForm1
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParentalForm1 $parentalForm1)
    {
        //
    }
}
