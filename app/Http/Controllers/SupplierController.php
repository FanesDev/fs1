<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplier;

use App\Http\Requests\SupplierFormRequest;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $suppliers = Supplier::paginate(10);
        return view('supplier.index')->with('suppliers', $suppliers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierFormRequest $request){
        $supplier = new Supplier;
        $supplier->companies_id = $request->get('companies_id');
        $supplier->save();

        return redirect('/fornecedores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $supplier = Supplier::findOrFail($id);
     
        return view('supplier.show')->with('supplier', $supplier);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $supplier = Supplier::findOrFail($id);
     
        return view('supplier.edit')->with('supplier', $supplier);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SupplierFormRequest $request, $id){
        $supplier = Supplier::findOrFail($id);
        $supplier->companies_id = $request->get('companies_id');
        $supplier->save();

        return redirect('/fornecedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        return redirect('/fornecedores');
    }
}
