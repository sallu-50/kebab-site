<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function locationPrices()
    {
        return $this->hasMany(LocationMenuItem::class);
    }

    public function locations()
    {
        return $this->belongsToMany(Location::class, 'location_menu_item')->withPivot('price');
    }
}
