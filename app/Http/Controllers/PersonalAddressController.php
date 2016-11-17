<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PersonalAddress;

use App\Http\Requests\PersonalAddressFormRequest;

class PersonalAddressController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $personalAddresses = PersonalAddress::paginate(10);
        return view('personal_address.index')->with('personalAddresses', $personalAddresses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('personal_address.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonalAddressFormRequest $request){
        $personalAddress = new PersonalAddress;
        $personalAddress->people_id    = $request->get('people_id');
        $personalAddress->state        = $request->get('state');
        $personalAddress->city         = $request->get('city');
        $personalAddress->logradouro   = $request->get('logradouro');
        $personalAddress->neighborhood = $request->get('neighborhood');
        $personalAddress->number       = $request->get('number');
        $personalAddress->cep          = $request->get('cep');
        $personalAddress->complement   = $request->get('complement');
        $personalAddress->save();

        return redirect('/enderecos_pessoais');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personalAddress = PersonalAddress::findOrFail($id);
                  
        return view('personal_address.show')->with('personalAddress', $personalAddress);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personalAddress = PersonalAddress::findOrFail($id);

        return view('personal_address.edit')->with('personalAddress', $personalAddress);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonalAddressFormRequest $request, $id)
    {
        $personalAddress = PersonalAddress::findOrFail($id);
        $personalAddress->people_id = $request->get('people_id');
        $personalAddress->state  = $request->get('state');
        $personalAddress->logradouro        = $request->get('logradouro');
        $personalAddress->neighborhood         = $request->get('neighborhood');
        $personalAddress->number        = $request->get('number');
        $personalAddress->cep        = $request->get('cep');
        $personalAddress->complement        = $request->get('complement');
        $personalAddress->save();

        return redirect('/enderecos_pessoais');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personalAddress = PersonalAddress::findOrFail($id);
        $personalAddress->delete();

        return redirect('/enderecos_pessoais');
    }
}
