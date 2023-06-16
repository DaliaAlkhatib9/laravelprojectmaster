<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoices';

    protected $fillable = [
        'DueDate', 'TripId', 'IsPaid', 'PaymentMethodId'
    ];

    // Add any other model properties, relationships, or methods here
}
