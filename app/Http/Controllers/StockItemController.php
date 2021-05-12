<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockItem\StorePostRequest;
use App\StockItems;
use Illuminate\Http\Request;

class StockItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stockbarang = StockItems::get();
        return view('stock_barang.index', compact(['stockbarang']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stock_barang.add');
    }

    public function store(StorePostRequest $request)
    {
        if (isset($request->validator) && $request->validator->fails()) {
            return redirect()->back()->withErrors($request->validator->messages());
        }

        StockItems::create($request->only('nama_barang', 'jenis', 'merk', 'ukuran',
                                        'stock', 'satuan', 'lokasi'));
        return redirect('/stockbarang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('stock_barang.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (isset($request->validator) && $request->validator->fails()) {
            dd($request->validator->messages());
            return redirect()->back()->withErrors($request->validator->messages());
        }

        StockItems::updated($request->only('nama_barang', 'jenis', 'merk', 'ukuran',
                                        'stock', 'satuan', 'lokasi'));
        return redirect('/stockbarang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
