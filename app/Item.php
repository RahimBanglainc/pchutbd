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
        return $this->belongsTo('App\Subcategory', 'subcategory_id');
    }

    public function featureValue()
    {
        return $this->hasMany('App\FeatureValue');
    }

    public function favorite_to_users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
