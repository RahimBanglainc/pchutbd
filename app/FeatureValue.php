<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeatureValue extends Model
{
    public function item()
    {
        return $this->belongsTo('App\Item', 'item_id');
    }

    public function feature()
    {
        return $this->belongsTo('App\Feature', 'feature_id');
    }
}
