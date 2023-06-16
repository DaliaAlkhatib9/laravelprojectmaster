<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    protected $table = 'contact_details';

    protected $fillable = [
        'Email', 'phone', 'phone2', 'AddressId', 'Facebooklink', 'Instgramlink'
    ];

    // Add any other model properties, relationships, or methods here
}
