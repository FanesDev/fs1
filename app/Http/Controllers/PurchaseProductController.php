<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PurchaseProduct;

use App\Http\Requests\PurchaseProductFormRequest;

class PurchaseProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $purchaseProducts = PurchaseProduct::paginate(10);
        return view('purchase_product.index')->with('purchaseProducts', $purchaseProducts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('purchase_product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PurchaseProductFormRequest $request){
        $purchaseProduct = new PurchaseProduct;
        $purchaseProduct->purchase_orders_id  = $request->get('purchase_orders_id');
        $purchaseProduct->products_id         = $request->get('products_id');
        $purchaseProduct->unit_purchase_price = $request->get('unit_purchase_price');
        $purchaseProduct->quantity            = $request->get('quantity');
        $purchaseProduct->save();

        return redirect('/produtos_comprados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $purchaseProduct = PurchaseProduct::findOrFail($id);
     
        return view('purchase_product.show')->with('purchaseProduct', $purchaseProduct);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $purchaseProduct = PurchaseProduct::findOrFail($id);
     
        return view('purchase_product.edit')->with('purchaseProduct', $purchaseProduct);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PurchaseProductFormRequest $request, $id){
        $purchaseProduct = PurchaseProduct::findOrFail($id);
        $purchaseProduct->purchase_orders_id  = $request->get('purchase_orders_id');
        $purchaseProduct->products_id         = $request->get('products_id');
        $purchaseProduct->unit_purchase_price = $request->get('unit_purchase_price');
        $purchaseProduct->quantity            = $request->get('quantity');
        $purchaseProduct->save();

        return redirect('/produtos_comprados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $purchaseProduct = PurchaseProduct::findOrFail($id);
        $purchaseProduct->delete();

        return redirect('/produtos_comprados');
    }
}

