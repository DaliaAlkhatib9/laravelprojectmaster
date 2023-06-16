<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = [
        'name', 'PIO', 'JoiningDate', 'Profile path', 'ContactDetailsId'
    ];

    // Add any other model properties, relationships, or methods here
}
