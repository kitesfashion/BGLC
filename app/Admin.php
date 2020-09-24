<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email','username','role','roleName','roleLevel','password','status'
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
