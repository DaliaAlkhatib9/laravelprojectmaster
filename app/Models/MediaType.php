<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaType extends Model
{

    protected $table = 'media_types';

    protected $fillable = [
        'name',
    ];

    // Add any other model properties, relationships, or methods here
}
