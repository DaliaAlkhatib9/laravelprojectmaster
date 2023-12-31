<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{

    protected $table = 'trips';

    protected $fillable = [
        'Title', 'Description', 'PlaceId', 'CompanyId', 'startDate', 'EndDate', 'price', 'seats', 'UserId'
    ];
}
