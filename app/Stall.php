<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stall extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function item()
    {
        return $this->hasMany('App\Item');
    }
}
