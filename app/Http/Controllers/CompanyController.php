<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Company;

use App\Http\Requests\CompanyFormRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $companies = Company::paginate(10);
        return view('company.index')->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyFormRequest $request){
        $company               = new Company;
        $company->fantasy_name = $request->get('fantasy_name');
        $company->cnpj         = $request->get('cnpj');
        $company->save();

        return redirect('/empresas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $company = Company::findOrFail($id);
     
        return view('company.show')->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $company = Company::findOrFail($id);

        return view('company.edit')->with('company', $company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyFormRequest $request, $id){
        $company               = Company::findOrFail($id);
        $company->fantasy_name = $request->get('fantasy_name');
        $company->cnpj         = $request->get('cnpj');
        $company->save();

        return redirect('/empresas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect('/empresas');
    }
}

