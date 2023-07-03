<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moduleabout extends Model
{
    use HasFactory;
    protected $fillable = [
        'aboutname',
        'user_id',
        'aboutdescription',
        'aboutexperience',
        'aboutmenu',
        'aboutplace',
        'aboutcharacters',
        'imageabout1',
        'imageabout2',
        'modulestate',
     ]; 
}
