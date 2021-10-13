<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'units';
    protected $guarded = [];

    public function item()
    {
        return $this->hasOne('App\Item');    
    }
}
