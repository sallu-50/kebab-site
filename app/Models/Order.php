<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_name',
        'customer_address',
        'customer_phone',
        'customer_email',
        'total_amount',
        'status',
        'location_id', // লোকেশন wise order filter করতে দরকার হবে
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
