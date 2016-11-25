<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\BusinessContact;

use App\Http\Requests\BusinessContactFormRequest;

class BusinessContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $businessContacts = BusinessContact::paginate(10);
        return view('business_contact.index')->with('businessContacts', $businessContacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('business_contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BusinessContactFormRequest $request){
        $businessContact = new BusinessContact;
        $businessContact->companies_id = $request->get('companies_id');
        $businessContact->people_id    = $request->get('people_id');
        $businessContact->save();

        return redirect('/contatos_corporativos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $businessContact = BusinessContact::findOrFail($id);
     
        return view('business_contact.show')->with('businessContact', $businessContact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $businessContact = BusinessContact::findOrFail($id);

        return view('business_contact.edit')->with('businessContact', $businessContact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BusinessContactFormRequest $request, $id){
        $businessContact = BusinessContact::findOrFail($id);
        $businessContact->companies_id = $request->get('companies_id');
        $businessContact->people_id    = $request->get('people_id');
        $businessContact->save();

        return redirect('/contatos_corporativos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $businessContact = BusinessContact::findOrFail($id);
        $businessContact->delete();

        return redirect('/contatos_corporativos');
    }
}

