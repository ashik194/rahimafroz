<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BecomeDealer extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'name_of_company',
        'phone_number',
        'email',
        'district',
        'thana',
        'zip_code',
        'captcha',
    ];
}
