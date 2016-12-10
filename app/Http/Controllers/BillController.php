<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bill;

use App\Http\Requests\BillFormRequest;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $bills = Bill::orderBy('id')->paginate(10);
        return view('bill.index')->with('bills', $bills);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('bill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BillFormRequest $request){
        $bill = new Bill;
        $bill->date        = $request->get('date');
        $bill->type        = $request->get('type');
        $bill->description = $request->get('description');
        $bill->amount      = $request->get('amount');
        $bill->save();

        return redirect('/contas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $bill = Bill::findOrFail($id);

        return view('bill.show')->with('bill', $bill);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $bill = Bill::findOrFail($id);

        return view('bill.edit')->with('bill', $bill);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BillFormRequest $request, $id){
        $bill = Bill::findOrFail($id);
        $bill->date        = $request->get('date');
        $bill->type        = $request->get('type');
        $bill->description = $request->get('description');
        $bill->amount      = $request->get('amount');
        $bill->save();

        return redirect('/contas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $bill = Bill::findOrFail($id);
        $bill->delete();

        return redirect('/contas');
    }
}

