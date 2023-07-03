<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponUsed extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_coupon',
        'date_coupon',
        'discount_coupon',
        'id_coupon',
        'id_user',
        'invoice_id',
          ];
}
