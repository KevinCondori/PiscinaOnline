<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Systemlog extends Model
{
    use HasFactory;
    protected $fillable = [
        'log_user',
        'log_description',
        'log_date',
    ]; 
}
