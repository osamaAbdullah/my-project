<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Driver extends Authenticatable
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
        'age',
        'gender',
        'weight',
        'height',
        'bio',
        'vehicle_bio',
        'address',
        'profile_picture',
        'vehicle_picture',
        'type_of_vehicle',
        'max_pass'
    ];


    protected $hidden = [
        'password',
        'remember_token'
    ];
}
