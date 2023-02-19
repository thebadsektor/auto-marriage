<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    protected $fillable=[
        'application_id',
        'role' ,
        'firstname' ,
        'middlename' ,
        'lastname' ,
        'birthdate' ,
        'sex'  ,
        'citizenship'  ,
        'house_no'  ,
        'street'  ,
        'barangay' ,
        'city' ,
        'province',
        'country',
        'religion',
        'civil_status',
        'dissolved_reason' ,
        'dissolved_city' ,
        'dissolved_province' ,
        'dissolved_country' ,
        'dissolved_date' ,
        'relationship_degree' ,
        'father_firstname' ,
        'father_middlename' ,
        'father_lastname' ,
        'father_citizenship' ,
        'father_house_no' ,
        'father_street' ,
        'father_barangay',
        'father_city',
        'father_province',
        'father_country',
        'mother_firstname' ,
        'mother_middlename' ,
        'mother_lastname' ,
        'mother_citizenship' ,
        'mother_house_no' ,
        'mother_street' ,
        'mother_barangay',
        'mother_city',
        'mother_province',
        'mother_country',
        'consenting_person',
        'consenting_person_relationship',
        'consenting_person_citizenship',
        'consenting_person_house_no' ,
        'consenting_person_street' ,
        'consenting_person_barangay',
        'consenting_person_city',
        'consenting_person_province',
        'consenting_person_country',
    ];
}
