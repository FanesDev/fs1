<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PurchaseOrder;

use App\Http\Requests\PurchaseOrderFormRequest;

class PurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $purchaseOrders = PurchaseOrder::paginate(10);
        return view('purchase_order.index')->with('purchaseOrders', $purchaseOrders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('purchase_order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PurchaseOrderFormRequest $request){
        $purchaseOrder = new PurchaseOrder;
        $purchaseOrder->suppliers_id         = $request->get('suppliers_id');
        $purchaseOrder->date_purchase_order  = $request->get('date_purchase_order');
        $purchaseOrder->delivery_date        = $request->get('delivery_date');
        $purchaseOrder->form_payment         = $request->get('form_payment');
        $purchaseOrder->total_value          = $request->get('total_value');
        $purchaseOrder->incoming_invoices_id = $request->get('incoming_invoices_id');
        $purchaseOrder->status               = $request->get('status');
        $purchaseOrder->obs                  = $request->get('obs');
        $purchaseOrder->save();

        return redirect('/ordens_compra');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $purchaseOrder = PurchaseOrder::findOrFail($id);

        return view('purchase_order.show')->with('purchaseOrder', $purchaseOrder);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $purchaseOrder = PurchaseOrder::findOrFail($id);

        return view('purchase_order.edit')->with('purchaseOrder', $purchaseOrder);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PurchaseOrderFormRequest $request, $id){
        $purchaseOrder = PurchaseOrder::findOrFail($id);
        $purchaseOrder->suppliers_id         = $request->get('suppliers_id');
        $purchaseOrder->date_purchase_order  = $request->get('date_purchase_order');
        $purchaseOrder->delivery_date        = $request->get('delivery_date');
        $purchaseOrder->form_payment         = $request->get('form_payment');
        $purchaseOrder->total_value          = $request->get('total_value');
        $purchaseOrder->incoming_invoices_id = $request->get('incoming_invoices_id');
        $purchaseOrder->status               = $request->get('status');
        $purchaseOrder->obs                  = $request->get('obs');
        $purchaseOrder->save();

        return redirect('/ordens_compra');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $purchaseOrder = PurchaseOrder::findOrFail($id);
        $purchaseOrder->delete();

        return redirect('/ordens_compra');
    }
}

