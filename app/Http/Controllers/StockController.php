<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Stock;

use App\Http\Requests\StockFormRequest;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $items = Stock::orderBy('id')->paginate(10);
        return view('stock.index')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
       return view('stock.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StockFormRequest $request){
        $item = new Stock;
        $item->products_id = $request->get('products_id');
        $item->in_stock  = $request->get('in_stock');
        $item->save();

        return redirect('/estoque');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $item = Stock::findOrFail($id);

        return view('stock.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $item = Stock::findOrFail($id);

        return view('stock.edit')->with('item', $item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StockFormRequest $request, $id){
        $item = Stock::findOrFail($id);
        $item->products_id = $request->get('products_id');
        $item->in_stock  = $request->get('in_stock');
        $item->save();

        return redirect('/estoque');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $item = Stock::findOrFail($id);
        $item->delete();

        return redirect('/estoque');
    }
}

