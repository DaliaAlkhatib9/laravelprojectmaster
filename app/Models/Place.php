<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{

    protected $table = 'places';

    protected $fillable = [
        'name', 'PIO', 'Provinces', 'Street', 'LocationLink', 'NearestAttraction', 'media_id'
    ];

    // Add any other model properties, relationships, or methods here

}
