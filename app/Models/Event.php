<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'eventname',
        'user_id',
        'eventdescription',
        'eventpost',
        'eventimage',
        'event_date',
        'event_state',
        'event_price',
        'event_type',
        'event_public',
        'customer_id',
        'event_customer',
        'event_ci_customer'
          ]; 
}
