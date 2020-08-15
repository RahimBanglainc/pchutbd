<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category', 'Category_id');
    }
    public function items()
    {
        return $this->hasMany('App\Item');
    }


    public function feature()
    {
        return $this->hasMany('App\Feature');
    }
}
