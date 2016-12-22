<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SalesOrder;

use App\Http\Requests\SalesOrderFormRequest;

class SalesOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $salesOrders = SalesOrder::orderBy('id')->paginate(10);
        return view('sales_order.index')->with('salesOrders', $salesOrders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('sales_order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalesOrderFormRequest $request){
        $salesOrder = new SalesOrder;
        $salesOrder->employees_id         = $request->get('employees_id');
        $salesOrder->customers_id         = $request->get('customers_id');
        $salesOrder->date_sales_order     = $request->get('date_sales_order');
        $salesOrder->form_payment         = $request->get('form_payment');
        $salesOrder->total_value          = $request->get('total_value');
        $salesOrder->outgoing_invoices_id = $request->get('outgoing_invoices_id');
        $salesOrder->status               = $request->get('status');
        $salesOrder->obs                  = $request->get('obs');
        $salesOrder->save();

        return redirect('/ordens_compra');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $salesOrder = SalesOrder::findOrFail($id);
        $salesProducts = SalesOrder::find($id)->detail;

        return view('sales_order.show')->with('salesOrder', $salesOrder)->with('salesProducts', $salesProducts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $salesOrder = SalesOrder::findOrFail($id);

        return view('sales_order.edit')->with('salesOrder', $salesOrder);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalesOrderFormRequest $request, $id){
        $salesOrder = SalesOrder::findOrFail($id);
        $salesOrder->employees_id         = $request->get('employees_id');
        $salesOrder->customers_id         = $request->get('customers_id');
        $salesOrder->date_sales_order     = $request->get('date_sales_order');
        $salesOrder->form_payment         = $request->get('form_payment');
        $salesOrder->total_value          = $request->get('total_value');
        $salesOrder->outgoing_invoices_id = $request->get('outgoing_invoices_id');
        $salesOrder->status               = $request->get('status');
        $salesOrder->obs                  = $request->get('obs');
        $salesOrder->save();

        return redirect('/ordens_compra');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
    }
}

