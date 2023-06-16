<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{

    protected $table = 'media';

    protected $fillable = [
        'MediaTypeId', 'MediaPath'
    ];

    // Add any other model properties, relationships, or methods here
}
