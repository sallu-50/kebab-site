<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    const ROLE_SUPER_ADMIN = 'super_admin';
    const ROLE_MANAGER = 'manager';
    const ROLE_CUSTOMER = 'customer';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'role',
        'location_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function isSuperAdmin()
    {
        return $this->role === self::ROLE_SUPER_ADMIN;
    }

    public function isManager()
    {
        return $this->role === self::ROLE_MANAGER;
    }
}
   