<?php

namespace App\Http\Controllers;

use App\ExitItems;
use App\Http\Requests\ExitItem\StorePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ExitItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangkeluar = ExitItems::get();
        return view('barang_keluar.index', compact(['barangkeluar']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang_keluar.add');
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

        ExitItems::create($request->only('tanggal', 'nama_barang', 'jenis', 'merk', 'ukuran',
                                        'jumlah', 'penerima'));
        return redirect('/barangkeluar');
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
        $barangkeluar = ExitItems::findOrFail($id);
        return view('barang_keluar.edit', compact(['barangkeluar']));
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

        ExitItems::findOrFail($id)->update($request->only('tanggal', 'nama_barang', 'jenis', 'merk', 'ukuran',
                                                            'jumlah', 'penerima'));
        return redirect('/barangkeluar');
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
        ExitItems::destroy($id);
        return redirect('/barangkeluar'); 
    }
}
