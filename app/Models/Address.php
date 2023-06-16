<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
        'provinces', 'area', 'street', 'UserId', 'HotelId', 'address_id'
    ];

    // Add any other model properties, relationships, or methods here
}
