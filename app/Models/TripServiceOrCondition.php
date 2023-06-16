<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripServiceOrCondition extends Model
{

    protected $table = 'trip_services_or_conditions';

    protected $fillable = [
        'TripId', 'ServiceId'
    ];
}
