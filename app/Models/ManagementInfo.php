<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagementInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'image_alt',
        'management_name',
        'designation',
        'description',
        'facebook',
        'instagram',
        'linkedin',
    ];
}
