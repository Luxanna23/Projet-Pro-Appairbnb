<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    
    protected $fillable = [
        'id',
        'title',
        'description',
        'address',
        'price_per_night',
        'calendrier_id',
        'user_id',
    ];
}
