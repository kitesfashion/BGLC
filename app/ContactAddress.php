<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactAddress extends Model
{	protected $table = 'contact_address';

	protected $fillable = [
        'officeLocation','officeName','addressTitle1','addressTitle2','image','name','designation','address1','address2','email1', 'email2','mobile1', 'mobile2','orderBy','status'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
