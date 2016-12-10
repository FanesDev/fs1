<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CashFlow;

use App\Http\Requests\CashFlowFormRequest;

class CashFlowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $launches = CashFlow::orderBy('id')->paginate(10);
        return view('cash_flow.index')->with('launches', $launches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('cash_flow.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CashFlowFormRequest $request){
        $launch = new CashFlow;
        $launch->date        = $request->get('date');
        $launch->type        = $request->get('type');
        $launch->description = $request->get('description');
        $launch->amount      = $request->get('amount');
        $launch->save();

        return redirect('/fluxo_caixa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $launch = CashFlow::findOrFail($id);
     
        return view('cash_flow.show')->with('launch', $launch);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $launch = CashFlow::findOrFail($id);
     
        return view('cash_flow.edit')->with('launch', $launch);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CashFlowFormRequest $request, $id){
        $launch = CashFlow::findOrFail($id);
        $launch->date        = $request->get('date');
        $launch->type        = $request->get('type');
        $launch->description = $request->get('description');
        $launch->amount      = $request->get('amount');
        $launch->save();

        return redirect('/fluxo_caixa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $launch = CashFlow::findOrFail($id);
        $launch->delete();

        return redirect('/fluxo_caixa');
    }
}

