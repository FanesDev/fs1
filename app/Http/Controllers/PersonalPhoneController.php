<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PersonalPhone;

use App\Http\Requests\PersonalPhoneFormRequest;

class PersonalPhoneController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $personalPhones = PersonalPhone::paginate(10);
        return view('personal_phone.index')->with('personalPhones', $personalPhones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('personal_phone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonalPhoneFormRequest $request){
        $personalPhone = new PersonalPhone;
        $personalPhone->people_id      = $request->get('people_id');
        $personalPhone->phone_operator = $request->get('phone_operator');
        $personalPhone->ddd            = $request->get('ddd');
        $personalPhone->phone          = $request->get('phone');
        $personalPhone->save();

        return redirect('/telefones_pessoais');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $personalPhone = PersonalPhone::findOrFail($id);

        return view('personal_phone.show')->with('personalPhone', $personalPhone);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $personalPhone = PersonalPhone::findOrFail($id);

        return view('personal_phone.edit')->with('personalPhone', $personalPhone);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonalPhoneFormRequest $request, $id){
        $personalPhone                 = PersonalContact::findOrFail($id);
        $personalPhone->people_id      = $request->get('people_id');
        $personalPhone->phone_operator = $request->get('phone_operator');
        $personalPhone->phone          = $request->get('phone');
        $personalPhone->save();

        return redirect('/telefones_pessoais');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $personalPhone = PersonalPhone::findOrFail($id);
        $personalPhone->delete();

        return redirect('/telefones_pessoais');
    }
}

