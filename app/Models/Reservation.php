<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'reservation_description',
        'reservation_date',
        'customer_id',
        'reservation_count',
        'reservation_state'
    ];    
}
