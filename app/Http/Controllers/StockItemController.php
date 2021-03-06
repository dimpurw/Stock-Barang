<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockItem\StorePostRequest;
use App\StockItem;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class StockItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stokbarang = StockItem::get();
        return view('stok_barang.index', compact(['stokbarang']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::pluck('nama_barang', 'id');
        return view('stok_barang.add', compact(['items']));
    }

    public function store(StorePostRequest $request)
    {
        if (isset($request->validator) && $request->validator->fails()) {
            return redirect()->back()->withErrors($request->validator);
        }
        
        StockItem::create($request->only('nama_barang', 'jenis', 'merk', 'ukuran',
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
        $id = Crypt::decrypt($id);
        $stokbarang = StockItem::findOrFail($id);
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

        StockItem::findOrFail($id)->update($request->only('nama_barang', 'jenis', 'merk', 'ukuran',
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
        $id = Crypt::decrypt($id);
        StockItem::destroy($id);
        return redirect('/stokbarang');   
    }
}
