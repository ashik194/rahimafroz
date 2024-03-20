<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    use HasFactory;

    protected $fillable = [
        'header_logo',
        'phone_number',
        'fax',
        'email',
        'office_address',
        'years_logo',
        'footer_logo',
        'copyright_text',
        'about_title',
        'buy_now_url',
        'video',
        'facebook',
        'instagram',
        'linkedin',
        'youtube',
        'youtube_video',
        'facebook_page',
        'instagram_page',
        'linkedin_page',
        'footer_short_desc',
        'about_desc'
    ];
}
