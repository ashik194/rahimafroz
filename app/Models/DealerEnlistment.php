<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealerEnlistment extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner',
        'banner_alt',
        'full_name',
        'company_name',
        'phone_number',
        'email',
        'district',
        'thana',
        'zip_code',
        'captcha',
    ];
}
