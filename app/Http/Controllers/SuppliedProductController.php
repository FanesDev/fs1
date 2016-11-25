<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SuppliedProduct;

use App\Http\Requests\SuppliedProductFormRequest;

class SuppliedProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $suppliedProducts = SuppliedProduct::paginate(10);
        return view('supplied_product.index')->with('suppliedProducts', $suppliedProducts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('supplied_product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuppliedProductFormRequest $request){
        $suppliedProduct = new SuppliedProduct;
        $suppliedProduct->suppliers_id = $request->get('suppliers_id');
        $suppliedProduct->products_id  = $request->get('products_id');
        $suppliedProduct->save();

        return redirect('/produtos_fornecidos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $suppliedProduct = SuppliedProduct::findOrFail($id);

        return view('supplied_product.show')->with('suppliedProduct', $suppliedProduct);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $suppliedProduct = SuppliedProduct::findOrFail($id);

        return view('supplied_product.edit')->with('suppliedProduct', $suppliedProduct);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SuppliedProductFormRequest $request, $id){
        $suppliedProduct = SuppliedProduct::findOrFail($id);
        $suppliedProduct->suppliers_id = $request->get('suppliers_id');
        $suppliedProduct->products_id  = $request->get('products_id');
        $suppliedProduct->save();

        return redirect('/produtos_fornecidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $suppliedProduct = SuppliedProduct::findOrFail($id);
        $suppliedProduct->delete();

        return redirect('/produtos_fornecidos');
    }
}

