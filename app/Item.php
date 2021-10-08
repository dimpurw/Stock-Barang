<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $guarded = [];

    public function stock()
    {
        return $this->belongsTo(StockItem::class);    
    }
}
