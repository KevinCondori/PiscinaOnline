<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'company_id',
        'invoice_name',
        'invoice_ci_customer',
        'invoice_price',
        'invoice_entryprice',
        'invoice_date',
        'invoice_description',
        'invoice_auth',
        'invoice_nit',
        'invoice_number',
        'invoice_limit_date',
        'invoice_control',
          ]; 
}
