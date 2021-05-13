<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncomingItem\StorePostRequest;
use App\IncomingItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class IncomingItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangmasuk = IncomingItems::get();
        return view('barang_masuk.index', compact(['barangmasuk']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang_masuk.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        if (isset($request->validator) && $request->validator->fails()) {
            return redirect()->back()->withErrors($request->validator);
        }

        IncomingItems::create($request->only('tanggal', 'nama_barang', 'jenis', 'merk', 'ukuran',
                                        'jumlah', 'satuan'));
        return redirect('/barangmasuk');
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
        $barangmasuk = IncomingItems::findOrFail($id);
        return view('barang_masuk.edit', compact(['barangmasuk']));
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

        IncomingItems::findOrFail($id)->update($request->only('tanggal', 'nama_barang', 'jenis', 'merk', 'ukuran',
                                                            'jumlah', 'satuan'));
        return redirect('/barangmasuk');
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
        IncomingItems::destroy($id);
        return redirect('/barangmasuk'); 
    }
}
