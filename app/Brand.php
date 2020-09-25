<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory', 'Subcategory_id');
    }
}
