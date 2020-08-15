<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    public function featureValue()
    {
        return $this->hasMany('App\Feature');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\Subcategory', 'subcategory_id');
    }
}
