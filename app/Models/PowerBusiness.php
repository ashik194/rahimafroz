<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PowerBusiness extends Model
{
    use HasFactory;
    protected $fillable = [
        'banner',
        'banner_alt',
        'title',
        'description',
        'youtube_iframe',
        'rspb_milstone',
        'rspb_milstone_image',
        'rspb_milstone_description'
    ];
}
