<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SalesProduct;

use App\Http\Requests\SalesProductFormRequest;

class SalesProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $salesProducts = SalesProduct::paginate(10);
        return view('sales_product.index')->with('salesProducts', $salesProducts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('sales_product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalesProductFormRequest $request){
        $salesProduct = new SalesProduct;
        $salesProduct->sales_orders_id  = $request->get('sales_orders_id');
        $salesProduct->products_id      = $request->get('products_id');
        $salesProduct->unit_sales_price = $request->get('unit_sales_price');
        $salesProduct->quantity         = $request->get('quantity');
        $salesProduct->save();

        return redirect('/produtos_vendidos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $salesProduct = SalesProduct::findOrFail($id);

        return view('sales_product.show')->with('salesProduct', $salesProduct);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $salesProduct = SalesProduct::findOrFail($id);

        return view('sales_product.edit')->with('salesProduct', $salesProduct);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalesProductFormRequest $request, $id){
        $salesProduct = SalesProduct::findOrFail($id);
        $salesProduct->sales_orders_id  = $request->get('sales_orders_id');
        $salesProduct->products_id      = $request->get('products_id');
        $salesProduct->unit_sales_price = $request->get('unit_sales_price');
        $salesProduct->quantity         = $request->get('quantity');
        $salesProduct->save();

        return redirect('/produtos_vendidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $salesProduct = SalesProduct::findOrFail($id);
        $salesProduct->delete();

        return redirect('/produtos_vendidos');
    }
}

