<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentalForm3 extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'municipality',
        'province',
        'name',
        'address',
        'guardian',
        'name2',
        'address2',
        'name3',
        'name4',
        'address3',
    ];
}
