<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\BusinessEmail;

use App\Http\Requests\BusinessEmailFormRequest;

class BusinessEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $businessEmails = BusinessEmail::paginate(10);
        return view('business_email.index')->with('businessEmails', $businessEmails);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('business_email.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BusinessEmailFormRequest $request){
        $businessEmail               = new BusinessEmail;
        $businessEmail->companies_id = $request->get('companies_id');
        $businessEmail->email         = $request->get('email');
        $businessEmail->save();

        return redirect('/emails_corporativos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $businessEmail = BusinessEmail::findOrFail($id);

        return view('business_email.show')->with('businessEmail', $businessEmail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $businessEmail = BusinessEmail::findOrFail($id);

        return view('business_email.edit')->with('businessEmail', $businessEmail);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BusinessEmailFormRequest $request, $id){
        $businessEmail               = BusinessEmail::findOrFail($id);
        $businessEmail->companies_id = $request->get('companies_id');
        $businessEmail->email         = $request->get('email');
        $businessEmail->save();

        return redirect('/emails_corporativos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $businessEmail = BusinessEmail::findOrFail($id);
        $businessEmail->delete();

        return redirect('/emails_corporativos');
    }
}

