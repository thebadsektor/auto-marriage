<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentalForm2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'address2',
        'name_male',
        'name_female',
    ];
}
