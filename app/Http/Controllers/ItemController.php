<?php

namespace App\Http\Controllers;

use App\Http\Requests\Item\StorePostRequest;
use App\Item;
use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ItemController extends Controller
{/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Item::get();
        return view('barang.index', compact(['barang']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = Unit::pluck('satuan', 'id');
        return view('barang.add', compact(['units']));
    }

    public function store(StorePostRequest $request)
    {
        if (isset($request->validator) && $request->validator->fails()) {
            return redirect()->back()->withErrors($request->validator);
        }

        $barang = $request->nama_barang;
        $unit = $request->unit_id;
        $cekbarang = Item::where('nama_barang',  $request->nama_barang)->first();
        $cekunit = Item::where('unit_id',  $request->unit)->first();
        if ($cekbarang AND $cekunit) {
            return redirect('/barang')->with('gagal', 'gagal menambahkan barang, mohon maaf nama barang dan satuan sudah ada di database');
        }else{
            $items = new Item();
            $items->nama_barang = $barang;
            $items->unit_id = $unit;
            $items->harga = $request->harga;
            $items->save();
            return redirect('/barang')->with('succes', 'berhasil menambahkan data barang');
        }
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
        $units = Unit::pluck('satuan', 'id');
        $barang = Item::findOrFail($id);
        return view('barang.edit', compact(['barang','units']));
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

        Item::findOrFail($id)->update($request->only('nama_barang','unit_id','harga'));
        return redirect('/barang');
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
        Item::destroy($id);
        return redirect('/barang');   
    }
}