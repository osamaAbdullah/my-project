<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Passenger extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name' ,
        'phone_number',
        'emergency_phone_number',
        'email',
        'emergency_email',
        'birthday',
        'gender',
        'weight',
        'height',
        'bio',
        'address',
        'profile_picture',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];
}
