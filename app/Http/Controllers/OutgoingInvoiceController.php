<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\OutgoingInvoice;

use App\Http\Requests\OutgoingInvoiceFormRequest;

class OutgoingInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $outgoingInvoices = OutgoingInvoice::orderBy('id')->paginate(10);
        return view('outgoing_invoice.index')->with('outgoingInvoices', $outgoingInvoices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('outgoing_invoice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OutgoingInvoiceFormRequest $request){
        $outgoingInvoice = new OutgoingInvoice;
        $outgoingInvoice->number   = $request->get('number');
        $outgoingInvoice->maturity = $request->get('maturity');
        $outgoingInvoice->save();

        return redirect('/nfs_saida');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $outgoingInvoice = OutgoingInvoice::findOrFail($id);

        return view('outgoing_invoice.show')->with('outgoingInvoice', $outgoingInvoice);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $outgoingInvoice = OutgoingInvoice::findOrFail($id);

        return view('outgoing_invoice.edit')->with('outgoingInvoice', $outgoingInvoice);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OutgoingInvoiceFormRequest $request, $id){
        $outgoingInvoice = OutgoingInvoice::findOrFail($id);
        $outgoingInvoice->number   = $request->get('number');
        $outgoingInvoice->maturity = $request->get('maturity');
        $outgoingInvoice->save();

        return redirect('/nfs_saida');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $outgoingInvoice = OutgoingInvoice::findOrFail($id);
        $outgoingInvoice->delete();

        return redirect('/nfs_saida');
    }
}

