<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function stall()
    {
        return $this->belongsTo('App\Stall');
    }
    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }
}
