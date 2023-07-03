<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'history_stock',
        'history_amount',
        'product_id',
        'user_id',
        'history_add_product',
        'history_description'
          ]; 
}
