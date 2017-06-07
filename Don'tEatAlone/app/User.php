<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

         'UserName', 'email', 'UserCity',
        'UserPhone', 'UserPhoto', 'UserBirthDate', 'password',
        'remember_token', 'UserLongitude', 'UserLatitude',
        'Gender','UserInterests','UserJob','UserAge','UserAbout','role','activated'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'UserPassword', 'remember_token',
    ];
}
