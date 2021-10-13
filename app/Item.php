<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $guarded = [];

    public function unit()
    {
        return $this->belongsTo('App\Unit');    
    }
}
