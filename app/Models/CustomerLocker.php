<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerLocker extends Model
{
    use HasFactory;
    protected $fillable = [
        'locker_id',
        'customer_id',
        'locker_date',
        'locker_state',
          ]; 
}
