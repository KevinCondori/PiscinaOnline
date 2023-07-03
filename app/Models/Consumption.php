<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumption extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'user_id',
        'product_id',
        'consumption_date',
        'consumption_amount',
        'consumption_description'
          ]; 
}
