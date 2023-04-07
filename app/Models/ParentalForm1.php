<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentalForm1 extends Model
{
    use HasFactory;

    protected $fillable = [
        'municipality',
        'province',
        'name',
        'address',
        'name_partner',
        'day',
        'month',
        'year',
        'sworn_address',
        'name2',
        'name_partner2',
        'publish_month',
        'publish_year',
    ];
}
