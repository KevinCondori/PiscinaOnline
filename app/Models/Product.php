<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
       'product_type_id',
       'product_name',
       'product_description',
       'product_stock',
       'product_price',
       'product_cost',
       'product_amount',
       'product_image',
       'product_state'
    ]; 
}
