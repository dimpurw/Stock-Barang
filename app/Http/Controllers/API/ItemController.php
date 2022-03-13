<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Item\StorePostRequest;
use Validator;
use App\Item;
use App\Http\Resources\ItemResource;

class ItemController extends Controller
{
    public function index()
    {
        $data = Item::latest()->get();
        return response()->json([ItemResource::collection($data), 'Items fetched.']);
    }

    public function store(StorePostRequest $request)
    {
        if (isset($request->validator) && $request->validator->fails()) {
            return response()->json($request->validator->errors()); 
        }

        $cekbarang = Item::where('nama_barang',  $request->nama_barang)->first();
        $cekunit = Item::where('unit_id',  $request->unit_id)->first();
        if ($cekbarang AND $cekunit) {
            return response()->json('gagal menambahkan data, karena data sudah tersedia di database');
        }else{
            $item = Item::create([
                'kode_barang' => $request->kode_barang,
                'nama_barang' => $request->nama_barang,
                'unit_id' => $request->unit_id,
                'harga' => $request->harga
             ]);
            return response()->json(['Item created successfully.', new ItemResource($item)]);
        }
    }
}
