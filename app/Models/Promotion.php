<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    protected $fillable = [
        'promo_name',
        'promo_description',
        'promo_code',
        'promo_from',
        'promo_to',
        'promo_discount',
        'promo_active',
        'promo_message',
        'promo_type',
        'promo_image',
        'promo_canal',
        'promo_state',
    ]; 
}
