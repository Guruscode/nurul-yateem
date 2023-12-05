<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Guidian extends Model
{
    use HasFactory;

    protected $fillable = [
            'user_id',
            'gender',
            'phone_number',
            'dob',
            'alt_phn_number',
            'profile_img',
            'employment_status',
            'annual_income',
            'nature_of_occupation',
            'employer_name',
            'employer_address',
            'employer_phone',
            'mean_of_identity',
            'identity_number',
            'id_issue_date',
            'id_expiry_date',
            'marital_status',
            'other_information',
            'affidavit',
    ];

    static public function getGuidian () {

        return self::select('guidians.*')
                    ->orderBy('id', 'asc')
                    ->get();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

