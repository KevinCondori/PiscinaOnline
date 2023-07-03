<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'company_description',
        'company_image',
        'company_nit',
        'company_phone',
        'company_email',
        'company_address',
        'company_entryprice'
          ]; 
}
