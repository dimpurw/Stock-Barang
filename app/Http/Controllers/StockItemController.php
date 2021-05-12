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
        $stokbarang = StockItems::get();
        return view('stok_barang.index', compact(['stokbarang']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stok_barang.add');
    }

    public function store(StorePostRequest $request)
    {
        if (isset($request->validator) && $request->validator->fails()) {
            return redirect()->back()->withErrors($request->validator);
        }

        StockItems::create($request->only('nama_barang', 'jenis', 'merk', 'ukuran',
                                        'stok', 'satuan', 'lokasi'));
        return redirect('/stokbarang');
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
        $stokbarang = StockItems::findOrFail($id);
        return view('stok_barang.edit', compact(['stokbarang']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, $id)
    {
        if (isset($request->validator) && $request->validator->fails()) {
            return redirect()->back()->withErrors($request->validator);
        }

        StockItems::findOrFail($id)->update($request->only('nama_barang', 'jenis', 'merk', 'ukuran',
                                                            'stock', 'satuan', 'lokasi'));
        return redirect('/stokbarang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StockItems::destroy($id);
        return redirect('/stokbarang');   
    }
}
