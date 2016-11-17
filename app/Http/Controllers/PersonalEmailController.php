<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PersonalEmail;

use App\Http\Requests\PersonalEmailFormRequest;

class PersonalEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $personalEmails = PersonalEmail::paginate(10);
        return view('personal_email.index')->with('personalEmails', $personalEmails);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('personal_email.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonalEmailFormRequest $request){
        $personalEmail = new PersonalEmail;
        $personalEmail->people_id = $request->get('people_id');
        $personalEmail->email  = $request->get('email');
        $personalEmail->save();

        return redirect('/emails_pessoais');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $personalEmail = PersonalEmail::findOrFail($id);

        return view('personal_email.show')->with('personalEmail', $personalEmail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $personalEmail = PersonalEmail::findOrFail($id);

        return view('personal_email.edit')->with('personalEmail', $personalEmail);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonalEmailFormRequest $request, $id)
    {
        $personalEmail            = PersonalEmail::findOrFail($id);
        $personalEmail->people_id = $request->get('people_id');
        $personalEmail->email     = $request->get('email');
        $personalEmail->save();

        return redirect('/emails_pessoais');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personalEmail = PersonalEmail::findOrFail($id);
        $personalEmail->delete();

        return redirect('/emails_pessoais');
    }
}
