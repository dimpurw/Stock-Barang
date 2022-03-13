<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'unit_id' => $this->unit_id,
            'kode_barang' => $this->kode_barang,
            'nama_barang' => $this->nama_barang,
            'harga' => $this->harga,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
