<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeZone extends Model
{	protected $table = 'time_zone';

	protected $fillable = [
        'name','siteEmail1','siteEmail2','mobile1', 'mobile2','image', 'siteAddress1','siteAddress2','orderBy','status'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
