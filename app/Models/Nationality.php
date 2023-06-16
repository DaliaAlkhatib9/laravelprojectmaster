<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    protected $table = 'nationalities';

    protected $fillable = [
        'Name',
    ];

    // Add any other model properties, relationships, or methods here
}
