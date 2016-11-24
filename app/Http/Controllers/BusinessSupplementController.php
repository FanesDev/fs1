<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BusinessSupplement;

use App\Http\Requests\BusinessSupplementFormRequest;

class BusinessSupplementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $businessSupplements = BusinessSupplement::paginate(10);
        return view('business_supplement.index')->with('businessSupplements', $businessSupplements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('business_supplement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BusinessSupplementFormRequest $request){
        $businessSupplements = new BusinessSupplement;
        $businessSupplements->companies_id    = $request->get('companies_id');
        $businessSupplements->supplement_name = $request->get('supplement_name');
        $businessSupplements->supplement      = $request->get('supplement');
        $businessSupplements->save();

        return redirect('/suplementos_corporativos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $businessSupplement = BusinessSupplement::findOrFail($id);
        return view('business_supplement.show')->with('businessSupplement', $businessSupplement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $businessSupplement = BusinessSupplement::findOrFail($id);
        return view('business_supplement.edit')->with('businessSupplement', $businessSupplement);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BusinessSupplementFormRequest $request, $id){
        $businessSupplements = BusinessSupplement::findOrFail($id);
        $businessSupplements->companies_id    = $request->get('companies_id');
        $businessSupplements->supplement_name = $request->get('supplement_name');
        $businessSupplements->supplement      = $request->get('supplement');
        $businessSupplements->save();

        return redirect('/suplementos_corporativos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $businessSupplement = BusinessSupplement::findOrFail($id);
        $businessSupplement->delete();

        return redirect('/suplementos_corporativos');
    }
}
