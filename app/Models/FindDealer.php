<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FindDealer extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'image_alt',
        'dealer_name',
        'address',
        'proprietor',
        'phone',
        'email',
        'lat',
        'lon',
    ];
}
