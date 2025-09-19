<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function menuItems()
    {
        return $this->belongsToMany(MenuItem::class, 'location_menu_item')->withPivot('price');
    }
}
