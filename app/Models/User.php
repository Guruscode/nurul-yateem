<?php

namespace App\Models;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Guidian;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'user_type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    static public function getGuidian () {

        // return self::select('users.*')
        //             ->where('user_type','=',3)
        //             ->orderBy('id', 'asc')
        //             ->get();
        return User::get();
    }
    static public function getSponsor () {

        return self::select('users.*')
                    ->where('user_type','=',2)
                    ->orderBy('id', 'asc')
                    ->get();
    }
    static public function getOphans () {

        return self::select('ophans.*')                  
                    ->orderBy('id', 'asc')
                    ->get();
    }
    
    public function guardians()
    {
        return $this->hasMany(Guidian::class);
    }
}
