<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locker extends Model
{
    use HasFactory;
    protected $fillable = [
        'locker_name',
        'locker_description',
        'locker_state'
    ]; 
}
