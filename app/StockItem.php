<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockItem extends Model
{
    protected $table = 'stock_items';
    protected $guarded = [];

    public function items()
    {
        return $this->hasOne(Item::class);    
    }
}
