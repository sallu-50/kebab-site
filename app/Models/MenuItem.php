<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'name',
        'description',
        'base_price', // যদি location-wise price আলাদা থাকে, তাহলে base_price optional
        'category_id',
    ];

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
        return $this->belongsToMany(Location::class, 'location_menu_item')
            ->withPivot('price');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
