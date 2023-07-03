<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoicecontrol extends Model
{
    use HasFactory;
    protected $fillable = [
        'control_auth',
        'control_key',
        'control_invoice',
        'control_date',
        'control_activity',        
          ];
}
