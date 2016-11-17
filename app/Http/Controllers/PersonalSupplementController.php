<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PersonalSupplement;

use App\Http\Requests\PersonalSupplementFormRequest;

class PersonalSupplementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $personalSupplements = PersonalSupplement::paginate(10);
        return view('personal_supplement.index')->with('personalSupplements', $personalSupplements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('personal_supplement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonalSupplementFormRequest $request){
        $personalSupplements= new PersonalSupplement;
        $personalSupplements->people_id = $request->get('people_id');
        $personalSupplements->supplement_name  = $request->get('supplement_name');
        $personalSupplements->supplement  = $request->get('supplement');
        $personalSupplements->save();

        return redirect('/suplementos_pessoais');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $personalSupplement = PersonalSupplement::findOrFail($id);

        return view('personal_supplement.show')->with('personalSupplement', $personalSupplement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $personalSupplement = PersonalSupplement::findOrFail($id);

        return view('personal_supplement.edit')->with('personalSupplement', $personalSupplement);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonalSupplementFormRequest $request, $id){
        $personalSupplement                  = PersonalSupplement::findOrFail($id);
        $personalSupplement->people_id       = $request->get('people_id');
        $personalSupplement->supplement_name = $request->get('supplement_name');
        $personalSupplement->supplement      = $request->get('supplement');
        $personalSupplement->save();

        return redirect('/suplementos_pessoais');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $personalSupplement = PersonalSupplement::findOrFail($id);
        $personalSupplement->delete();

        return redirect('/suplementos_pessoais');
    }
}

