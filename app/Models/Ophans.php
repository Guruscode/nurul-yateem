<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ophans extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'firstname',
        'midname',
        'lastname',
        'gender',
        'dob',
        'profile_img',
        'state_of_origin',
        'local_government',
        'school_status',
        'school_name',
        'school_phone_number',
        'school_email',
        'class',
        'guidian_affidavit',
        'other_information',
];
}
