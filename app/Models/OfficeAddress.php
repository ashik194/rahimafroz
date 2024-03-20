<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeAddress extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'office_name',
        'address',
        'phone',
        'email',
        'lat',
        'lon',
    ];
}
