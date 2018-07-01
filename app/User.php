<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'phone_number', 'password',
    ];

    protected $rules=array(
        'firstname'=>'required',
        'lastname'=>'required',
        'password'=>'required|confirmed',
        'password_confirmation'=>'',
        'email'=>'required|email',
        'phone_number'=>'required',
    );
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
