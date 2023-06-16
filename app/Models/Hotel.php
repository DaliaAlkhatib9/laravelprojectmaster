<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';

    protected $fillable = [
        'idHotel', 'NameHotel', 'LocationLink', 'Address', 'contactNumber'
    ];

    // Add any other model properties, relationships, or methods here
}
