<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BusinessAddress;

use App\Http\Requests\BusinessAddressFormRequest;

class BusinessAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $businessAddresses = BusinessAddress::paginate(10);
        return view('business_address.index')->with('businessAddresses', $businessAddresses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){ 
       return view('business_address.create');
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BusinessAddressFormRequest $request){ 
        $businessAddress = new BusinessAddress;
        $businessAddress->companies_id = $request->get('companies_id');
        $businessAddress->state        = $request->get('state');
        $businessAddress->city         = $request->get('city');
        $businessAddress->logradouro   = $request->get('logradouro');
        $businessAddress->neighborhood = $request->get('neighborhood');
        $businessAddress->number       = $request->get('number');
        $businessAddress->cep          = $request->get('cep');
        $businessAddress->complement   = $request->get('complement');
        $businessAddress->save();

        return redirect('/enderecos_corporativos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $businessAddress = BusinessAddress::findOrFail($id);
     
        return view('business_address.show')->with('businessAddress', $businessAddress);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $businessAddress = businessAddress::findOrFail($id);

        return view('business_address.edit')->with('businessAddress', $businessAddress);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BusinessAddressFormRequest $request, $id){
        $personalAddress = BusinessAddress::findOrFail($id);
        $personalAddress->companies_id = $request->get('companies_id');
        $personalAddress->state        = $request->get('state');
        $personalAddress->logradouro   = $request->get('logradouro');
        $personalAddress->neighborhood = $request->get('neighborhood');
        $personalAddress->number       = $request->get('number');
        $personalAddress->cep          = $request->get('cep');
        $personalAddress->complement   = $request->get('complement');
        $personalAddress->save();

        return redirect('/enderecos_corporativos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $businessAddress = BusinessAddress::findOrFail($id);
        $businessAddress->delete();

        return redirect('/enderecos_corporativos');
    }
}
