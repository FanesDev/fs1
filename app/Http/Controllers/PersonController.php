<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Person;

use App\Http\Requests\PersonFormRequest;

class PersonController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $people = Person::orderBy('id')->paginate(10);
        return view('person.index')->with('people', $people);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('person.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonFormRequest $request){
        $person = new Person;
        $person->first_name = $request->get('first_name');
        $person->last_name  = $request->get('last_name');
        $person->cpf        = $request->get('cpf');
        $person->rg         = $request->get('rg');
        $person->sex        = $request->get('sex');
        $person->save();

        return redirect('/pessoas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $person = Person::findOrFail($id);
        
        return view('person.show')->with('person', $person);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $person = Person::findOrFail($id);

        return view('person.edit')->with('person', $person);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonFormRequest $request, $id){
        $person             = Person::findOrFail($id);
        $person->first_name = $request->get('first_name');
        $person->last_name  = $request->get('last_name');
        $person->cpf        = $request->get('cpf');
        $person->rg         = $request->get('rg');
        $person->sex        = $request->get('sex');
        $person->save();

        return redirect('/pessoas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $person = Person::findOrFail($id);
        $person->delete();

        return redirect('/pessoas');
    }
}

