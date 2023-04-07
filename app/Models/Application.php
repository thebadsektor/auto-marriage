<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }

    protected $fillable=[
    'registry_no',
    'groom_id',
    'bride_id',
    'province',
    'city',
    'rec_by',
    'receipt_date',
    'license_no',
    'issuance_date',
    'sworn_date',
    'sworn_place',
    'ctc_no',
    'ctc_date',
    'ctc_place',
    ];
}
