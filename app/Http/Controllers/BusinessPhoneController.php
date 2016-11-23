<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BusinessPhone;

use App\Http\Requests\BusinessPhoneFormRequest;

class BusinessPhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $businessPhones = BusinessPhone::paginate(10);
        return view('business_phone.index')->with('businessPhones', $businessPhones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('business_phone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BusinessPhoneFormRequest $request){
        $businessPhone = new BusinessPhone;
        $businessPhone->companies_id   = $request->get('companies_id');
        $businessPhone->phone_operator = $request->get('phone_operator');
        $businessPhone->ddd            = $request->get('ddd');
        $businessPhone->phone          = $request->get('phone');
        $businessPhone->save();

        return redirect('/telefones_corporativos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $businessPhone = BusinessPhone::findOrFail($id);

        return view('business_phone.show')->with('businessPhone', $businessPhone);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $businessPhone = BusinessPhone::findOrFail($id);

        return view('business_phone.edit')->with('businessPhone', $businessPhone);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BusinessPhoneFormRequest $request, $id){
        $businessPhone = BusinessPhone::findOrFail($id);
        $businessPhone->companies_id   = $request->get('companies_id');
        $businessPhone->phone_operator = $request->get('phone_operator');
        $businessPhone->ddd            = $request->get('ddd');
        $businessPhone->phone          = $request->get('phone');
        $businessPhone->save();

        return redirect('/telefones_corporativos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $businessPhone = BusinessPhone::findOrFail($id);
        $businessPhone->delete();

        return redirect('/telefones_corporativos');
    }
}
