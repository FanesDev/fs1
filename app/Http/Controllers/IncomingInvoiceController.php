<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\IncomingInvoice;

use App\Http\Requests\IncomingInvoiceFormRequest;

class IncomingInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $incomingInvoices = IncomingInvoice::paginate(10);
        return view('incoming_invoice.index')->with('incomingInvoices', $incomingInvoices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('incoming_invoice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IncomingInvoiceFormRequest $request){
        $incomingInvoice = new Person;
        $incomingInvoice->number = $request->get('number');
        $incomingInvoice->maturity = $request->get('maturity');
        $incomingInvoice->save();

        return redirect('/nfs_compra');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $incomingInvoice = IncomingInvoice::findOrFail($id);
     
        return view('incoming_invoice.show')->with('incomingInvoice', $incomingInvoice);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $incomingInvoice = IncomingInvoice::findOrFail($id);
         
        return view('incoming_invoice.edit')->with('incomingInvoice', $incomingInvoice);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IncomingInvoiceFormRequest $request, $id){
        $incomingInvoice = IncomingInvoice::findOrFail($id);
        $incomingInvoice->number = $request->get('number');
        $incomingInvoice->maturity = $request->get('maturity');
        $incomingInvoice->save();

        return redirect('/nfs_compra');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $incomingInvoice = IncomingInvoice::findOrFail($id);
        $incomingInvoice->delete();

        return redirect('/nfs_compra');
    }
}


